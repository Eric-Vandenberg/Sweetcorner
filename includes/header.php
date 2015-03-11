
          <header class="wrapper">
            <div id="top-header"></div>
            <nav id="menu">
                <ul>
                <?php 
//looping through pages to create content                
foreach($pages as $menu_id=>$menu_contents) 
{
  $selected_menu_class = '';
  if($_GET['page']==$menu_contents['pageUrl']) 
  {
    $selected_menu_class = 'selected_menu_item';
  }
  echo "<li><a class='$selected_menu_class' href='index.php?page=$menu_contents[pageUrl]'>$menu_id</a></li>";

}

                ?>
                </ul>
            </nav>
            <div class="clear-float"></div>
            <div id="logo"></div>
            <div class="italic-text" id="header-text">
              We deliver cupcakes for the important events in your life!
            </div>
          </header>
    
          
          