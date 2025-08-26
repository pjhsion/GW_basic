<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
include_once(G5_THEME_PATH.'/newwin.inc.php'); // 팝업레이어
?>

	<!-- #idx_banner 시작 -->
	<section id="idx_banner">
		<?php echo gw_display_banner('메인', 'mainbanner.skin.php'); // 메인 배너 ?>
	</section>
	<!-- #idx_banner 끝 -->


	<!-- .main_intro 시작 -->
	<section class="main_intro main_section wow bounceIn" >
		<div class="main_boundary">
			<div class="title">
				<span>intro</span>
				<h2>그누위즈 테마 소개</h2>
			</div>
			<div class="content">
				<h4>그누보드 최신 5.4버전 기반의 반응형 웹사이트 테마입니다. </h4>
				<p>그누위즈 테마는 오랜 경력이 풍부한 숙련 된 개발자 & 디자이너가 함께 연구하여 개발한 테마입니다. <span>관리자페이지에서 몇번의 설정 조작만으로 간편하게 홈페이지를 만들 수 있도록 제작되었습니다.</span></p>
				<p>까다로운 반응형, 슬라이드 등 다양한 종류의 레이아웃이 이미 스킨으로 세팅되어 있으며, 게시판 종류 또한 <span>18종을 지원하여 코드를 몰라도 홈페이지를 간단하고 편리하게 제작할 수 있습니다.</span> <span>지금 바로 그누위즈의 테마로 홈페이지를 제작해 보세요!</span></p>
				<div class="buy_box"><a href = "https://sir.kr/cmall/" target="_blank" class="btn_buy">구매하기</a></div>
			</div>
			<p class="keyword wow bounceInDown" data-wow-duration="2s">5.4</p>
		</div>
	</section>
	<!-- .main_intro 끝 -->

	<!-- .main_icon_area 시작 -->
	<section class="main_icon_area main_section">
		<div class="main_boundary">
			<ul class="icon_box">
				<li class="icon_item wow fadeInLeft" data-wow-delay="0.3s">
					<figure><img src="<?php echo G5_THEME_IMG_URL; ?>/icon_design.svg" alt="디자인 아이콘"></figure>
					<div class="txt">
						<h4>베이직 디자인</h4>
						<p>어디에나 잘 어울리는 기본 디자인</p>
						<p>최신 트렌드를 담은 다양한 기본 스킨</p>
					</div>
				</li>
				<li class="icon_item wow fadeInLeft" data-wow-delay="0.6s">
					<figure><img src="<?php echo G5_THEME_IMG_URL; ?>/icon_web.svg" alt="웹 아이콘"></figure>
					<div class="txt">
						<h4>반응형 웹</h4>
						<p>PC 따로 Mobile 따로? No !</p>
						<p>모든 디바이스에 대응하는 완전한 반응형</p>
					</div>
				</li>
				<li class="icon_item wow fadeInLeft" data-wow-delay="0.9s">
					<figure><img src="<?php echo G5_THEME_IMG_URL; ?>/icon_code.svg" alt="코드 아이콘"></figure>
					<div class="txt">
						<h4>편리한 사용</h4>
						<p>테마 관리자에서 다양한 기능을<br>선택 사용 할 수 있는 간편한 시스템</p>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<!-- .main_icon_area 끝 -->


	<!-- .main_lastest : 최근 게시물 2열 시작 -->
	<section class="main_lastest_board main_section main_back_color">
		<div class="main_boundary">
			<div class="title">
				<span>latest basic</span>
				<h2>최근 게시물 2열</h2>
			</div>
			<div class="lastest_board">
				<div class="gw-row">
					<!-- 최신글 시작 { -->
					<div class="gw-col-sm-2">
						<?php echo latest("theme/basic", "free", 5, 25); ?>
					</div>
					<div class="gw-col-sm-2">
						<?php echo latest("theme/basic2", "qa", 5, 25); ?>
					</div>
					<!-- } 최신글 끝 -->
				</div>
			</div>
		</div>
	</section>
	<!-- .main_lastest : 최근 게시물 2열 끝 -->


	<!-- .main_lastest : 최근 게시물 3열 시작 -->
	<section class="main_lastest_board main_section">
		<div class="main_boundary">
			<div class="title">
				<span>latest basic</span>
				<h2>최근 게시물 3열</h2>
			</div>
			<div class="lastest_board">
				<div class="gw-row">
					<!-- 최신글 시작 { -->
					<div class="gw-col-sm-3">
						<?php echo latest("theme/basic2", "tag", 5, 25); ?>
					</div>
					<div class="gw-col-sm-3">
						<?php echo latest("theme/basic3", "qa", 5, 25); ?>
					</div>
					<div class="gw-col-sm-3">
						<?php echo latest("theme/basic", "faq", 5, 25); ?>
					</div>
					<!-- } 최신글 끝 -->
				</div>
			</div>
		</div>
	</section>
	<!-- .main_lastest : 최근 게시물 3열 끝 -->


	<!-- .main_lastest : 최근 게시물 4열 시작 -->
	<section class="main_lastest_board main_section">
		<div class="main_boundary">
			<div class="title">
				<span>latest basic</span>
				<h2>최근 게시물 4열</h2>
			</div>
			<div class="lastest_board">
				<div class="gw-row">
					<!-- 최신글 시작 { -->
					<div class="gw-col-sm-4">
						<?php echo latest("theme/basic", "free", 5, 25); ?>						
					</div>
					<div class="gw-col-sm-4">
						<?php echo latest("theme/basic3", "file", 5, 25); ?>						
					</div>
					<div class="gw-col-sm-4">
						<?php echo latest("theme/basic2", "qa", 5, 25); ?>						
					</div>
					<div class="gw-col-sm-4">
						<?php echo latest("theme/basic_color", "gallery", 5, 25); ?>						
					</div>
					<!-- } 최신글 끝 -->
				</div>
			</div>
		</div>
	</section>
	<!-- .main_lastest : 최근 게시물 4열 끝 -->


	<!-- .main_lastest : 최근 게시물 갤러리1 시작 -->
	<section class="main_section">
		<div class="main_boundary">
			<div class="title">
				<span>latest gallery</span>
				<h2>최근 게시물 갤러리1</h2>
			</div>
			<div class="lastest_pic_basic">
				<div class="latest_container">
					<!-- 최신글 시작 { -->
					<div class="latest_item">
						<?php echo latest("theme/pic_slide_basic", "gallery", 5, 20); ?>
					</div>
					<!-- } 최신글 끝 -->
				</div>
			</div>
		</div>
	</section>
	<!-- .main_lastest : 최근 게시물 갤러리1 끝 -->


	<!-- .main_lastest : 갤러리공지캐러셀 시작 -->
	<section class="main_section">
		<div class="main_boundary">
			<div class="title">
				<span>latest gallery slide</span>
				<h2>최근 게시물 갤러리2</h2>
			</div>
		</div>
		<div class="latest_container">
			<!-- 최신글 시작 { -->
			<div class="latest_item">
				<?php echo latest("theme/pic_slide_sync", "portfolio", 5, 16); ?>
			</div>
			<!-- } 최신글 끝 -->
		</div>
	</section>
	<!-- .main_lastest : 갤러리공지캐러셀 끝 -->


	<!-- .main_lastest : 공지캐러셀 시작 -->
	<section class="main_section">
		<div class="main_boundary">
			<div class="title">
				<span>latest card notice</span>
				<h2>최근 게시물 카드공지</h2>
			</div>
		</div>
		<div class="latest_container">
			<!-- 최신글 시작 { -->
			<div class="latest_item">
				<?php echo latest("theme/notice_slide_card", "free", 8, 25); ?>
			</div>
			<!-- } 최신글 끝 -->
		</div>
	</section>
	<!-- .main_lastest : 공지캐러셀 끝 -->


	<!-- .main_lastest : 최근 탭게시물 시작 -->
	<section class="main_section">
		<div class="main_boundary">
			<div class="title">
				<span>latest tab</span>
				<h2>최근 탭 게시물</h2>				
			</div>

			<div class="lastest_tab_board">
				<div class="gw-row">
					<div class="gw-col-md-2">
						<!-- 탭 주의사항 
						탭사용시 불러오는 탭 최대 4개까지 
						더 추가는 가능하지만 모바일에서 레이아웃이 깨집니다. -->
						<div class="latest_tab_basic_box">
							<header class="latest_tab_basic_nav">
								<ul>
									<li class="active"><a href="#tab1">기본</a></li>
									<li><a href="#tab2">Q&amp;A</a></li>
									<li><a href="#tab3">FAQ</a></li>
									<li><a href="#tab4">태그</a></li>
								</ul>
							</header>
							<!-- .latest_tab_basic_nav 끝 -->
							<section class="latest_tab_basic_content">
								<?php
								$options = array(
									'ul_id'    => 'tab1', // 탭 고유 id
								);
								echo latest("theme/tab", "free", 5, 25, 1, $options);
								?>

								<?php
								$options = array(
									'ul_id'    => 'tab2', // 탭 고유 id
								);
								echo latest("theme/tab", "qa", 5, 25, 1, $options);
								?>

								<?php
								$options = array(
									'ul_id'    => 'tab3', // 탭 고유 id
								);
								echo latest("theme/tab", "faq", 5, 25, 1, $options);
								?>

								<?php
								$options = array(
									'ul_id'    => 'tab4', // 탭 고유 id
								);
								echo latest("theme/tab", "tag", 5, 25, 1, $options);
								?>
							</section>
							<!-- .latest_tab_basic_content 끝 -->
							
							<script>
							// 최근게시글 basic tab
							jQuery(function($){
								$(".latest_tab_basic_nav a").click(function(){
									// tab_nav
									$(".latest_tab_basic_nav li").removeClass("active");
									$(this).parent().addClass("active");

									// display active tab_con
									var currentTab = $(this).attr("href");
									$(".latest_tab_basic_content ul").hide();
									$(currentTab).fadeIn();

									return false;
								});
							});
							</script>
						</div>
					</div>
					<!-- .gw-col-md-2 end -->
					<div class="gw-col-md-2">
						<div class="latest_tab_gall_box">
							<header class="latest_tab_gall_nav">
								<ul>
									<li class="active"><a href="#p_tab1">갤러리</a></li>
									<li><a href="#p_tab2">갤러리2열</a></li>
									<li><a href="#p_tab3">포트폴리오</a></li>
									<li><a href="#p_tab4">웹진</a></li>
								</ul>
							</header>
							<!-- .latest_tab_basic_nav 끝 -->
							<section class="latest_tab_gall_content">
								<?php
								$options = array(
									'ul_id'    => 'p_tab1', // 탭 고유 id
								);
								echo latest("theme/tab_gallery", "gallery", 3, 25, 1, $options);
								?>

								<?php
								$options = array(
									'ul_id'    => 'p_tab2', // 탭 고유 id
								);
								echo latest("theme/tab_gallery", "gallery2", 3, 25, 1, $options);
								?>

								<?php
								$options = array(
									'ul_id'    => 'p_tab3', // 탭 고유 id
								);
								echo latest("theme/tab_gallery", "portfolio", 3, 25, 1, $options);
								?>

								<?php
								$options = array(
									'ul_id'    => 'p_tab4', // 탭 고유 id
								);
								echo latest("theme/tab_gallery", "webzine", 3, 25, 1, $options);
								?>
							</section>
							<!-- .latest_tab_photo_content 끝 -->

							<script>
							// 최근게시글 basic tab
							jQuery(function($){
								$(".latest_tab_gall_nav a").click(function(){
									// tab_nav
									$(".latest_tab_gall_nav li").removeClass("active");
									$(this).parent().addClass("active");

									// display active tab_con
									var currentTab = $(this).attr("href");
									$(".latest_tab_gall_content ul").hide();
									$(currentTab).fadeIn();

									return false;
								});
							});
							</script>
						</div>
					</div>
					<!-- .gw-col-md-2 end -->
				</div>
				<!-- .gw-row 끝 -->
			</div>
			<!-- .lastest_tab_board 끝 -->
		</div>
	</section>
	<!-- .main_lastest : 최근 탭게시물 끝 -->


	<!-- .main_lastest : 최근 게시물 갤러리 베이직 시작 -->
	<section class="main_lastest_gall_basic main_section">
		<div class="main_boundary">
			<div class="title">
				<span>latest gallery</span>
				<h2>최근 게시물 갤러리 베이직</h2>
			</div>
		</div>
		<div class="latest_container">
			<!-- 최신글 시작 { -->
			<div class="latest_item">
				<?php echo latest("theme/pic_basic", "gallery", 8, 10); ?>
			</div>
			<!-- } 최신글 끝 -->
		</div>
	</section>
	<!-- .main_lastest : 최근 게시물 갤러리 베이직 시작 -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
