<?php
include_once('./_common.php');

// 페이지 제목
$g5['title'] = "그누위즈 제작";

include_once(G5_PATH.'/_head.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_javascript('<script src="'.G5_THEME_JS_URL.'/script.js"></script>', 0); // 자바스크립트 파일 추가 방법
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/sub.css">', 0); // 스타일시트 추가 방법
?>

		<section class="gnuwiz_area_sec sub_sec">
			<div class="title wow bounceIn">
				<h3><span>그누위즈 비지니스</span></h3>
				<p>다양한 분야의 디지털 제작 노하우를 제공합니다.</p>
			</div>
			<div class="content">
				<ul class="gnuwiz_area">
					<li class="wow fadeInUp" data-wow-delay="0.3s"><h5>01</h5><p>반응형홈페이지</p></li>
					<li class="wow fadeInDown" data-wow-delay="0.6s"><h5>02</h5><p>모바일홈페이지</p></li>
					<li class="wow fadeInUp" data-wow-delay="0.9s"><h5>03</h5><p>기업홈페이지</p></li>
					<li class="wow fadeInDown" data-wow-delay="1.2s"><h5>04</h5><p>브랜드홈페이지</p></li>
					<li class="wow fadeInUp" data-wow-delay="1.5s"><h5>05</h5><p>관공서홈페이지</p></li>
					<li class="wow fadeInDown" data-wow-delay="1.8s"><h5>06</h5><p>기관ㆍ단체</p></li>
					<li class="wow fadeInUp" data-wow-delay="2.1s"><h5>07</h5><p>개인ㆍ소호</p></li>
					<li class="wow fadeInDown" data-wow-delay="2.4s"><h5>08</h5><p>하이브리드앱</p></li>
				</ul>
			</div>
		</section>
		<!-- .gnuwiz_area_sec 끝 -->

		<section class="maintenance_sec sub_sec">
			<div class="title wow bounceIn">
				<h3><span>Maintenance</span></h3>
				<p>맞춤 서비스를 지속적으로 제공합니다.</p>
			</div>
			<div class="content">
				<ul class="maintenance">
					<li class="wow fadeInUp" data-wow-delay="0.3s">
						<figure><img src="<?php echo G5_THEME_URL; ?>/sub/img/mt_design.jpg" alt=""></figure>
						<div>
							<h5>디자인 업데이트</h5>
							<p>홈페이지 리뉴얼 / 신규 페이지 업데이트</p>
							<p>팝업, 배너 제작 / 이벤트페이지 작업</p>
						</div>
					</li>
					<li class="wow fadeInDown" data-wow-delay="0.6s">
						<figure><img src="<?php echo G5_THEME_URL; ?>/sub/img/mt_code.jpg" alt=""></figure>
						<div>
							<h5>프로그램/코딩 최적화</h5>
							<p>프로그램 오류 제거 / 기능 업데이트 / 스크립트 오류 보정</p>
							<p>크로스브라우징 체크 / 웹표준</p>
						</div>				
					</li>
					<li class="wow fadeInUp" data-wow-delay="0.9s">
						<figure><img src="<?php echo G5_THEME_URL; ?>/sub/img/mt_secure.jpg" alt=""></figure>
						<div>
							<h5>시스템/보안 관리</h5>
							<p>개인정보 암호화 관리 / SSL인증서 설치 관리 / 서버 모니터링 감시</p>
							<p>외부 침입 감지 및 대응 / 웹변조 체크</p>
						</div>					
					</li>
					<li class="wow fadeInDown" data-wow-delay="1.2s">
						<figure><img src="<?php echo G5_THEME_URL; ?>/sub/img/mt_backup.jpg" alt=""></figure>
						<div>
							<h5>백업관리</h5>
							<p>일단위 백업 스케쥴러(7일간 보관)</p>
							<p>2중 백업 및 로컬 백업</p>
						</div>					
					</li>
				</ul>
			</div>
		</section>

<?php
include_once(G5_PATH.'/_tail.php');
