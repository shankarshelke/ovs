<div class="content-wrapper">
  <div class="content">
    <div class="row">
      <div class="col-12">
        <!-- Recent Order Table -->
        <div class="card card-table-border-none" id="recent-orders">
          <div class="card-header justify-content-between pt-2 pb-2 heading-border-bottom">
            <h2>Category
              <button data-url="sub_category/addSubCategoryModal" type="button" class="btn ml-2 btn-info btn-pill loadModal">
                Add New <i class="mdi mdi-plus-outline font-size-20"></i>
              </button>
              <!-- <button data-url="sub_category/addSubCategoryModal" type="button" class="mb-1 btn btn-twitter rounded-circle loadModal"><span class="mdi mdi-plus-outline"></span></button> -->
            </h2>
          </div>
          <div class="card-body pt-0 pb-5">
            <table class="table card-table table-responsive table-responsive-large" style="width:100%">
              <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Name</th>
                  <th>Category Name</th>
                  <!-- <th class="d-none d-md-table-cell">Stock Quantity</th>
                      <th class="d-none d-md-table-cell">codeNo</th> -->
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($sub_category_details as $key => $sub_category_detail) { ?>
                  <tr class="card-header-top">
                    <td><?php echo ($key + 1); ?></td>
                    <td><?php echo $sub_category_detail['name']; ?></td>
                    <td><?php foreach ($categories as $key => $category) {
                            if($category['id'] == $sub_category_detail['cat_id']){
                              echo $category['name']; break;} }?></td>
                    
                    <td class="text-right">
                      <div class="dropdown show d-inline-block widget-dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                          <li class="dropdown-item">
                            <a data-url="sub_category/addSubCategoryModal" data-id="<?php echo $sub_category_detail['id']; ?>" class="editBtn btn">Edit</a>
                          </li>
                          <li class="dropdown-item">
                            <a data-url="sub_category/deleteCategory" data-id="<?php echo $sub_category_detail['id']; ?>" class="btn removeBtn">Remove</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>