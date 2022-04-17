<?php
session_start();
require_once "config.php";
?>
<nav class="navbar navbar-light bg-secondary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1" style="color:white;">TIMETABLE ASSISTANT</span>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
    <div class=" my-2 my-lg-0 ml-auto">
      <?php
       
      if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){ ?>
      <button class="btn btn-outline-white" href="subjectallocation.php" style="outline:none;">Subject Allocation</button>
      <button class="btn btn-outline-white" href="tableassistant.php" style="outline:none;">Timetable Assistant</button>
      <button class="btn btn-outline-white" href="logout.php" style="outline:none;">Logout</button>
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