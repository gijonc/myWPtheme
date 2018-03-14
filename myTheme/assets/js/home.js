


jQuery(document).ready(function ($) {

	$(".tabcontent").hide();
	$(".tabcontent:first").show();
	$(".side-nav li:first").addClass("active");

	$(".side-nav a").click(function () {
		var url = window.location.pathname;
		switch (url) {
			case "":
				
				break;
		
			default:
				break;
		}

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
	
	var url = window.location;
	console.log(url);


/*
	// getting user info
	var start = new Date();

	$(window).unload(function() {
		var end = new Date();
			$.ajax({ 
				url: "log.php",
				data: {'timeSpent': end - start},
				async: false
			})
	});

	var avaiableIPinfoAPI = ['https://freegeoip.net/json/',];

	var UserObj = {
		IP: " ",
		Country: " ",
		State: " ",
		City: " "
	};

	$.getJSON(avaiableIPinfoAPI[0], function(data) {
		var ipdata = JSON.stringify(data);

		var _url = "http://localhost/api/VisitorInfo/public/visitor/add";

		$.ajax({
			type: "POST",
			url: _url,
			data: ipdata,
			contentType: "application/json; charset=utf-8",
			dataType: "json",
		});
	});
*/

});

