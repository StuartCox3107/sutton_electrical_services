jQuery(function($) {
    $(window).on('scroll', function() {
		if ($(this).scrollTop() >= 200) {
			$('.navbar').addClass('fixed-top');
		} else if ($(this).scrollTop() == 0) {
			$('.navbar').removeClass('fixed-top');
		}
	});
	
	function adjustNav() {
		var winWidth = $(window).width(),
			dropdown = $('.dropdown'),
			dropdownMenu = $('.dropdown-menu');
		
		if (winWidth >= 768) {
			dropdown.on('mouseenter', function() {
				$(this).addClass('show')
					.children(dropdownMenu).addClass('show');
			});
			
			dropdown.on('mouseleave', function() {
				$(this).removeClass('show')
					.children(dropdownMenu).removeClass('show');
			});
		} else {
			dropdown.off('mouseenter mouseleave');
		}
	}
	
	$(window).on('resize', adjustNav);
	
	adjustNav();
});

// Back to top button
mybutton = document.getElementById("myBtn");

// Show on scroll
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// Scroll to top on click
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

// Copy to clipboard on contact us page
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).html()).select();
  var str = $(element).html();

  function listener(e) {
         e.clipboardData.setData("text/html", str);
         e.clipboardData.setData("text/plain", str);
         e.preventDefault();
  }
  document.addEventListener("copy", listener);
  document.execCommand("copy");
  document.removeEventListener("copy", listener);

  $temp.remove();
  $("#success").slideDown("slow");
}