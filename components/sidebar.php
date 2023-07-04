<?php

function sidebar($menuAtivo)
{
  ?>

  <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <span class="fs-4">Sidebar</span>
    </a>
    <hr />
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="index.php" class="nav-link <?=$menuAtivo === "produtos" ? "active" : "text-white"?>" aria-current="page">
          <i class="feather-shopping-bag"></i>
          Produtos
        </a>
      </li>
      <li>
        <a href="categorias.php" class="nav-link <?=$menuAtivo === "categorias" ? "active" : "text-white"?>">
          <i class="feather-book"></i>
          Categorias
        </a>
      </li>
    </ul>
    <hr />
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1"
        data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2" />
        <strong>Lurdes</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="https://github.com/zjefersound" target="_blank">Jeff</a></li>
        <li><a class="dropdown-item" href="https://github.com/JoaoVTBorrachini" target="_blank">João</a></li>
      </ul>
    </div>
  </div>
  <?php
}
?>