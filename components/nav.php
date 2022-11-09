
<?php 

    $menus = \AQUILA_THEME\Inc\Menus::get_instance();

    $header_menu_id = $menus->get_menu_id("aquila-header-menu");

    $menu_main_items = wp_get_nav_menu_items( $header_menu_id );
    // echo "<pre>";
    //   print_r($menu_main_items);
    // echo "</pre>";

    // wp_die('');

    $menus_id = []; 

 ?>

<?php if( is_array($menu_main_items) && count($menu_main_items) > 0 ): ?>
  <ul class="flex gap-5 align-middle items-center justify-center">

     <?php foreach( $menu_main_items as $menu ): ?>
      <li class="group flex gap-2 align-middle items-center relative">
        <a href="<?= $menu['url'];?>" class="hover:text-blue-600"><?= $menu->title;?></a>
        <?php 
            array_push($menus_id, $menu['id']);
         ?>
        <?php if( $menu['menu_item_parent'] > 0 ): ?>
        <span class="arrow-down block ">
          <svg class="w-6 h-6 group-hover:-rotate-180 transition-all duration-200 group-hover:duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
        </span>

        <div class="absolute hidden group-hover:block bg-gray-400 top-7 w-full p-3 rounded-lg">
            <ul class="flex flex-col gap-2">
              <?php if( in_array( $menu['menu_item_parent'], $menus_id )  ) ?>
              <li><a href="#">Sublink</a></li>
              <li><a href="#">Sublink</a></li>
              <li><a href="#">Sublink</a></li>
              <li><a href="#">Sublink</a></li>
              <li><a href="#">Sublink</a></li>
            </ul>
        </div>

      <?php endif; ?>
      </li>
      <li><a href="#">Some Link</a></li>

    <?php endforeach; ?>
  </ul>
<?php endif; ?>

