<?php
include_once('./_common.php');

// 페이지 제목
$g5['title'] = "PHP샘플 페이지";

include_once(G5_PATH.'/_head.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_javascript('<script src="'.G5_THEME_JS_URL.'/script.js"></script>', 0); // 자바스크립트 파일 추가 방법
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/sub.css">', 0); // 스타일시트 추가 방법
?>

    <!-- 여기 아래부터 모든 HTML 요소 구성 시작 -->

    <h2>PHP샘플 페이지</h2>

    <!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->

<?php
include_once(G5_PATH.'/_tail.php');
