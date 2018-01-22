<header id="navbar" role="banner">
  <div class="container">
	<div class="navbar-header">
	  <?php if ($logo): ?>
		<a class="logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
		  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
		</a>
	  <?php endif; ?>

	  <?php if (!empty($site_name)): ?>
		<a class="name business-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
	  <?php endif; ?>

		<button type="button" class="navbar-toggle" >
		  <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		</button>
	</div>

	<nav role="navigation">
	  <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Main menu'))); ?>
	</nav>
  </div>
</header>

<div class="container">
	<?php if (!empty($page['sidebar_first'])): ?>
  	<header role="banner" id="page-header">
		<?php print render($page['header']); ?>
  	</header> <!-- /#page-header -->
	<?php endif; ?>
  	
  	<div class="main-container">
		<?php if (!empty($page['sidebar_first'])): ?>
	  	<aside class="sidebar sidebar-first" role="complementary">
			<?php print render($page['sidebar_first']); ?>
	  	</aside>  <!-- /#sidebar-first -->
		<?php endif; ?>

		<section<?php print $content_column_class; ?>>
	  		<?php if (!empty($page['highlighted'])): ?>
			<div class="highlighted"><?php print render($page['highlighted']); ?></div>
	  		<?php endif; ?>

	  		<?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
	  		<a id="main-content"></a>

	  		<?php print render($title_prefix); ?>
	  		<?php if (!empty($title)): ?>
				<h1 class="page-header"><?php print $title; ?></h1>
	  		<?php endif; ?>
	  		<?php print render($title_suffix); ?>

	  		<?php print $messages; ?>

	  		<?php if (!empty($tabs)): ?>
				<?php print render($tabs); ?>
	  		<?php endif; ?>

			<?php if (!empty($page['help'])): ?>
				<?php print render($page['help']); ?>
			<?php endif; ?>

			<?php if (!empty($action_links)): ?>
				<ul class="action-links"><?php print render($action_links); ?></ul>
			<?php endif; ?>

	  		<?php print render($page['content']); ?>
		</section>

		<?php if (!empty($page['sidebar_second'])): ?>
		<aside class="sidebar sidebar-second" role="complementary">
			<?php print render($page['sidebar_second']); ?>
		</aside>  <!-- /#sidebar-second -->
		<?php endif; ?>

  	</div>
</div>

<?php if (!empty($page['footer'])): ?>
<footer class="footer container">
	<?php print render($page['footer']); ?>
</footer>
<?php endif; ?>