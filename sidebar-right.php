<?php if (is_active_sidebar('sidebar-right')) { ?> 
        <div class="col-md-3" id="sidebar-right">
          <?php do_action('before_sidebar'); ?> 
          <?php dynamic_sidebar('sidebar-right'); ?> 
          <aside class="widget">
            <h1 class="widget-title">Subscribe</h1>
            <ul class="subscribe-links">
              <li>
                <a href="https://overcast.fm/itunes1200334914/everyday-journey-podcast">
                  <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-overcast.svg" />
                  <p>Overcast</p>
                </a>
              </li>
              <li>
                <a href="https://itunes.apple.com/us/podcast/everyday-journey-podcast/id1200334914?mt=2">
                  <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-itunes.svg" />
                  <p>iTunes</p>
                </a>
              </li>
              <li>
                <a href="<?php echo site_url(); ?>/feed/mp3/">
                  <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-rss.svg" />
                  <p>RSS</p>
                </a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </aside>
        </div>
<?php } ?> 
