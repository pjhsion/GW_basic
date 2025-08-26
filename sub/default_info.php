<?php
include_once('./_common.php');

// 페이지 제목
$g5['title'] = "PHP생성 페이지";

include_once(G5_PATH.'/_head.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_javascript('<script src="'.G5_THEME_JS_URL.'/script.js"></script>', 0); // 자바스크립트 파일 추가 방법
add_stylesheet('<link rel="stylesheet" href="'.G5_URL.'/demo/css/info.css">', 0); // 스타일시트 추가 방법
?>

<link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.17.1/build/styles/androidstudio.min.css">
<script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.17.1/build/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

    <!-- 여기 아래부터 모든 HTML 요소 구성 시작 -->

		<section class="board_use_sec sub_sec">
			<div class="title">
				<h3><span>PHP생성 페이지 적용방법</span></h3>
				<p>www/theme/GW_basic/sub/sub.php</p>
			</div>
			<!-- .title end -->

			<div class="content">
				<dl>
					<dt>PHP생성 페이지를 사용하는 이유</dt>
					<dd>
						<ol>
							<li>홈페이지를 구축 시 그누보드에서 기본 제공하는 게시판, 내용관리, FAQ, Q&A 이외에 HTML 코딩으로 일반 페이지들을 생성하는 경우에 사용됩니다.</li>
							<li>직접 HTML이나 CSS를 코딩 할 줄 모르신다면 해당 PHP생성 페이지의 사용을 권장하지 않습니다.</li>
							<li>테마 구매 후 본 샘플 페이지를 메모장 또는 편집프로그램(에디트플러스, 울트라 에디트, 노트패드 등)으로 페이지 제목을 메뉴명과 동일하게 삽입해야 합니다.</li>
						</ol>
					</dd>
				</dl>

				<dl>
					<dt>PHP생성 페이지 사용방법</dt>
					<dd>
						<ol>
							<li>해당 샘플 파일의 $g5['title'] 변수에 메뉴에서 설정한 메뉴명과 동일하게 넣어주시면 됩니다.</li>
							<li>PHP생성 파일의 변수와 관리자메뉴의 메뉴명과 동일하게 등록하면 자동으로 헤더 부분에 메뉴가 연결됩니다.</li>
						</ol>

					</dd>
				</dl>
<pre>
	<code class="PHP">
		/* www/theme/GW_basic/sub/sub.php */

		$g5['title'] = "PHP생성 페이지"; // 메뉴에서 설정한 메뉴명을 입력하세요.
	</code>
</pre>
				<dl>
					<dd>
						<figure class="display_block">
							<img src="<?php echo G5_URL ?>/demo/info_img/info-01.png" alt="info-01">
							<img src="<?php echo G5_URL ?>/demo/info_img/info-02.png" alt="info-01">
						</figure>
					</dd>
				</dl>

				<dl>
					<dt>PHP 경로변경</dt>
					<dd>
						<ol>
							<li>PHP생성 페이지의 경로는 기본적으로 "www/theme/GW_basic/sub/" 경로에 있지만 본인이 원하신다면 "www/sub/" 등 임의의 경로를 생성하여 사용 가능합니다.</li>
							<li>위와 같이 PHP생성 페이지의 파일 경로를 변경하였다면, 관리자메뉴의 메뉴관리에서도 동일하게 수정하시면 됩니다.</li>
						</ol>
						<figure class="display_block"><img src="<?php echo G5_URL ?>/demo/info_img/info-03.png" alt="info-03"></figure>
					</dd>
				</dl>

				<dl>
					<dt></dt>
					<dd>
						<ol>
							<li>PHP생성 페이지에서 해당 부분에 원하는 HTML 및 PHP 코드를 추가하여 원하시는 페이지를 작성 할 수 있습니다.</li>
						</ol>
						<figure class="display_block width_100"><img src="<?php echo G5_URL ?>/demo/info_img/info-04.png" alt="info-04"></figure>
					</dd>
				</dl>
			</div>
		</section>

<?php
include_once(G5_PATH.'/_tail.php');
