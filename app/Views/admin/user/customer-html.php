<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <!-- Recent Order Table -->
                <div class="card card-table-border-none" id="recent-orders">
                    <div class="card-header justify-content-between pt-2 pb-2 heading-border-bottom">
                        <h2>Customers
                            <!-- <button data-url="customer/addCustomerModal" type="button"
                                class="btn ml-2 btn-info btn-pill loadModal">
                                Add New <i class="mdi mdi-plus-outline font-size-20"></i>
                            </button> -->
                            <!-- <button data-url="shop/addShopModal" type="button" class="mb-1 btn btn-twitter rounded-circle loadModal"><span class="mdi mdi-plus-outline"></span></button> -->
                        </h2>
                    </div>
                    <div class="card-body pt-0 pb-5  overflow-x">
                        <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sr.No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact No</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <!-- <th class="d-none d-md-table-cell">Stock Quantity</th>
                      <th class="d-none d-md-table-cell">codeNo</th> -->
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($customer_details as $key => $customer_detail) { ?>
                                <tr class="card-header-top">
                                    <td><?php echo ($key + 1); ?></td>
                                    <td><?php echo $customer_detail['name']; ?></td>
                                    <td><?php echo $customer_detail['email']; ?></td>
                                    <td><?php echo ($customer_detail['contact']) ? $customer_detail['contact'] : "-"; ?></td>
                                    <td><?php echo ($customer_detail['address']) ? $customer_detail['address'] : "-"; ?></td>
                                    <td>
                                      <?php if($customer_detail['status'] == 1) { ?>
                                          <a data-url="customer/updateCustomerStatus"
                                          data-id="<?php echo $customer_detail['id']; ?>" data-status="2"
                                          class="editBtn btn btn-info btn-sm text-dark">Click to Active</a>
                                      <?php } else { ?>
                                          <a data-url="customer/updateCustomerStatus"
                                            data-id="<?php echo $customer_detail['id']; ?>" data-status="1"
                                            class="editBtn btn btn-danger btn-sm text-dark">Click to Inactive</a>
                                      <?php } ?>
                                    </td>

                                    <!-- <td class="text-right">
                                        <div class="dropdown show d-inline-block widget-dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                                id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" data-display="static"></a>
                                            <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdown-recent-order1">
                                                <li class="dropdown-item">
                                                    <a data-url="customer/addCustomerModal"
                                                        data-id="<?php echo $customer_detail['id']; ?>"
                                                        class="editBtn btn">Edit</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a data-url="customer/deleteCustomer"
                                                        data-id="<?php echo $customer_detail['id']; ?>"
                                                        data-img-path="<?php echo $customer_detail['pan_card_path']; ?>"
                                                        class="btn removeBtn">Remove</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td> -->
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