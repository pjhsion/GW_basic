<?php
include_once('./_common.php');

// 페이지 제목
$g5['title'] = "회사소개";

include_once(G5_PATH.'/_head.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_javascript('<script src="'.G5_THEME_JS_URL.'/script.js"></script>', 0); // 자바스크립트 파일 추가 방법
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/sub.css">', 0); // 스타일시트 추가 방법
?>

		<!-- about 시작 -->
		<article class="sub_wrap">	
			<section class="about_intro_sec sub_sec">
				<div class="title wow bounceIn">
					<h3>Gnuwiz Basic Theme</h3>
					<p>사용자 편의를 위한 그누보드 테마를 제공합니다.</p>
				</div>
				<div class="content wow fadeInUpBig" data-wow-delay=".5s" data-wow-duration="1">
					<dl>
						<dt><span>simple</span><span>useful</span></dt>
						<dd>
							<h2>심플하지만 실용적인 테마</h2>	
							<div>
								<p>그누위즈는 홈페이지 제작 전문 회사이며 그누보드를 기반으로 디자인과 웹프로그램을 전문적으로 제작, 개발하고 있습니다.
								다양한 프로젝트를 맡아오면서 그누보드 커스텀이 까다로움을 느끼고 이를 쉽게 접근해 홈페이지를 만들 수 있도록 그누위즈 베이직 테마를 
								제작했습니다. </p> 
								<p><span>그누위즈 베이직 테마는 심플하지만 유용함을 모토로 제작되었습니다.</span>
								<span>베이직한 그대로 사용하거나, 혹은 커스텀을 해도 무리가 없게 되도록 심플한 디자인으로 제작되었습니다. 또 그누보드 커스텀의 까다로움을 잘 알고 중점적으로 고민한 결과 게시판뿐만 아니라 헤더와 푸터도 스킨화했으며 이를 테마 관리자에 연동해 스킨을 따로 불러올 필요도 없이 버튼으로 조작하게 했습니다.</span>
								<span>헤더, 푸터 각 3종, 최근 게시물13종, 게시판 13종, 갤러리 6종</span>
								<span>위의 스킨들을 이용해 빠르고 간편하게 홈페이지를 만들어 보세요.</span>
								</p>
							</div>
						</dd>
					</dl>
				</div>
			</section>

			<section class="about_sec sub_sec">
				<div class="title wow bounceIn">
					<h3>philosophies</h3>
					<p>More than CODE</p>
				</div>
				<div class="content">
					<ul class="about_phil">
						<li class="wow fadeInUp" data-wow-delay="0.3s"> 
							<div class="icon"><figure><img src="<?php echo G5_THEME_IMG_URL;?>/about_icon_mission.svg" alt=""></figure></div>
							<div class="txt">
								<h4>mission</h4>
								우리는 파편화된 코드를 엮어 <p>사용자 중심의 그누보드 테마를 만듭니다.</p> 그누보드 관련 정보를 공유합니다.
							</div>
						</li>
						<li class="wow fadeInUp" data-wow-delay="0.6s">
							<div class="icon"><figure><img src="<?php echo G5_THEME_IMG_URL;?>/about_icon_value.svg" alt=""></figure></div>
							<div class="txt">
								<h4>value</h4>
								<p>정보의 공유</p>
								<p>노력과 발전</p>
							</div>
						</li>
						<li class="wow fadeInUp" data-wow-delay="0.9s">
							<div class="icon"><figure><img src="<?php echo G5_THEME_IMG_URL;?>/about_icon_vision.svg" alt=""></div>
							<div class="txt">
								<h4>vision</h4>
								<p>고객만족</p>
								<p>기술혁신</p>
								<p>가치창조</p>
							</div>
						</li>
					</ul>
				</div>
			</section>
		</article>
		<!-- about 끝 -->
	</div>
	<!-- sub_container 끝 -->
</div>
<!-- sub_container 끝 -->


<div class="sub_wide_boundary wow bounceIn" data-wow-delay=".5s">
	<section class="about_profile_sec sub_sec">
		<div class="inner">
			<div class="title">
				<h3>profile</h3>
				<p>회사개요</p>			
			</div>
			<div class="content">
				<dl class="profile_list">
					<dt>회사명</dt>
					<dd>그누위즈 베이직 테마</dd>
				</dl>
				<dl class="profile_list">
					<dt>대표자</dt>
					<dd>그누위즈</dd>
				</dl>
				<dl class="profile_list">
					<dt>주소</dt>
					<dd>부산광역시 해운대구 재송동 센텀동로 97</dd>
				</dl>
				<dl class="profile_list">
					<dt>연락처</dt>
					<dd>Tel. 010-1234-5678 / Fax. 051-0000-0000</dd>
				</dl>
				<dl class="profile_list">
					<dt>창업</dt>
					<dd>2015년 01월 01일</dd>
				</dl>
				<dl class="profile_list">
					<dt>자본금</dt>
					<dd>150,000,000원</dd>
				</dl>
				<dl class="profile_list">
					<dt>분야</dt>
					<dd>홈페이지 제작, 프로그램 개발</dd>
				</dl>
			</div>
		</div>
	</section>
	<!-- .about_profile_sec 끝 -->
</div>
<!-- .sub_wide_boundary 끝 -->


<?php
include_once(G5_PATH.'/_tail.php');
