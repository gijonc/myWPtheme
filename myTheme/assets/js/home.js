


jQuery(document).ready(function ($) {

	$(".tabcontent").hide();
	$(".tabcontent:first").show();
	$(".side-nav li:first").addClass("active");

	$(".side-nav a").click(function () {
		$(".side-nav li").removeClass("active");
		$(this).parent().addClass("active");
		var currentTab = $(this).attr("href");
		$(".tabcontent").hide();
		$(currentTab).show();
		return false;
	});

	// using collapsed sidenav
	// $(".nav-btn").click(function(){
	// 	$(".side-nav.fixed").css('width', '20%');
	// });


	// ajax load post content
	// $.ajaxSetup({ cache: false });
	// $(".project-link").click(function () {
	// 	var post_url = $(this).attr("rel");
	// 	var post_id = $(this).attr("id");

	// 	var more_content_id = "content-div-" + post_id;
	// 	var more_content_div_html = "<div id=" + more_content_id + "></div> ";
	// 	$('.more-content').prepend(more_content_div_html);

	// 	$('.project-list').fadeOut(1000);
	// 	$("#" + more_content_id).load(post_url);
	// 	return false;
	// });

	// $(".post-link").click(function () {
	// 	var post_url = $(this).attr("rel");
	// 	var post_id = $(this).attr("id");

	// 	var more_content_id = "content-div-" + post_id;
	// 	var more_content_div_html = "<div id=" + more_content_id + "></div> ";
	// 	$('.more-content').prepend(more_content_div_html);

	// 	$('.project-list').fadeOut(1000);
	// 	$("#" + more_content_id).load(post_url);
	// 	return false;
	// });


});