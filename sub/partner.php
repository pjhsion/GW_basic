<?php
include_once('./_common.php');

// 페이지 제목
$g5['title'] = "파트너소개";

include_once(G5_PATH.'/_head.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_javascript('<script src="'.G5_THEME_JS_URL.'/script.js"></script>', 0); // 자바스크립트 파일 추가 방법
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/sub.css">', 0); // 스타일시트 추가 방법
?>


	</div>
	<!-- .sub_container end -->
</div>
<!-- .sub_boundary 끝 -->


<div class="sub_wide_boundary">
	<section class="partner_sec sub_sec">
		<div class="title wow bounceIn">
			<h3><span>Partner</span></h3>
			<p>○○○와 함께하는 전략적 파트너입니다.</p>
		</div>
		<div class="content">
			<ul class="partner">
				<li class="wow fadeInUp" data-wow-delay="0.3s">
					<div class="original"><span>Giggle</span></div>
					<div class="covered"><p>여기에 내용을 넣으세요 내용을 넣으세요 </p></div>
				</li>
				<li class="wow fadeInDown" data-wow-delay="0.6s">
					<div class="original"><span>Yaho</span></div>
					<div class="covered"><p>여기에 내용을 넣으세요 내용을 넣으세요 </p></div>				
				</li>
				<li class="wow fadeInUp" data-wow-delay="0.9s">
					<div class="original"><span>Never</span></div>
					<div class="covered"><p>여기에 내용을 넣으세요 내용을 넣으세요 </p></div>					
				</li>
				<li class="wow fadeInDown" data-wow-delay="1.2s">
					<div class="original"><span>Kekeo</span></div>
					<div class="covered"><p>여기에 내용을 넣으세요 내용을 넣으세요 </p></div>					
				</li>
			</ul>
		</div>
	</section>
	<!-- .process_sec 끝 -->

	<section class="client_sec sub_sec wow bounceIn" data-wow-delay=".5s">
		<div class="title">
			<h3><span>Our Client</span></h3>
			<p>협력사 리스트입니다 원하는 협력사의 이미지를 넣으세요. </p>
		</div>
		<div class="client">
			<ul class="client_inner">
				<li>
					<figure><img src="<?php echo G5_THEME_IMG_URL;?>/c_01.png" alt="고객사1"></figure>
				</li>
				<li>
					<figure><img src="<?php echo G5_THEME_IMG_URL;?>/c_02.png" alt="고객사2"></figure>
				</li>
				<li>
					<figure><img src="<?php echo G5_THEME_IMG_URL;?>/c_03.png" alt="고객사3"></figure>
				</li>
				<li>
					<figure><img src="<?php echo G5_THEME_IMG_URL;?>/c_04.png" alt="고객사4"></figure>
				</li>
				<li>
					<figure><img src="<?php echo G5_THEME_IMG_URL;?>/c_05.png" alt="고객사5"></figure>
				</li>
				<li>
					<figure><img src="<?php echo G5_THEME_IMG_URL;?>/c_06.png" alt="고객사6"></figure>
				</li>
				<li>
					<figure><img src="<?php echo G5_THEME_IMG_URL;?>/c_07.png" alt="고객사7"></figure>
				</li>
				<li>
					<figure><img src="<?php echo G5_THEME_IMG_URL;?>/c_08.png" alt="고객사8"></figure>
				</li>
				<li>
					<figure><img src="<?php echo G5_THEME_IMG_URL;?>/c_09.png" alt="고객사9"></figure>
				</li>
			</ul>
		</div>
	</section>
</div>
<!-- .sub_wide_boundary 끝 -->

<?php
include_once(G5_PATH.'/_tail.php');
