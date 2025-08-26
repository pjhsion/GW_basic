<?php
include_once('./_common.php');

// 페이지 제목
$g5['title'] = "기본페이지";

include_once(G5_PATH.'/_head.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_javascript('<script src="'.G5_THEME_JS_URL.'/script.js"></script>', 0); // 자바스크립트 파일 추가 방법
add_stylesheet('<link rel="stylesheet" href="'.G5_URL.'/demo/css/info.css">', 0); // 스타일시트 추가 방법
?>

<!-- 여기 아래부터 모든 HTML 요소 구성 시작 -->

<section class="board_use_sec sub_sec">
	<div class="title">
		<h3><span>기본 페이지 적용방법</span></h3>
		<p>그누보드에서 제공하는 기본 페이지들도 모두 커스텀되어 있습니다.</p>
		<p>아래의 설정만으로 기본페이지 세팅은 완료됩니다.</p>
	</div>
	<!-- .title end -->

	<div class="content">
		<dl>
			<dt>1. 홈페이지 관리자 화면의 “테마설정” 메뉴에서 “그누위즈 베이직” 테마적용을 합니다.</dt>
			<dl><figure class="display_block"><img src="<?php echo G5_URL ?>/demo/board_img/gnu-basic-01.png" alt="테마적용"></figure></dl>
		</dl>

		<dl>
			<dt>2. 환경설정 / 기본환경설정 메뉴에서 “테마 스킨설정 가져오기” 버튼을 클릭합니다. 적용 해야할 곳이 두곳이 있습니다.</dt>
			<dl>
				<figure class="display_block"><img src="<?php echo G5_URL ?>/demo/board_img/gnu-basic-02.png" alt="테마적용"></figure>
				<figure class="display_block"><img src="<?php echo G5_URL ?>/demo/board_img/gnu-basic-03.png" alt="테마적용"></figure>
			</dl>
		</dl>

		<dl>
			<dt>3. 게시판관리 / 1:1문의 설정에서 스킨 디렉토리를 (테마) basic 으로 변경합니다.</dt>
			<dl><figure class="display_block"><img src="<?php echo G5_URL ?>/demo/board_img/gnu-basic-04.png" alt="테마적용"></figure></dl>
		</dl>
	</div>
</section>
<!-- .board_use_sec end -->

<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->
<?php
include_once(G5_PATH.'/_tail.php');
