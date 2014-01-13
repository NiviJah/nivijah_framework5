	</div><!-- Row End -->
</div><!-- Container End -->
<div class="row">
<div class="full-width footer-widget">
	<div class="">
		<?php dynamic_sidebar("Footer"); ?>
	</div>
</div>

<footer class="full-width" role="contentinfo">
	<div class="">
		<div class="large-12 columns">
			<?php //wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'inline-list')); ?>
		</div>
	</div>

</footer>
</div>
<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
	
</body>
</html>