    <!--footer-->
	<?php
	if(!isset($_SESSION["empid"]))
	{
			if(!isset($_SESSION["enrollerid"]))
			{
	?>
	<div class="nav-footer py-sm-4 py-3">
      <div class="container-fluid">
        <div class="buttom-nav ">
          <nav class="border-line py-2">
            <ul class="nav justify-content-center">
              <li class="nav-item active">
                <a class="nav-link" href="emplogin.php">Employee Login <span class="sr-only">(current)</span></a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
	<?php
			}
	}
	?>
	
    <footer class="py-3">
      <div class="container">
        <div class="copy-agile-right text-center">
          <p> 
            © <?php echo date('Y'); ?> RTO Management System. All Rights Reserved
          </p>
        </div>
      </div>
    </footer>
    <!--//footer-->

    <!--js working-->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!--//js working--> 
    <!--blast colors change-->
    <script src="js/blast.min.js"></script>
    <!--//blast colors change-->
    <!--responsiveslides banner-->
    <script src="js/responsiveslides.min.js"></script>
    <script>
      // You can also use "$(window).load(function() {"
      $(function () {
      	// Slideshow 4
      	$("#slider4").responsiveSlides({
      		auto: true,
      		pager:false,
      		nav:true ,
      		speed: 900,
      		namespace: "callbacks",
      		before: function () {
      			$('.events').append("<li>before event fired.</li>");
      		},
      		after: function () {
      			$('.events').append("<li>after event fired.</li>");
      		}
      	});
      
      });
    </script>
    <!--// responsiveslides banner-->		  
    <!--responsive tabs-->	 
    <script src="js/easy-responsive-tabs.js"></script>
    <script>
      $(document).ready(function () {
      $('#horizontalTab').easyResponsiveTabs({
      type: 'default', //Types: default, vertical, accordion           
      width: 'auto', //auto or any width like 600px
      fit: true,   // 100% fit in a container
      closed: 'accordion', // Start closed if in accordion view
      activate: function(event) { // Callback function if tab is switched
      var $tab = $(this);
      var $info = $('#tabInfo');
      var $name = $('span', $info);
      $name.text($tab.text());
      $info.show();
      }
      });
      });
       
    </script>
    <!--// responsive tabs-->	
    <!--About OnScroll-Number-Increase-JavaScript -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
      $('.counter').countUp();
    </script>
    <!-- //OnScroll-Number-Increase-JavaScript -->	  
    <!-- start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
      jQuery(document).ready(function ($) {
      	$(".scroll").click(function (event) {
      		event.preventDefault();
      		$('html,body').animate({
      			scrollTop: $(this.hash).offset().top
      		}, 900);
      	});
      });
    </script>
    <!-- start-smoth-scrolling -->
    <!-- here stars scrolling icon -->
    <script>
      $(document).ready(function () {
      
      	var defaults = {
      		containerID: 'toTop', // fading element id
      		containerHoverID: 'toTopHover', // fading element hover id
      		scrollSpeed: 1200,
      		easingType: 'linear'
      	};
      
      
      	$().UItoTop({
      		easingType: 'easeOutQuart'
      	});
      
      });
    </script>
    <!-- //here ends scrolling icon -->
    <!--bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //bootstrap working-->
	 <script src="js/jquery.dataTables.min.js"></script
  </body>
</html>