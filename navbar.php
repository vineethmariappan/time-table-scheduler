<?php
session_start();
require_once "config.php";
?>
<nav class="navbar navbar-light bg-secondary">
  <div class="container">
    <span class="navbar-brand mb-0 h1" style="color:white;">TIMETABLE ASSISTANT</span>
  
    <div class="my-2 my-lg-0 ml-auto">
      <?php
       
      if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){ ?>
      <a class="btn btn-outline-white" href="subjectallocation.php" style="outline:none;">Subject Allocation</a>
      <a class="btn btn-outline-white" href="tableassistant.php" style="outline:none;">Timetable Assistant</a>
      <a class="btn btn-outline-white" href="logout.php" style="outline:none;">Logout</a>
      <?php }
      else{
      ?>
      <button class="btn btn-outline-white" href="login.php">Login</button>
      <?php
     }
      ?>
    </div>
  </div>
</nav>