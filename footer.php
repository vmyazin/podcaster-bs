<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

      </div><!--.site-content-->
      
      
      <footer class="site-footer" role="contentinfo">
        <div id="footer-row" class="row site-footer">
          <div class="col-md-6 footer-left">
            2017-<?php echo date('Y'); ?> &copy; Everyday Journey Podcast
          </div>
          <div class="col-md-6 footer-right text-right">
            <?php dynamic_sidebar('footer-right'); ?> 
          </div>
        </div>
      </footer>
    </div><!--.container page-container-->
    
    
    <!--wordpress footer-->
    <?php wp_footer(); ?> 

	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2420101-37', 'auto');
  ga('send', 'pageview');

	</script>

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter47699239 = new Ya.Metrika({
						id:47699239,
						clickmap:true,
						trackLinks:true,
						accurateTrackBounce:true,
						webvisor:true
					});
				} catch(e) { }
			});

			var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function () { n.parentNode.insertBefore(s, n); };
			s.type = "text/javascript";
			s.async = true;
			s.src = "https://mc.yandex.ru/metrika/watch.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else { f(); }
		})(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/47699239" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->    

</body>
</html>