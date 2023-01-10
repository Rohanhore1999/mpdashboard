<?php 
 echo'<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="mpdashboard"> <img  src="https://mercadosemi.in/images/Mercados_Logo.png"
    width=110" height="30"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/mpdashboard/welcome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/mpdashboard/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/mpdashboard/signup.php">Signup</a>
        </li><li class="nav-item">
          <a class="nav-link" href="/mpdashboard/logout.php">Logout</a>
        </li>

     </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>';
?>