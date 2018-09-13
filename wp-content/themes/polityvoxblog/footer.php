			<!-- Footer -->
			<footer class="footer footer-fixed">
				<div class="footer-top two-columns-on-tablet">
					<div class="row flex">
						<div class="column width-4">
							<div class="widget">
							<?php if(is_active_sidebar('footer1')):?>
								<?php dynamic_sidebar('footer1');?>
							<?php endif; ?>
							</div>
						</div>
						<div class="column width-4">
							<div class="widget">
								<?php if(is_active_sidebar('footer2')):?>
								<?php dynamic_sidebar('footer2');?>
								<?php endif; ?>
							</div>
						</div>
						<div class="column width-4">
							<div class="widget">
								<?php if(is_active_sidebar('footer3')):?>
									<?php dynamic_sidebar('footer3');?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="row">
						<div class="column width-12">
								<?php if(is_active_sidebar('copyright')):?>
									<?php dynamic_sidebar('copyright');?>
								<?php endif; ?>
						</div>
					</div>
				</div>
			</footer>
			<!-- Footer End -->

		</div>
	</div>

	<?php wp_footer(); ?>
	<!-- Js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?v=3"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/timber.master.min.js"></script>
</body>
</html>