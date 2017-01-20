<?php if (is_active_sidebar('sidebar-right')) { ?> 
				<div class="col-md-3" id="sidebar-right">
					<?php do_action('before_sidebar'); ?> 
					<?php dynamic_sidebar('sidebar-right'); ?> 
					<aside class="widget">
						<h1 class="widget-title">Subscribe</h1>
						<ul class="subscribe-links">
							<li>iTunes</li>
							<li><a href="<?php echo site_url(); ?>/podcast/feed">RSS</a></li>
							<li>Overcast</li>
						</ul>
					</aside>
				</div>
<?php } ?> 