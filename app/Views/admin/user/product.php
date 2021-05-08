<div class="content-wrapper">
  <div class="content">
    <div class="row">
      <div class="col-12">
        <!-- Recent Order Table -->
        <div class="card card-table-border-none" id="recent-orders">
          <div class="card-header justify-content-between">
            <h2>Products
              <button data-url="product/addProductModal" type="button" class="mb-1 btn btn-twitter rounded-circle loadModal">
                <span class="mdi mdi-plus-outline"></span>
              </button>
            </h2>
            <div class="date-range-report">
              <span></span>
            </div>
          </div>
          <div class="card-body pt-0 pb-5">
            <table class="table card-table table-responsive table-responsive-large" style="width:100%">
              <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th class="d-none d-md-table-cell">Units</th>
                  <th class="d-none d-md-table-cell">Stock Quantity</th>
                  <th class="d-none d-md-table-cell">codeNo</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($product_details as $key => $product_detail) { ?>
                  <tr>
                    <td><?php echo ($key + 1); ?></td>
                    <td><?php echo $product_detail['name']; ?></td>
                    <td><?php echo ($product_detail['price']) ? $product_detail['price'] : "-"; ?></td>
                    <td class="d-none d-md-table-cell"><?php echo ($product_detail['unit']) ? $product_detail['unit'] : "-"; ?></td>
                    <td class="d-none d-md-table-cell"><?php echo $product_detail['stockQuantity']; ?></td>
                    <td class="d-none d-md-table-cell"><?php echo ($product_detail['codeNo']) ? $product_detail['codeNo'] : "-"; ?></td>
                    <!-- <td >
                        <span class="badge badge-success"></span>
                      </td> -->
                    <td class="text-right">
                      <div class="dropdown show d-inline-block widget-dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                          <li class="dropdown-item">
                            <a data-url="product/addProductModal/<?php echo $product_detail['id']; ?>" class="loadModal btn">Edit</a>
                          </li>
                          <li class="dropdown-item">
                            <a data-url="product/deleteProduct" data-id="<?php echo $product_detail['id']; ?>" class="btn removeBtn">Remove</a>
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