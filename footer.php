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
            2017 &copy; Everyday Journey Podcast
          </div>
          <div class="col-md-6 footer-right text-right">
            <?php dynamic_sidebar('footer-right'); ?> 
          </div>
        </div>
      </footer>
    </div><!--.container page-container-->
    
    
    <!--wordpress footer-->
    <?php wp_footer(); ?> 
  </body>
</html>