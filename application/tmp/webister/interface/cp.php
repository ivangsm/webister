<?php require 'include/head.php';
?>
   
            <?php if ($_SESSION['user'] == 'admin') {
    ?>
                      <div style="   margin-top: 5px;
    margin-bottom: 5px;
    margin-right: 100px;
    margin-left: 100px; text-align:center;" class="jumbotron">
  <h1>News</h1>
  <p><?php 
  
  $news = file_get_contents("https://raw.githubusercontent.com/alwaysontop617/webister/master/NEW.txt"); 
  if (strlen($news) > "190") {
    echo substr($news, 0, 190) . "...</p>";
    ?>
    
    <p><a class="btn btn-primary btn-lg" href="https://raw.githubusercontent.com/alwaysontop617/webister/master/NEW.txt" role="button">Learn more</a></p>
    <?php
  } else {
   echo $news . "</p>";
  }
  
  ?>
  
</div>          
  <ul class="list-group">
  <li class="list-group-item">Power Management</li>
  <li class="list-group-item">            <a type="button" href="action.php?act=pwr" class="btn btn-default"><i class="fa  fa-5x fa-power-off"></i><hr>Stop</a>
                                        <a type="button" href="action.php?act=restart" class="btn btn-default"><i class="fa fa-5x fa-refresh"></i><hr>Restart</a>
                                        <a type="button" href="action.php?act=server" class="btn btn-default"><i class="fa fa-5x fa-server"></i><hr>Restart</a>
                                        <a type="button" href="action.php?act=mysql" class="btn btn-default"><i class="fa fa-5x fa-database"></i><hr>Restart</a></li>
  </li>
  </ul>
<ul class="list-group">
  <li class="list-group-item">Servers</li>
  <li class="list-group-item">  

                                        <a type="button" href="newserv.php" class="btn btn-default"><i class="fa fa-5x fa-plus"></i><hr>New Server</a>
                                        <a type="button" href="index.php?page=list#" class="btn btn-default"><i class="fa fa-5x fa-user"></i><hr>Users</a>
                                        <a type="button" href="plans.php" class="btn btn-default"><i class="fa fa-5x fa-columns" aria-hidden="true"></i><hr>Plans</a>
                                         </li>
  </ul>
                                      <ul class="list-group">
  <li class="list-group-item">System</li>
  <li class="list-group-item">  

                                  <a type="button" href="settings.php" class="btn btn-default"><i class="fa fa-5x fa-sliders"></i><hr>Settings</a>
                                        <a type="button" href="terminal.php" class="btn btn-default"><i class="fa fa-5x fa-terminal"></i><hr>Terminal</a>
                                        <a type="button" href="update.php" class="btn btn-default"><i class="fa fa-5x fa-arrow-up"></i><hr>Update</a>
                                        <a type="button" href="http://adaclare.com/errtrck/bug_report_page.php" class="btn btn-default"><i class="fa fa-5x fa-life-ring"></i><hr>Bugs</a>
                                         </li>
  </ul>  
                               
            <?php 
} ?>
<br>
  <ul class="list-group">
  <li class="list-group-item">My Server</li>
  <li class="list-group-item">  

                                        <a type="button" href="FileManager.php" class="btn btn-default"><i class="fa fa-5x fa-file"></i><hr>Files</a>
                                        <a type="button" href="adminer-4.2.4.php?server=localhost" class="btn btn-default"><i class="fa fa-5x fa-database"></i><hr>Database</a>
                                        <a type="button" href="wp.php" class="btn btn-default"><i class="fa fa-5x fa-wordpress"></i><hr>Wordpress</a>
                                        <a type="button" href="phpinfo.php" class="btn btn-default"><i class="fa fa-5x fa-code"></i><hr>PHP Info</a>
                                        <a type="button" href="mobiapp.php" class="btn btn-default"><i class="fa fa-5x fa-mobile"></i><hr>Mobile App</a>
                                          <a type="button" href="<?php echo file_get_contents("data/forum"); ?>" class="btn btn-default"><i class="fa fa-5x fa-file"></i><hr>Forum</a>
                                        <a type="button" href="<?php echo file_get_contents("data/support"); ?>" class="btn btn-default"><i class="fa fa-5x fa-life-ring"></i><hr>Support</a>
                                    
                                                         </li>
  </ul>  
                               
                                      


    
<?php require 'include/footer.php'; ?>
