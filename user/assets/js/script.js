(function ($) {
	var allfunction = {
		slider : ()=>{
            $(".banner-area").owlCarousel({
                items:1,
                loop:true,
                nav:false,
                autoplay:true,
                autoplayTimeout:4000,
                animateIn: 'fadeIn',
                dots:false,
              });
        },
        popUpVideo : () =>{
            $('.popup-video').magnificPopup({
                  type: 'iframe'
              });
      },

      dataTable : () =>{
            $('#example').DataTable({
          responsive: false,
          "paging": false,
          "info": false,
                  "searching": false,				
      });
      },
		init: function () {
            allfunction.slider();
            allfunction.popUpVideo();
            allfunction.dataTable();
		},
	}
	$(document).ready(function () {
		allfunction.init();
	});
})(jQuery);

const burgerMenu = document.getElementById("burger");
const navbarMenu = document.getElementById("menu");

// Show and Hide Navbar Menu
burgerMenu.addEventListener("click", () => {
	burgerMenu.classList.toggle("is-active");
	navbarMenu.classList.toggle("is-active");

	if (navbarMenu.classList.contains("is-active")) {
		navbarMenu.style.maxHeight = navbarMenu.scrollHeight + "px";
	} else {
		navbarMenu.removeAttribute("style");
	}
});