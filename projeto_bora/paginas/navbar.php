<?php

    session_start();
    if(!isset($_SESSION['acesso'])){
        header('Location: login.php');        
    }
    require_once 'cabecalho.php';
    require_once '../funcoes/clientes.php';

?>

<nav class="navbar navbar-expand-lg" style="background-image: linear-gradient(#392d69, #b57bee)" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="dashboard.php">BORA - Sistema de Vendas de ingressos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">

        <!-- Após desenvolver o código em PHP, essa funcionalidade só será visível ao administrador -->
         <!-- Início -->
        <?php
          if ($_SESSION['nivel'] == 'adm'):
        ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Clientes
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="clientes.php">Gerenciar</a></li>
            </ul>
          </li>
        <?php
          endif;
        ?>
         <!-- Fim -->

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Eventos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="eventos.php">Gerenciar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ingressos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="ingressos.php">Gerenciar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Vendas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="vendas.php">Gerenciar</a></li>
            <li><a class="dropdown-item" href="relatorio_vendas.php">Relatórios</a></li>
          </ul>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Seja bem vindo(a) 
                    <?php
                      if (isset($_SESSION['cliente']))
                        echo $_SESSION['cliente'];
                    ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="editar_clientes.php">Editar dados</a></li>
                    <li><a class="dropdown-item" href="logout.php">Sair</a></li>
                </ul>
            </li>
        </ul>
    </div>
  </div>
</nav>
