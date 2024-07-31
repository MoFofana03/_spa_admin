<!-- Sidebar  -->
<nav id="sidebar">
   <div class="sidebar_blog_1">
      <div class="sidebar-header">
         <div class="logo_section">
            <a href="index.html"><img class="logo_icon img-responsive" src="<?= LINK ?>/assets/images/logo/logo_icon.png" alt="#" /></a>
         </div>
      </div>
      <div class="sidebar_user_info">
         <div class="icon_setting"></div>
         <div class="user_profle_side">
            <div class="user_img"><img class="img-responsive" src="<?= LINK ?>/assets/images/layout_img/user_img.jpg" alt="#" /></div>
            <div class="user_info">
               <h6>John David</h6>
               <p><span class="online_animation"></span> Online</p>
            </div>
         </div>
      </div>
   </div>
   <div class="sidebar_blog_2">
      <h4>General</h4>
      <ul class="list-unstyled components">
      <li>
            <a href="<?= LINK?>acceuil">
               <i class="fa fa-home yellow_color"></i> <span>acceuil</span></a>
         </li>
         <li class="active">
            <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                  class="fa fa-group purple_color"></i> <span>Employer</span></a>
            <ul class="collapse list-unstyled" id="dashboard">
               <li>
                  <a href="<?= LINK?>ajouter"> <span>ajouter</span></a>
               </li>
               <li>
                  <a href="<?= LINK?>liste">> <span>liste</span></a>
               </li>
               <li>
                  <a href="<?= LINK?>pointage">> <span>pointage</span></a>
               </li>
            </ul>
            </li>
            <li>
            <a href="<?= LINK?>paiement">
               <i class="fa fa-money blue2_color"></i> <span>Paiement</span></a>
         </li>
         <li class="active">
            <a href="#Projet" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                  class="fa fa-folder purple_color2"></i> <span>Projet</span></a>
            <ul class="collapse list-unstyled" id="Projet">
               <li>
                  <a href="<?= LINK?>addprojet">> <span>ajouter</span></a>
               </li>
               <li>
                  <a href="<?= LINK?>liste-projet"> <span>liste</span></a>
               </li>
               <li>
                  <a href="<?= LINK?>evolution">> <span>evolution</span></a>
               </li>
            </ul>
            </li>
         <li>
            <a href="<?= LINK?>gest-conge">
               <i class="fa fa-folder-open-o yellow_color"></i> <span>gestion conge</span></a>
         </li>
         <li>
            <a href="<?= LINK?>gest-contrat"> <span>
               <i class="fa fa-folder-open-o green_color"></i> <span>gestion contrat</span></a>
         </li>
         <li>
            <a href="<?= LINK?>appreciation">
               <i class="fa fa-certificate red_color"></i> <span>appreciation</span></a>
         </li>
         <li>
            <a href="<?= LINK?>messagerie">
               <i class="fa fa-comments blue2_color"></i> <span>messagerie</span></a>
         </li>
   </ul>
   </div>
</nav>
<!-- end sidebar -->

<style>
   .list-unstyled li span{
      text-transform: capitalize;
      font-size: 15PX;
   }
</style>

<!-- right content -->
<div id="content">