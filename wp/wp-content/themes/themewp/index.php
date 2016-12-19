<?php get_header(); ?>
<?php  echo "trang chủ"; ?>
<form method="get" class="searchform" action="<?php bloginfo('url'); ?>">
    <input class="text-search" type="text" value="Từ khóa tìm kiếm ..."
        name="s" onblur="if (this.value == '')  {this.value = 'Từ khóa tìm kiếm ...';}"
        onfocus="if (this.value == 'Từ khóa tìm kiếm ...') {this.value = '';}" />
    <input type="submit" class='buttom-search' value="Tìm kiếm" />
   
</form>

 <ul>
 	<?php 
  $arrayslide=ot_get_option('slider_header',array());
  foreach ($arrayslide as $key => $value) {
 
 	 ?>
 	<li><a href=""><?php echo $value['title']; ?></a></li>
 	<?php } ?>

 </ul>
 
<?php get_footer(); ?>