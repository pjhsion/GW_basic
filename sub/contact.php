<?php
include_once('./_common.php');

// 페이지 제목
$g5['title'] = "오시는길";

include_once(G5_PATH.'/_head.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_javascript('<script src="'.G5_THEME_JS_URL.'/script.js"></script>', 0); // 자바스크립트 파일 추가 방법
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/sub.css">', 0); // 스타일시트 추가 방법
?>

		<!-- contact 시작 -->
		<article class="sub_wrap">	
			<section class="contact_sec sub_sec">
				<div class="title">
					<h3>오시는 길</h3>
					<p>그누위즈 오시는 길</p>
				</div>

				<div class="content">
					<div class="google_map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1630.619746679427!2d129.1247557172381!3d35.175582948801505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x356893574432aa67%3A0x8674d8438b2c9bac!2z7IS87YWA7Iqk7Lm07J2067mE7KaIIOKUgiBDZW50dW0gU2t5IEJJWg!5e0!3m2!1sko!2skr!4v1577682758429!5m2!1sko!2skr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>	
					</div>
					<div class="address_info">
						<dl class="info1">
							<dt>주소</dt>
							<dd>부산광역시 해운대구 재송동 센텀동로 97</dd>
						</dl>
						<dl class="info2">
							<dt>전화 및 이메일</dt>
							<dd>010-1234-5678 / gnuwiz@naver.com</dd>
						</dl>
					</div>
					<div class="contact_info">
						<dl class="subway">
							<dt><i class="fa fa-subway" aria-hidden="true"></i></dt>
							<dd>
								<h4>지하철 이용 시</h4>
								<p>동해선 신해운대역 하차 n번 출구 300m 이내</p>
							</dd>
						</dl>
						<dl class="bus">
							<dt><i class="fa fa-bus" aria-hidden="true"></i></dt>
							<dd>
								<h4>버스 이용 시</h4>
								<p>정류장(해운대역, 센텀고앞) 지선: 111, 222, 333</p>
								<p>광역: 1000, 2000, 3000</p>
							</dd>
						</dl>
						<dl class="car">
							<dt><i class="fa fa-car" aria-hidden="true"></i></dt>
							<dd>
								<h4>승용차 이용 시</h4>
								<p>부산광역시 해운대구 재송동 센텀동로 97</p>
							</dd>
						</dl>
					</div>
					<!-- .contact_info 끝 -->
				</div>
			</section>
		</article>
		<!-- contact 끝 -->


<?php
include_once(G5_PATH.'/_tail.php');
