			
</div><!-- footer -->
	<footer class="footer" role="contentinfo">
		 <?php
				dynamic_sidebar('widget-area-footer');
		?>
		
		<div id="copyright">
			<p class="links">
			&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'SS4EB'); ?>
					<a href="//miminaz.com" title="Mariam Abdelmohsen">Mariam Abdelmohsen</a>.
			</p><!-- /copyright -->
		
		</div>
			</footer>
		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');

		var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    };
		</script>

	</body>
</html>
