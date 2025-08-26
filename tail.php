<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>
		<?php if (!defined("_INDEX_")) { ?>
			</div>
			<!-- .sub_boundary 끝 -->
		</div>
		<!-- #sub_container 끝 -->
		<?php } ?>
	</div>
	<!-- #container 끝 -->
</div>
<!-- } #wrapper콘텐츠 끝 -->

<!-- 푸터 스킨 시작 { -->
<?php
include_once(G5_THEME_SKIN_PATH.'/footer/'.$gw_config['cf_footer_skin'].'/footer.skin.php');  // 푸터 스킨
?>
<!-- } 푸터 스킨 끝 -->

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
