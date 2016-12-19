<!DOCTYPE html>
<html lang="en">
<head>
	  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
   <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head();?>  	
</head>
<body>
<?php if ( has_nav_menu( 'primary' ) ) : ?>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Title</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
			</ul>
			<form class="navbar-form navbar-left" role="search" method="get"  action="<?php bloginfo('url'); ?>">
				<div class="form-group">
				 <input class="form-control" type="text" value="Từ khóa tìm kiếm ..."
        name="s" onblur="if (this.value == '')  {this.value = 'Từ khóa tìm kiếm ...';}"
        onfocus="if (this.value == 'Từ khóa tìm kiếm ...') {this.value = '';}" />
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
				
			
		<?php
				// Primary navigation menu.
					wp_nav_menu( array(
						'menu_class'     => 'nav navbar-nav navbar-right',
						'theme_location' => 'primary',
					) );
				?>
		</div>
	</div>
</nav>
<?php endif; ?>
<div>
	

	
	
</div>
	
