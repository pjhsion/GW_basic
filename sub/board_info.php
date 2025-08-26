<?php
include_once('./_common.php');

// 페이지 제목
$g5['title'] = "게시판 적용방법";

include_once(G5_PATH.'/_head.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_javascript('<script src="'.G5_THEME_JS_URL.'/script.js"></script>', 0); // 자바스크립트 파일 추가 방법
add_stylesheet('<link rel="stylesheet" href="'.G5_URL.'/demo/css/info.css">', 0); // 스타일시트 추가 방법
?>

<!-- 여기 아래부터 모든 HTML 요소 구성 시작 -->

		<section class="board_use_sec sub_sec">
			<div class="title">
				<h3><span>게시판별 특이사항</span></h3>
				<p>그누위즈 베이직 테마에는 그누보드의 기본 게시판을 모두 커스텀한 13종의 일반형 게시판 스킨이 있습니다.</p>
				<p>반응형 스킨으로 제작이 되었기 때문에 그누보드5 기본 설정 중 모바일 설정은 모두 사용되지 않습니다.</p>
			</div>
			<!-- .title end -->

			<div class="content">
				<dl>
					<dt>[테마] 기본 게시판</dt>
					<dd class="board_dd">
						<ol>
							<li>반응형 기본 게시판 입니다.</li>
							<li>가장 기본적인 일반 목록형 게시판 입니다.</li>
						</ol>
						<div class="button_box">
							<button type="button" class="board_check">게시판 확인하기</button>
							<a href="<?php G5_BBS_URL ?>/free" target="_blank">게시판 바로가기</a>
						</div>
						<figure><img src="<?php echo G5_URL ?>/demo/board_img/basic-01.png" alt="기본 게시판"></figure>
					</dd>
				</dl>
				<!-- 기본 게시판 end -->

				<dl>
					<dt>[테마] Q&A 게시판</dt>
					<dd class="board_dd">
						<ol>
							<li>고객 상담, 문의, 접수 용도로 사용 가능한 게시판 입니다.</li>
							<li>게시글이 등록되면 "접수완료" 텍스트가 노출됩니다.</li>
							<li>관리자가 댓글(답변)을 등록하면 "접수완료" 에서 "답변완료" 텍스트로 자동 변경 됩니다.</li>
							<li>공지사항의 경우 공지사항 아이콘으로 출력됩니다.</li>
						</ol>
						<h4>게시판 권장설정</h4>
						<ul class="board_setting">
							<li><div>목록보기</div><div>권한 1</div></li>
							<li><div>글쓰기</div><div>권한 1</div></li>
							<li><div>글보기</div><div>권한 1</div></li>
							<li><div>글답변</div><div>권한 10</div></li>
							<li><div>댓글쓰기</div><div>권한 1</div></li>
							<li><div>비밀글</div><div>무조건 선택</div></li>
							<li><div>전체검색</div><div>사용안함</div></li>
						</ul>
						<div class="button_box">
							<button type="button" class="board_check">게시판 확인하기</button>
							<a href="<?php G5_BBS_URL ?>/qa" target="_blank">게시판 바로가기</a>
						</div>
						<figure><img src="<?php echo G5_URL ?>/demo/board_img/qna-01.png" alt="Q&A 게시판"></figure>						
					</dd>
				</dl>
				<!-- qna 게시판 end -->

				<dl>
					<dt>[테마] FAQ 게시판</dt>
					<dd class="board_dd">
						<ol>
							<li>그누보드5 기본 기능에 포함된 faq 페이지와는 다르게 별도의 게시판 스킨으로 faq 기능을 사용할 수 있습니다.</li>
							<li>제목(질문)을 클릭하면 답변(내용)이 토글(toggle)형식으로 펼쳐져서 목록에서 내용을 한번에 확인 가능합니다.</li>
							<li>에디터로 첨부된 이미지의 경우도 마찬가지로 답변(내용)에서 확인 가능합니다.</li>
							<li>"상세페이지로 이동" 아이콘을 클릭하면 게시글의 상세 페이지로 이동됩니다.</li>
						</ol>
						<h4>게시판 권장설정</h4>
						<ul class="board_setting">
							<li><div>목록보기</div><div>권한 1</div></li>
							<li><div>글쓰기</div><div>권한 10</div></li>
							<li><div>글보기</div><div>권한 1</div></li>
							<li><div>글답변</div><div>권한 10</div></li>
							<li><div>댓글쓰기</div><div>권한 10</div></li>
							<li><div>비밀글</div><div>-</div></li>
							<li><div>전체검색</div><div>-</div></li>
						</ul>
						<div class="button_box">
							<button type="button" class="board_check">게시판 확인하기</button>
							<a href="<?php G5_BBS_URL ?>/faq" target="_blank">게시판 바로가기</a>
						</div>
						<figure><img src="<?php echo G5_URL ?>/demo/board_img/faq-01.png" alt="faq FAQ 게시판"></figure>						
					</dd>
				</dl>
				<!-- faq 게시판 end -->

				<dl>
					<dt>[테마] 웹진형 게시판</dt>
					<dd class="board_dd">
						<ol>
							<li>네이버 뉴스와 같은 형식으로 목록에서 첨부이미지와 게시글의 일부 내용이 출력되는 게시판 입니다.</li>
							<li>한 행에 1개의 게시물이 출력됩니다.</li>
							<li>첨부파일 또는 에디터로 업로드한 이미지가 좌측 영역에 썸네일이 출력됩니다.</li>
							<li>게시글 내용은 태그를 제외한 250자까지 출력되도록 기본 설정이 되어있습니다.(한글,영문에 따라 byte 차이가 있을 수 있음.)</li>
							<li>글자 수 조절 (해당스킨폴더/list.skin.php [145Line])</li>
						</ol>
						<div class="button_box">
							<button type="button" class="board_check">게시판 확인하기</button>
							<a href="<?php G5_BBS_URL ?>/webzine" target="_blank">게시판 바로가기</a>
						</div>
						<figure><img src="<?php echo G5_URL ?>/demo/board_img/webzine-01.png" alt="webzine 웹진형 게시판"></figure>						
					</dd>
				</dl>
				<!-- 웹진형 게시판 end -->

				<dl>
					<dt>[테마] 웹진형 게시판 2열</dt>
					<dd class="board_dd">
						<ol>
							<li>네이버 뉴스와 같은 형식으로 목록에서 첨부이미지와 게시글의 일부 내용이 출력되는 게시판 입니다.</li>
							<li>한 행에 2개의 게시물이 출력됩니다.</li>
							<li>첨부파일 또는 에디터로 업로드한 이미지가 좌측 영역에 썸네일이 출력됩니다.</li>
							<li>게시글 내용은 태그를 제외한 250자까지 출력되도록 기본 설정이 되어있습니다.(한글,영문에 따라 byte 차이가 있을 수 있음.)</li>
							<li>글자 수 조절 (해당스킨폴더/list.skin.php [145Line])</li>
						</ol>
						<div class="button_box">
							<button type="button" class="board_check">게시판 확인하기</button>
							<a href="<?php G5_BBS_URL ?>/webzine2" target="_blank">게시판 바로가기</a>
						</div>
						<figure><img src="<?php echo G5_URL ?>/demo/board_img/webzine2-01.png" alt="webzine2 웹진형 게시판 2열"></figure>						
					</dd>
				</dl>
				<!-- 웹진형2 게시판 end -->

				<dl>
					<dt>[테마] 태그 게시판</dt>
					<dd class="board_dd">
						<ol>
							<li>게시글 작성시 태그를 등록할 수 있는 게시판 입니다. (여분필드 wr_1 사용)</li>
							<li>목록, 상세페이지에 태그가 나타나며, 태그를 클릭시 해당 태그로 자동 검색 됩니다.</li>
							<li>게시글 작성시 태그는 콤마(,) 또는 엔터로 추가 가능합니다.</li>
						</ol>
						<div class="button_box">
							<button type="button" class="board_check">게시판 확인하기</button>
							<a href="<?php G5_BBS_URL ?>/tag" target="_blank">게시판 바로가기</a>
						</div>
						<figure><img src="<?php echo G5_URL ?>/demo/board_img/tag-01.png" alt="tag 태그 게시판1"><img src="<?php echo G5_URL ?>/demo/board_img/tag-02.png" alt="tag 태그 게시판2"></figure>						
					</dd>
				</dl>
				<!-- 태그 게시판 end -->

				<dl>
					<dt>[테마] 영상 게시판</dt>
					<dd class="board_dd">
						<ol>
							<li>게시글 작성시 태그를 등록할 수 있는 게시판 입니다. (여분필드 wr_1 사용)</li>
							<li>목록, 상세페이지에 태그가 나타나며, 태그를 클릭시 해당 태그로 자동 검색 됩니다.</li>
							<li>게시글 작성시 태그는 콤마(,) 또는 엔터로 추가 가능합니다.</li>
						</ol>
						<div class="button_box">
							<button type="button" class="board_check">게시판 확인하기</button>
							<a href="<?php G5_BBS_URL ?>/video" target="_blank">게시판 바로가기</a>
						</div>
						<figure><img src="<?php echo G5_URL ?>/demo/board_img/video-01.png" alt="video 영상 게시판1"><img src="<?php echo G5_URL ?>/demo/board_img/video-02.png" alt="video 영상 게시판2"></figure>						
					</dd>
				</dl>
				<!-- 영상 게시판 end -->

				<dl>
					<dt>[테마] 일정관리 게시판</dt>
					<dd class="board_dd">
						<ol>
							<li>달력형태로 일정을 등록 할 수 있는 게시판 입니다.</li>
							<li>일정 등록시 시작일과 종료일을 설정 할 수 있습니다.</li>
							<li>당일 일정은 상단의 오늘의 일정 부분에 따로 출력됩니다.</li>
							<li>새로고침 없이 이전달, 다음달을 확인 할 수 있습니다.</li>
						</ol>
						<div class="button_box">
							<button type="button" class="board_check">게시판 확인하기</button>
							<a href="<?php G5_BBS_URL ?>/schedule" target="_blank">게시판 바로가기</a>
						</div>
						<figure><img src="<?php echo G5_URL ?>/demo/board_img/schedule-01.png" alt="schedule 일정관리 게시판1"><img src="<?php echo G5_URL ?>/demo/board_img/schedule-02.png" alt="schedule 일정관리 게시판2"></figure>						
					</dd>
				</dl>
				<!-- 일정관리 게시판 end -->

				<dl>
					<dt>[테마] 네이버블로그 게시판</dt>
					<dd class="board_dd">
						<ol>
							<li>네이버 검색 API를 연동하여 실시간으로 네이버 블로그의 게시물을 출력하는 게시판 입니다.</li>
							<li>관리자메뉴의 게시판 설정에서 여분필드 1값 ~ 4값에 API키와 키워드 설정을 등록 할 수 있습니다.</li>
							<li>블로그 제목, 내용, 작성자, 작성일이 표시되며, 게시물을 클릭시 새창으로 해당 블로그로 이동 됩니다.</li>
							<li>블로그 이미지는 별도로 가져올 수 없으며, 실제 운용하는 서버에 블로그 게시물이 저장되는 것은 아닙니다.</li>
						</ol>
						<div class="button_box">
							<button type="button" class="board_check">게시판 확인하기</button>
							<a href="<?php G5_BBS_URL ?>/naver_blog" target="_blank">게시판 바로가기</a>
						</div>
						<figure><img src="<?php echo G5_URL ?>/demo/board_img/naver_blog-01.png" alt="naver_blog 네이버블로그 게시판1"><img src="<?php echo G5_URL ?>/demo/board_img/naver_blog-02.png" alt="naver_blog 네이버블로그 게시판2"></figure>						
					</dd>
				</dl>
				<!-- 네이버블로그 게시판 end -->

				<dl>
					<dt>[테마] 네이버뉴스 게시판</dt>
					<dd class="board_dd">
						<ol>
							<li>네이버 검색 API를 연동하여 실시간으로 네이버 뉴스를 출력하는 게시판 입니다.</li>
							<li>관리자메뉴의 게시판 설정에서 여분필드 1값 ~ 4값에 API키와 키워드 설정을 등록 할 수 있습니다.</li>
							<li>뉴스 제목, 내용, 작성일이 표시되며, 게시물을 클릭시 새창으로 해당 뉴스로 이동 됩니다.</li>
							<li>뉴스 이미지는 별도로 가져올 수 없으며, 실제 운용하는 서버에 뉴스 게시물이 저장되는 것은 아닙니다.</li>
						</ol>
						<div class="button_box">
							<button type="button" class="board_check">게시판 확인하기</button>
							<a href="<?php G5_BBS_URL ?>/naver_news" target="_blank">게시판 바로가기</a>
						</div>
						<figure><img src="<?php echo G5_URL ?>/demo/board_img/naver_news-01.png" alt="naver_news 네이버뉴스 게시판1"><img src="<?php echo G5_URL ?>/demo/board_img/naver_news-02.png" alt="naver_news 네이버뉴스 게시판2"></figure>						
					</dd>
				</dl>
				<!-- 네이버뉴스 게시판 end -->

				<dl>
					<dt>[테마] 첨부파일 게시판</dt>
					<dd class="board_dd">
						<ol>
							<li>일반 자료실 용도로 사용 가능한 게시판 입니다.</li>
							<li>목록에서 등록된 첨부파일의 확장자가 출력됩니다.</li>
							<li>다운로드는 상세 페이지에서만 가능하며, 목록에서는 첨부파일이 다운로드 되지 않습니다.</li>
							<li>블로그 제목, 내용, 작성자, 작성일이 표시되며, 게시물을 클릭시 새창으로 해당 블로그로 이동 됩니다.</li>
						</ol>
						<div class="button_box">
							<button type="button" class="board_check">게시판 확인하기</button>
							<a href="<?php G5_BBS_URL ?>/file" target="_blank">게시판 바로가기</a>
						</div>
						<figure><img src="<?php echo G5_URL ?>/demo/board_img/file-01.png" alt="file 첨부파일 게시판"></figure>						
					</dd>
				</dl>
				<!-- 첨부파일 게시판 end -->

				<dl>
					<dt>[테마] 이벤트 게시판</dt>
					<dd class="board_dd">
						<ol>
							<li>이벤트 공지를 등록하는 용도로 사용 가능한 게시판 입니다.</li>
							<li>게시물이 등록되면 시작일, 종료일을 자동으로 감지하여 "대기중, 진행중, 종료" 상태가 자동으로 변경됩니다.</li>
							<li>목록에서는 분류, 제목, 이벤트 기간이 출력 됩니다.</li>
						</ol>
						<h4>게시판 권장설정</h4>
						<ul class="board_setting">
							<li><div>목록보기</div><div>권한 1</div></li>
							<li><div>글쓰기</div><div>권한 10</div></li>
							<li><div>글보기</div><div>권한 1</div></li>
							<li><div>글답변</div><div>권한 10</div></li>
							<li><div>댓글쓰기</div><div>권한 1</div></li>
							<li><div>비밀글</div><div>-</div></li>
							<li><div>전체검색</div><div>-</div></li>
						</ul>
						<h4>이미지 폭, 높이 권장설정</h4>
						<ul class="img_setting">
							<li><div>2열</div><div>600px X 300px</div></li>
							<li><div>3열</div><div>400px X 300px</div></li>
							<li><div>4열</div><div>300px X 300px</div></li>
						</ul>
						<div class="button_box">
							<button type="button" class="board_check">게시판 확인하기</button>
							<a href="<?php G5_BBS_URL ?>/event" target="_blank">게시판 바로가기</a>
						</div>
						<figure><img src="<?php echo G5_URL ?>/demo/board_img/event-01.png" alt="event 이벤트 게시판1"><img src="<?php echo G5_URL ?>/demo/board_img/event-02.png" alt="event 이벤트 게시판2"></figure>						
					</dd>
				</dl>
				<!-- 이벤트 게시판 end -->

				<dl>
					<dt>[테마] 폼메일 게시판</dt>
					<dd class="board_dd">
						<ol>
							<li>폼메일 게시판은 고객상담용 기본 폼으로 구성되어 있습니다. (분류, 이름, 연락처, 이메일, 제목, 내용)</li>
							<li>게시판의 목록 및 상세 페이지는 무조건 관리자만 확인 할 수 있습니다. 일반 사용자는 입력 폼으로 자동 이동 됩니다.</li>
							<li>폼 입력시 개인정보처리에 동의 해야만 등록이 가능합니다.</li>
							<li>개인정보처리방침은 관리자페이지 > 환경설정 > 기본환경설정 > 회원가입 설정 탭 > 개인정보처리방침에 입력된 내용이 출력 됩니다.</li>
						</ol>
						<h4>게시판 권장설정</h4>
						<ul class="board_setting">
							<li><div>목록보기</div><div>권한 1</div></li>
							<li><div>글쓰기</div><div>권한 1</div></li>
							<li><div>글보기</div><div>권한 1</div></li>
							<li><div>글답변</div><div>권한 10</div></li>
							<li><div>댓글쓰기</div><div>권한 10</div></li>
							<li><div>비밀글</div><div>무조건 선택</div></li>
							<li><div>전체검색</div><div>사용안함</div></li>
						</ul>
						<div class="button_box">
							<button type="button" class="board_check">게시판 확인하기</button>
							<a href="<?php G5_BBS_URL ?>/form_mail" target="_blank">게시판 바로가기</a>
						</div>
						<figure><img src="<?php echo G5_URL ?>/demo/board_img/form_mail-01.png" alt="form_mail 폼메일 게시판1"><img src="<?php echo G5_URL ?>/demo/board_img/form_mail-02.png" alt="form_mail 폼메일 게시판2"></figure>						
					</dd>
				</dl>
				<!-- 폼메일 게시판 end -->
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

<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->

<?php
include_once(G5_PATH.'/_tail.php');
