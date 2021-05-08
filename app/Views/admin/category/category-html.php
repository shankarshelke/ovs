<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
     <div class="row align-items-center">
         <div class="col-md-8 col-lg-8">
             <h4 class="page-title">Categories List</h4>
             <div class="breadcrumb-list">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                     <li class="breadcrumb-item"><a href="#">eCommerce</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Calegories List</li>
                 </ol>
             </div>
         </div>
         <div class="col-md-4 col-lg-4">
             <div class="widgetbar">
                 <button class="btn btn-primary-rgba saveBtn" data-url="/Categories/addCategoriesModal"><i class="feather icon-plus mr-2"></i>Add new category</button>
             </div>
         </div>
     </div>
 </div>
 <!-- End Breadcrumbbar -->
 <!-- Start Contentbar -->
 <div class="contentbar">
<!-- Start row -->
<div class="row">
    <!-- Start col -->
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="display table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($categories as $key => $category) {?>
                                <tr>
                                    <td><?= $category->name;?></td>
                                    <td> <?= ($category->file_full_path) ? '<img src="' . base_url($category->file_path . '/thumb/' . $category->file_name) . '" class="img-fluid" alt="">' : '-';?> </td>
                                    <td>
                                        <button class="btn btn-info saveBtn" data-url="/Categories/addCategoriesModal/<?php echo $category->id;?>"><i class="mdi mdi-pencil"></i></button> 
                                        <button class="btn btn-danger removeBtn" data-id="<?= $category->id;?>" data-url="/Categories/deleteCategories/<?= $category->id;?>" data-img-path="< ?php echo $category['img_path'];?>" data-confirm="Are you sure you want to remove this?"><i class="mdi mdi-delete"></i></button>
                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End col -->
  </div>
<!-- End row -->
 </div>
 <!-- End Contentbar -->