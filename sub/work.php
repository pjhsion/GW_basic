<?php
include_once('./_common.php');

// 페이지 제목
$g5['title'] = "사업분야";

include_once(G5_PATH.'/_head.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_javascript('<script src="'.G5_THEME_JS_URL.'/script.js"></script>', 0); // 자바스크립트 파일 추가 방법
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/sub.css">', 0); // 스타일시트 추가 방법
?>

		<!-- about 시작 -->
		<section class="work_area_sec sub_sec">
			<div class="title wow bounceIn">
				<h3><span>Work field</span></h3>
				<p>사업영역</p>
			</div>

			<div class="content">
				<ul class="work_area">
					<li class="wow fadeInUp" data-wow-delay="0.3s">
						<div><img src="<?php echo G5_THEME_IMG_URL;?>/work_area_01.jpg" alt="it 솔루션"></div>
						<div>
							<h4>IT 솔루션</h4>
							<p>다양한 경험을 해온 그누위즈와 함께 문제를 해결해 나가는 솔루션을 제공받으세요.</p>
						</div>
					</li>
					<li class="wow fadeInUp" data-wow-delay="0.6s">
						<div><img src="<?php echo G5_THEME_IMG_URL;?>/work_area_02.jpg" alt="웹사이트 구축 및 운영"></div>
						<div>
							<h4>웹사이트 구축 및 운영</h4>
							<p>철저한 설계를 바탕으로 사용자 편의성을 높인 디자인의 사이트를 구축해드립니다. </p>
						</div>
					</li>
					<li class="wow fadeInUp" data-wow-delay="0.9s">
						<div><img src="<?php echo G5_THEME_IMG_URL;?>/work_area_03.jpg" alt="SEO 최적화"></div>
						<div>
							<h4>SEO 최적화</h4>
							<p>검색되지 않는 사이트는 무용합니다. 그누위즈는 확실한 SEO 최적화를 보장합니다.</p>
						</div>
					</li>
				</ul>
			</div>
		</section>

	</div>
	<!-- .sub_container end -->
</div>
<!-- .sub_boundary 끝 -->

<div class="sub_wide_boundary">
	<section class="process_sec sub_sec">
		<div class="title wow bounceIn">
			<h3><span>Work Process</span></h3>
			<p>그누위즈에서는 다음의 프로세스가 필요합니다.</p>
		</div>
		<div class="content">
			<ul class="process">
				<li class="wow fadeInUp" data-wow-delay="0.3s">
					<h4><p>1</p>기획 및 리서치</h4>
					<p>고객의 니즈를 정확히 파악하여 페이지를 기획하고 자료를 수집합니다.</p>
				</li>
				<li class="wow fadeInDown" data-wow-delay="0.6s">
					<h4><p>2</p>와이어프레임</h4>
					<p>리서치 작업이 완료되면 페이지구조를 도식화합니다. 꼭 필요한 기능과 플러그인을 확인하고 적재적소에 배치합니다.</p>
				</li>
				<li class="wow fadeInUp" data-wow-delay="0.9s">
					<h4><p>3</p>디자인 및 개발</h4>
					<p>사용자경험에 근거해 유용하고 편리한 사이트를 만듭니다.</p>
				</li>
				<li class="wow fadeInDown" data-wow-delay="1.2s">
					<h4><p>4</p>유지ㆍ보수</h4>
					<p>사이트 제작이 끝나고 나서도 다른 부분은 신경쓰지 않도록 유지ㆍ보수는 그누위즈가 맡아서 합니다.</p>
				</li>
			</ul>
		</div>
	</section>
	<!-- .process_sec 끝 -->

	<section class="project_request_sec sub_sec">
		<div class="content">
			<p>Start a project</p>
			<a href="/">프로젝트 의뢰하기<i class="link_btn_icon"></i></a> 
		</div>
	</section>
	<!-- .project_request_sec 끝 -->
</div>
<!-- .sub_wide_boundary 끝 -->

<?php
include_once(G5_PATH.'/_tail.php');
