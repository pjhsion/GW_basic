<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if ($gw_theme_table == false) { // 테마 파일 미설치시 설치 화면으로 이동 (gnuwiz)
    goto_url(G5_THEME_ADM_URL);
}

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 헤더 스킨 시작 { -->
<?php
include_once(G5_THEME_SKIN_PATH.'/header/'.$gw_config['cf_header_skin'].'/header.skin.php');  // 헤더 스킨
?>
<!-- } 헤더 스킨 끝 -->

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
	<div id="container">
	<?php if (!defined("_INDEX_")) { ?>
			
		<!-- .sub_header_container 시작 -->
		<?php
		$sub_img = 'sub_bg_img_0.jpg'; // 메뉴설정에 없는 메뉴라면 기본 이미지
		if ($menu_parents) {
			$sub_img = 'sub_bg_img_'.$menu_parents.'.jpg';
		}
		?>
		<div class="sub_header_container">
			<div class="sub_header">
				<img src="<?php echo G5_DATA_URL?>/theme/gnuwiz/sub_banner/<?php echo $sub_img; ?>" alt="서브 헤더">
				<p><span><?php echo get_head_title($g5['title']); ?></span></p>
			</div>
		</div>
		<!-- .sub_header_container 끝 -->

		<!-- sub_container 시작 -->
		<div class="sub_boundary">

		<div id="sub_container" class="">

			<!-- .breadcrumb_container 시작 -->
			<div class="breadcrumb_container">
				<ul class="breadcrumb">
					<li><a href="<?php echo G5_URL ?>" title="메인으로 돌아가기"><i class="fa fa-home" aria-hidden="true"></i>home</a></li>
					<?php 
					foreach($active_menu as $key => $item) { 
						if( $breadcrumbCount == $key ) { 
							echo "<li class='active'>{$item['name']}</li>";
							continue;
						}
						echo "<li><a href='{$item['url']}' target='_{$item['target']}'>{$item['name']}</a></li>";
					}
					?>
				</ul>
			</div>
			<!-- .breadcrumb_container 끝 -->

			<h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2>

	<?php }

