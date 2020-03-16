
<nav class="navbar navbar-expand-md navbar-dark  bg-dark">
    <a class="navbar-brand" href="../public/Accueil.php">PHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link <?php echo ($class = $_SERVER['REQUEST_URI']== "/Controle_PHP/public/Accueil.php?active"?"active":"" ); ?>" href="../public/Accueil.php?active">Accueil <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($class = $_SERVER['REQUEST_URI']== "/Controle_PHP/public/Enregistrement.php?active"?"active":"" ); ?>" href="../public/Enregistrement.php?active">Enregistrement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($class = $_SERVER['REQUEST_URI']== "/Controle_PHP/public/Admin.php?active"?"active":"" ); ?> " href="../public/Admin.php?active" tabindex="-1" aria-disabled="true">Administration</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?php echo ($class = $_SERVER['REQUEST_URI']== "/Controle_PHP/public/Modif.php?active"?"active":"" ); ?> " href="../public/Modif.php?active" tabindex="-1" aria-disabled="true">Modification</a>
        </li>
      </ul>
   
    </div>
  </nav>
  