<?php  session_start(); 
$fullurl = $_SERVER['PHP_SELF'];
$arrayUrl = explode("/",$fullurl);
$currentPage = ($arrayUrl[2]);
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      <li
      <?php
      if($currentPage == 'php_contact_list.php'){
        echo "class='active'";
      }
      ?>
      ><a href="php_contact_list.php">Contact List</a></li>
      <li
      <?php
      if($currentPage == 'php_contact_add.php'){
        echo "class='active'";
      }
      ?>
      ><a href="php_contact_add.php">Add contact</a></li>
      <li
      <?php
      if($currentPage == 'bootstrap_modal.php'){
        echo "class='active'";
      }
      ?>
      ><a href="bootstrap_modal.php">Modal</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <?php 
    if(empty($_SESSION['email'])){ ?>
      <li><a href="php_contact_add.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    <?php }else{ ?>
        <li>
          <a href="#">
          <?php echo ucfirst($_SESSION['name']);  ?>
          </a>
        </li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    <?php }   ?>  
      
    </ul>
  </div>
</nav>