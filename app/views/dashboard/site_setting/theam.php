<?php include VIEWS."dashboard/layout/header.php"; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1><?= $title; ?></h1>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="#">Home</a></li>
             <li class="breadcrumb-item active"><?= $title; ?></li>
           </ol>
         </div>
       </div>
     </div><!-- /.container-fluid -->
   </section>

   <!-- Main content -->
   <section class="content">

     <!-- Default box -->
     <div class="card">
       <div class="card-header">
         <h3 class="card-title">Title</h3>

         <div class="card-tools">
           <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
             <i class="fas fa-minus"></i>
           </button>
           <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
             <i class="fas fa-times"></i>
           </button>
         </div>
       </div>
       <div class="card-body">
            <div class="row">
            <form action="<?= URL."/site_setting/posttheam" ?>" method="post"> 
                <select name="site_value">
                    <option value="sky" style="background-image:url(<?= URL."/theam_img/sky.png"; ?>)">sky</option>
                    <option value="food" style="background-image:url(<?= URL."/theam_img/food.png"; ?>)">food</option>
                </select>
              <input type="submit" value="change">  
            </form>
            </div>
        </div>
       <!-- /.card-body -->
       <div class="card-footer">
         Footer
       </div>
       <!-- /.card-footer-->
     </div>
     <!-- /.card -->

   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

 <?php include VIEWS."dashboard/layout/footer.php"; ?>


