<?php if (is_active_sidebar('sidebar-right')) { ?> 
        <div class="col-md-3" id="sidebar-right">
          <?php do_action('before_sidebar'); ?> 
          <?php dynamic_sidebar('sidebar-right'); ?> 
          <aside class="widget">
            <h1 class="widget-title">Subscribe</h1>
            <ul class="subscribe-links">
              <li>
                <a href="https://overcast.fm">
                  <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-overcast.svg" />
                  Overcast
                </a>
              </li>
              <li>
                <a href="http://www.itunes.com">
                  <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-itunes.svg" />
                  iTunes
                </a>
              </li>
              <li>
                <a href="<?php echo site_url(); ?>/podcast/feed">
                  <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-rss.svg" />
                  RSS
                </a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </aside>
        </div>
<?php } ?> 
