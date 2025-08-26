<?php
include_once('./_common.php');

// 페이지 제목
$g5['title'] = "갤러리 적용방법";

include_once(G5_PATH.'/_head.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_javascript('<script src="'.G5_THEME_JS_URL.'/script.js"></script>', 0); // 자바스크립트 파일 추가 방법
add_stylesheet('<link rel="stylesheet" href="'.G5_URL.'/demo/css/info.css">', 0); // 스타일시트 추가 방법
?>

<!-- 여기 아래부터 모든 HTML 요소 구성 시작 -->

		<section class="board_use_sec sub_sec">
			<div class="title">
				<h3><span>갤러리별 특이사항</span></h3>
				<p>그누위즈 베이직 테마에는 그누보드의 기본 게시판을 모두 커스텀한 6종의 갤러리 게시판 스킨이 있습니다.</p>
				<p>반응형 스킨으로 제작이 되었기 때문에 그누보드5 기본 설정 중 모바일 설정은 모두 사용되지 않습니다.</p>
			</div>
			<!-- .title end -->

			<div class="content">
				<dl>
					<dt>[테마] 기본 갤러리</dt>
					<dd class="board_dd">
						<ol>
							<li>반응형 기본 갤러리 게시판 입니다.</li>
							<li>게시판 설정의 "갤러리 이미지 수"에 따라서 게시판 목록에서 한줄에 몇 개씩 출력할지 설정 할 수 있습니다. "갤러리 이미지 폭, 높이"로 썸네일의 크기가 생성됩니다.</li>
							<li>기본갤리리 리스트 페이지 썸네일 비율 3:2입니다. 4열에서 최적화된 디자인입니다. 제목의 경우 임의로 숫자를 넣어두었습니다만 2줄이 넘어가면 생략되는 형태로 코딩이 되어 있어 사실상 제목의 길이 수는 어떤 숫자를 넣어도 무방합니다.</li>
							<li>2열일때 관리자 갤러리 설정 넓이x높이 600x400(단위:px) 입니다. 사진자체의 비율과 상관없는 썸네일의 비율입니다. 올리시는 사진은 비율은 상관없이 가로 세로 최소 폭과 높이는 600px이상으로 해주시면 썸네일의 이미지가 선명하게 잘 나옵니다.</li>
							<li>이미지가 없을때 각각 공지, 비밀글, 이미지 없음의 사진이 나옵니다. 이 이미지는 게시판의 폭과 넓이 설정에 영향을 받지 않으므로 3:2 비율의 썸네일이 아닐경우, 높이가 달라질 수 있습니다.</li>
							<li>페이지당 목록수는 원하는대로 세팅하시면 됩니다.</li>
						</ol>
						<div class="button_box">
							<button type="button" class="board_check">게시판 확인하기</button>
							<a href="<?php G5_BBS_URL ?>/gallery" target="_blank">게시판 바로가기</a>
						</div>
						<figure><img src="<?php echo G5_URL ?>/demo/gallery_img/gallery-01.png" alt="기본 갤러리"><img src="<?php echo G5_URL ?>/demo/gallery_img/gallery-02.png" alt="기본갤러리 세팅"></figure>
					</dd>
				</dl>
				<!-- 기본 갤러리 end -->
				
				<dl>
					<dt>[테마] 갤러리 2열</dt>
					<dd class="board_dd">
						<ol>
							<li>반응형 갤러리 2열 게시판 입니다.</li>
							<li>게시판 설정의 "갤러리 이미지 수"에 따라서 게시판 목록에서 한줄에 몇 개씩 출력할지 설정 할 수 있습니다. "갤러리 이미지 폭, 높이"로 썸네일의 크기가 생성됩니다.</li>
							<li>현재 갤러리2열의 리스트 페이지 썸네일 비율 1:1입니다. 3, 4열까지 자유롭게 사용하실 수 있습니다. 다만, 3열, 4열의 경우 그에 맞춰서 높이를 줄여서 세팅해서 사용하세요.</li>
							<li>2열일때 관리자 갤러리 넓이x높이 600x600(단위:px)입니다. 사진자체의 비율과 상관없는 썸네일의 원본 비율입니다. 올리시는 사진은 비율은 상관없이 가로 세로 최소 폭과 높이는 600px이상으로 해주시면 썸네일의 이미지가 선명하게 잘 나옵니다.</li>
							<li>이미지가 없을때 각각 공지, 비밀글, 이미지 없음의 사진이 나옵니다. 이 이미지는 게시판의 폭과 넓이 설정에 영향을 받지 않으므로 1:1 비율의 썸네일이 아닐경우, 높이가 달라질 수 있습니다.</li>
							<li>페이지당 목록수는 원하는대로 세팅하시면 됩니다.</li>
						</ol>
						<div class="button_box">
							<button type="button" class="board_check">게시판 확인하기</button>
							<a href="<?php G5_BBS_URL ?>/gallery2" target="_blank">게시판 바로가기</a>
						</div>
						<figure><img src="<?php echo G5_URL ?>/demo/gallery_img/gallery-01.png" alt="갤러리 2열"></figure>
					</dd>
				</dl>
				<!-- 갤러리2 end -->

				<dl>
					<dt>[테마] 갤러리 3열</dt>
					<dd class="board_dd">
						<ol>
							<li>반응형 갤러리 3열 게시판 입니다.</li>
							<li>게시판 설정의 "갤러리 이미지 수"에 따라서 게시판 목록에서 한줄에 몇 개씩 출력할지 설정 할 수 있습니다. "갤러리 이미지 폭, 높이"로 썸네일의 크기가 생성됩니다.</li>
							<li>갤러리 3열의 관리자 세팅은 넓이x높이 600x400(단위:px)입니다. 사진자체의 비율과 상관없는 썸네일의 원본 비율입니다. 2~4열까지 쓸 수 있지만 최적화는 3열에서 되었기 때문에 3열의 사용을 추천드립니다.</li>
							<li>이미지가 없을때 각각 공지, 비밀글, 이미지 없음의 사진이 나옵니다. 이 이미지는 관리자 설정 이미지의 넓이와 높이에 영향을 받지 않으므로 3:2의 비율의 썸네일이 아닐 경우, 높이가 달라질 수 있습니다.</li>
							<li>갤러리 3열의 최적화된 제목길이수 28자입니다. 물론 더 넘어가도 디자인이 깨지거나 하지는 않습니다.</li>
							<li>페이지당 목록수는 원하는대로 세팅하시면 됩니다.</li>
						</ol>
						<div class="button_box">
							<button type="button" class="board_check">게시판 확인하기</button>
							<a href="<?php G5_BBS_URL ?>/gallery3" target="_blank">게시판 바로가기</a>
						</div>
						<figure><img src="<?php echo G5_URL ?>/demo/gallery_img/gallery3-01.png" alt="갤러리 3열 1"><img src="<?php echo G5_URL ?>/demo/gallery_img/gallery3-02.png" alt="갤러리 3열 2"></figure>
					</dd>
				</dl>
				<!-- 갤러리3 end -->

				<dl>
					<dt>[테마] 갤러리 포트폴리오</dt>
					<dd class="board_dd">
						<ol>
							<li>포트폴리오 및 제품소개가 가능한 게시판 입니다.</li>
							<li>마우스를 오버하면 제목과 바로가기가 나타납니다. 제목을 클릭시 본문으로, 바로가기를 클릭시 링크1에 입력 된 url로 새창 이동 합니다.</li>
							<li>게시판 설정의 "갤러리 이미지 수"에 따라서 게시판 목록에서 한줄에 몇 개씩 출력할지 설정 할 수 있습니다. "갤러리 이미지 폭, 높이"로 썸네일의 크기가 생성됩니다.</li>
						</ol>
						<div class="button_box">
							<button type="button" class="board_check">게시판 확인하기</button>
							<a href="<?php G5_BBS_URL ?>/gallery3" target="_blank">게시판 바로가기</a>
						</div>
						<figure><img src="<?php echo G5_URL ?>/demo/gallery_img/portfolio-01.png" alt="갤러리 포트폴리오"></figure>
					</dd>
				</dl>
				<!-- 갤러리 포트폴리오 end -->

				<dl>
					<dt>[테마] 갤러리 심플</dt>
					<dd class="board_dd">
						<ol>
							<li>반응형 심플 갤러리 게시판 입니다.</li>
							<li>게시판 설정의 "갤러리 이미지 수"에 따라서 게시판 목록에서 한줄에 몇 개씩 출력할지 설정 할 수 있습니다. "갤러리 이미지 폭, 높이"로 썸네일의 크기가 생성됩니다.</li>
							<li>갤러리심플 이미지는 1:1 비율로 등록하시면 최적화에 맞습니다.</li>
							<li>갤러리심플의 현재 관리자 세팅은 넓이x높이 600x600(단위:px)입니다. 게시판 이미지의 폭보다 넓이가 작으면 이미지 화소가 떨어집니다. 넓이는 어떤 갤러리든 최소 600px로 하고 보이고 싶은 비율에 따라 높이를 정하시면 됩니다.</li>
						</ol>
						<div class="button_box">
							<button type="button" class="board_check">게시판 확인하기</button>
							<a href="<?php G5_BBS_URL ?>/gallery_simple" target="_blank">게시판 바로가기</a>
						</div>
						<figure><img src="<?php echo G5_URL ?>/demo/gallery_img/gallery_simple-01.png" alt="갤러리 심플"></figure>
					</dd>
				</dl>
				<!-- 갤러리 심플 end -->

				<dl>
					<dt>[테마] 갤러리 masonry</dt>
					<dd class="board_dd">
						<ol>
							<li>masonry 플러그인이 사용 된 갤러리 게시판 입니다.</li>
							<li>게시물 클릭 시 모달(modal)창에 상세 페이지가 출력 됩니다.</li>
							<li>하단으로 스크롤 할 때마다 자동으로 글이 갱신되어 레아이웃에 맞게 게시물이 조각 조각 맞춰집니다.</li>
							<li>게시판 설정의 "갤러리 이미지 수"에 따라서 게시판 목록에서 한줄에 몇 개씩 출력할지 설정 할 수 있습니다. "갤러리 이미지 폭, 높이"로 썸네일의 크기가 생성됩니다.</li>
						</ol>
						<div class="button_box">
							<button type="button" class="board_check">게시판 확인하기</button>
							<a href="<?php G5_BBS_URL ?>/gallery_masonry" target="_blank">게시판 바로가기</a>
						</div>
						<figure><img src="<?php echo G5_URL ?>/demo/gallery_img/gallery_masonry-01.png" alt="갤러리 masonry"></figure>
					</dd>
				</dl>
				<!-- 갤러리 masonry end -->				
			</div>
			<!-- .content end -->
		</section>
		<!-- .board_use_sec end -->

		<script>
			// 게시판 확인하기
			$('.board_check').click(function() {
				$(this).parents('dd').find('figure').slideToggle();
			});
		</script>

<!-- 여기까지 모든 HTML 요소 구성 끝 -->

<?php
include_once(G5_PATH.'/_tail.php');
