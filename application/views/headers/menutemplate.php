<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Catalogar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url(); ?>RegistrarCatalogacion">Crear Catalogacion</a></li>
            <li><a href="<?=base_url(); ?>VerEditarCatalogacion/">Editar Catalogacion</a></li>
            <li><a href="<?=base_url(); ?>VerEliminarCatalogacion">Eliminar Catalogacion</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Areas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url(); ?>RegistrarArea">Crear Areas</a></li>
            <li><a href="<?=base_url(); ?>VerEditarArea">Editar Areas</a></li>
             <li><a href="<?=base_url(); ?>VerEliminarArea">Eliminar Areas</a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Autores</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url(); ?>RegistrarAutor">Crear Autores</a></li>
            <li><a href="<?=base_url(); ?>VerEditarAutores">Editar Autores</a></li>
            <li><a href="<?=base_url(); ?>VerEliminarAutores">Eliminar Autores</a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Palabras Claves</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url(); ?>RegistrarPalabra">Crear Palabra</a></li>
            <li><a href="<?=base_url(); ?>VerEditarPalabra">Editar Palabra</a></li>
            <li><a href="<?=base_url(); ?>VerEliminarPalabra">Eliminar Palabra</a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url(); ?>RegistrarUsuario">Crear Usuario</a></li>
            <li><a href="<?=base_url(); ?>#">Editar Usuario</a></li>
            <li><a href="<?=base_url(); ?>#">Eliminar Usuario</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         <!-- TITULO DE FORMULARIO -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>