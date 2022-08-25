<?php  session_start(); ?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="php_contact_list.php">Contact List</a></li>
      <li><a href="php_contact_add.php">Add contact</a></li>
      <li><a href="bootstrap_modal.php">Modal</a></li>
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