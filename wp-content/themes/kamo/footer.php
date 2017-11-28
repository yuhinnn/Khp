
      <div class="last">
          <img class="kamonegi_logo_last"src="<?php echo get_template_directory_uri(); ?>/images/logo_new.png" alt="">
          <p class="rights"> © 2017 KAMOがネギをしょってくるッ!!! . All Rights Reserved</p>
      </div>
      
      
    
        <script src="jquery-3.1.0.min.js"></script>
<script src="flickity.pkgd.min.js"></script>
<script src="jquery.slicknav.min.js"></script>

<script src="jquery.bxslider.min.js"></script>
<script src="lightbox.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.slider3').bxSlider({
		auto: true,
		pause:	5000,
		speed: 1000,
		pager: true,
		slideWidth: 500,
    minSlides: 3,
    maxSlides: 2,
    moveSlides: 1,
    slideMargin: 20,
		});
  });
</script>
<script>
    $(function(){
        $("#acMenu dt").on("click", function() {
            $(this).next().slideToggle();
        });
    });
</script>
<script>
	$(function(){
		$('#menu').slicknav();
	});
</script>



</body>


</html>
