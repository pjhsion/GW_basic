<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

/*************************************************************************
**
**  그누위즈 테마 함수 모음
**
*************************************************************************/

// 입력 폼 안내문
function gw_help($help="", $class="")
{
    global $g5;

    $str  = '<span class="frm_info '.$class.'">'.str_replace("\n", "<br>", $help).'</span>';

    return $str;
}

// 파일을 업로드 함
function gw_upload_file($srcfile, $destfile, $dir)
{
    if ($destfile == "") return false;
    // 업로드 한후 , 퍼미션을 변경함
    @move_uploaded_file($srcfile, $dir.'/'.$destfile);
    @chmod($dir.'/'.$destfile, G5_FILE_PERMISSION);
    return true;
}

// 출력순서
function gw_order_select($fld, $sel='')
{
    $s = '<select name="'.$fld.'" id="'.$fld.'">';
    for ($i=1; $i<=100; $i++) {
        $s .= '<option value="'.$i.'" ';
        if ($sel) {
            if ($i == $sel) {
                $s .= 'selected';
            }
        } else {
            if ($i == 50) {
                $s .= 'selected';
            }
        }
        $s .= '>'.$i.'</option>';
    }
    $s .= '</select>';

    return $s;
}

// 배너출력
function gw_display_banner($position, $skin='')
{
    global $g5, $gw_config;

    if (!$position) $position = '왼쪽';
    if (!$skin) $skin = 'mainbanner.skin.php';

    $skin_path = G5_THEME_SKIN_PATH.'/banner/'.$gw_config['cf_main_banner_skin'].'/'.$skin;

    if(file_exists($skin_path)) {
        // 접속기기
        $sql_device = " and ( bn_device = 'both' or bn_device = 'pc' ) ";

        // 배너 출력
        $sql = " select * from {$g5['gw_banner_table']} where '".G5_TIME_YMDHIS."' between bn_begin_time and bn_end_time $sql_device and bn_position = '$position' order by bn_order, bn_id desc ";
        $result = sql_query($sql);

        include $skin_path;
    } else {
        echo '<p>'.str_replace(G5_PATH.'/', '', $skin_path).'파일이 존재하지 않습니다.</p>';
    }
}

// 스킨디렉토리를 SELECT 형식으로 얻음
function gw_get_skin_select($skin_gubun, $id, $name, $selected='', $event='')
{
    global $config;

    $skins = array();

    if(defined('G5_THEME_PATH') && $config['cf_theme']) {
        $dirs = gw_get_skin_dir($skin_gubun, G5_THEME_SKIN_PATH.'/'.G5_SKIN_DIR);
        if(!empty($dirs)) {
            foreach($dirs as $dir) {
                $skins[] = 'theme/'.$dir;
            }
        }
    }

    $skins = array_merge($skins, gw_get_skin_dir($skin_gubun));

    $str = "<select id=\"$id\" name=\"$name\" $event>\n";
    for ($i=0; $i<count($skins); $i++) {
        if ($i == 0) $str .= "<option value=\"\">선택</option>";
        if(preg_match('#^theme/(.+)$#', $skins[$i], $match))
            $text = '(테마) '.$match[1];
        else
            $text = $skins[$i];

        $str .= option_selected($skins[$i], $selected, $text);
    }
    $str .= "</select>";
    return $str;
}

// 스킨경로를 얻는다
function gw_get_skin_dir($skin, $skin_path=G5_THEME_SKIN_PATH)
{
    global $g5;

    $result_array = array();

    $dirname = $skin_path.'/'.$skin.'/';
    if(!is_dir($dirname))
        return;

    $handle = opendir($dirname);
    while ($file = readdir($handle)) {
        if($file == '.'||$file == '..') continue;

        if (is_dir($dirname.$file)) $result_array[] = $file;
    }
    closedir($handle);
    sort($result_array);

    return $result_array;
}

function convertUrl($url = null)
{
	$path = null;
	$query = array();

	if (empty($url)) {
		$path = isset($_SERVER['REDIRECT_URL']) ? $_SERVER['REDIRECT_URL'] : $_SERVER['SCRIPT_NAME'];
		parse_str($_SERVER['QUERY_STRING'], $query);
	} else {
		$path = parse_url($url, PHP_URL_PATH);
		parse_str(parse_url($url, PHP_URL_QUERY), $query);
	}

	switch (true) {
	case stripos($path, '.php') === strlen($path) - 4:
		break;

	case stripos($path, '/content/') !== false
		&& preg_match('#/content/([^/]+)#', $path, $matches) === 1:
		$path = '/bbs/content.php';
		$query = array(
			'co_id' => $matches[1],
		);
		break;

	case preg_match('#/([^/]+)/write#', $path, $matches) === 1:
		$path = '/bbs/write.php';
		$query = array(
			'bo_table' => $matches[1],
		);
		break;

	case preg_match('#/([^/]+)/([^/]+)/#', $path, $matches) === 2:
		$path = '/bbs/board.php';
		$query = array(
			'bo_table' => $matches[1],
			'wr_seo_title' => $matches[2],
		);
		break;

	case preg_match('#/([^/]+)/([^/]+)#', $path, $matches) === 2:
		$path = '/bbs/board.php';
		$query = array(
			'bo_table' => $matches[1],
			'wr_id' => $matches[2],
		);
		break;

	case preg_match('#/([^/]+)#', $path, $matches) === 1:
		$path = '/bbs/board.php';
		$query = array(
			'bo_table' => $matches[1],
		);
		break;
	}

	return array($path, $query);
}
/*
$active_menu = array(
	array(
		'name' => 'HOME',
		'url' => G5_URL,
		'target' => '_self',
	),
);
*/
list($path, $query) = convertUrl();
$menus = get_menu_db(0, true);

function array_udiff_assoc_cb1($q, $w)
{
	return $q === $w;
}

try {
	foreach ($menus as $menu1) {
		if ($menu1['sub']) {
			foreach ($menu1['sub'] as $menu2) {
				list($mPath, $mQuery) = convertUrl($menu2['me_link']);

				$intersected = array_intersect_key($query, $mQuery);

				switch (true) {
				case in_array($mPath, array(
					'/bbs/board.php',
					'/bbs/write.php',
				)) && $mQuery['bo_table'] === $query['bo_table']:
					$matched = true;
					break;

				case $mPath === $path
					&& count($intersected) === count($mQuery)
					&& count(array_udiff_assoc($mQuery, $intersected, 'array_udiff_assoc_cb1')) === count($mQuery):
					$matched = true;
					break;

				default:
					$matched = false;
				}

				if ($matched) {
					$active_menu[] = array(
						'name' => $menu1['me_name'],
						'me_code' => $menu1['me_code'],
						'url' => $menu1['me_link'],
						'target' => $menu1['me_target'],
					);

					$active_menu[] = array(
						'name' => $menu2['me_name'],
						'me_code' => $menu2['me_code'],
						'url' => $menu2['me_link'],
						'target' => $menu2['me_target'],
					);

					throw new Exception('matched');
				}
			}
		}
	}
} catch (Exception $ex) {

}

if ($active_menu) {
	$breadcrumbCount = count($active_menu) - 1;
	$menu_parents = $active_menu[0]['me_code'];
}
