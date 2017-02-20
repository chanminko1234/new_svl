 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="{{ asset('js/flickity.pkgd.js') }}"></script>
 <script>
 	$(document).ready(function() {
            // Call Menu Toggler
            appMaster.menuToggler();
            // Example Call anotherFunction
            appMaster.anotherFunction();
        });
 	$(document).ready(function () {
 		$(window).scroll(function () {
 			if ($(this).scrollTop() > 100) {
 				$('.scrollup').fadeIn();
 			} else {
 				$('.scrollup').fadeOut();
 			}
 		});
 		$('.scrollup').click(function () {
 			$("html, body").animate({
 				scrollTop: 0
 			}, 600);
 			return false;
 		});
 	});
 	
 </script>