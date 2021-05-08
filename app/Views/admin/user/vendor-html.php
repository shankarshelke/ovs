<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <!-- Recent Order Table -->
                <div class="card card-table-border-none" id="recent-orders">
                    <div class="card-header justify-content-between pt-2 pb-2 heading-border-bottom">
                        <h2>Vendors
                            <button data-url="vendor/addVendorModal" type="button"
                                class="btn ml-2 btn-info btn-pill loadModal">
                                Add New <i class="mdi mdi-plus-outline font-size-20"></i>
                            </button>
                            <!-- <button data-url="shop/addShopModal" type="button" class="mb-1 btn btn-twitter rounded-circle loadModal"><span class="mdi mdi-plus-outline"></span></button> -->
                        </h2>
                    </div>
                    <div class="card-body pt-0 pb-5  overflow-x">
                        <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sr.No.</th>
                                    <th>Name</th>
                                    <th>City</th>
                                    <th>Address</th>
                                    <th>Pin</th>
                                    <th>Contact No</th>
                                    <th>Addhar No</th>
                                    <th>Pan No</th>
                                    <th>Driver Licence</th>
                                    <th>Pan Image</th>
                                    <th>Status</th>
                                    <!-- <th class="d-none d-md-table-cell">Stock Quantity</th>
                      <th class="d-none d-md-table-cell">codeNo</th> -->
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($vendor_details as $key => $vendor_detail) { ?>
                                <tr class="card-header-top">
                                    <td><?php echo ($key + 1); ?></td>
                                    <td><?php echo $vendor_detail['name']; ?></td>
                                    <td><?php echo $vendor_detail['city']; ?></td>
                                    <td><?php echo ($vendor_detail['address']) ? $vendor_detail['address'] : "-"; ?></td>
                                    <td><?php echo ($vendor_detail['pin_code']) ? $vendor_detail['pin_code'] : "-"; ?></td>
                                    <td><?php echo ($vendor_detail['contact']) ? $vendor_detail['contact'] : "-"; ?></td>
                                    <td><?php echo ($vendor_detail['addhar_no']) ? $vendor_detail['addhar_no'] : "-"; ?></td>
                                    <td><?php echo ($vendor_detail['pan_no']) ? $vendor_detail['pan_no'] : "-"; ?></td>
                                    <td><?php echo ($vendor_detail['driv_licence']) ? $vendor_detail['driv_licence'] : "-"; ?></td>
                                    <td>
                                        <div class="table-img media-image align-self-center mr-3 rounded">
                                            <img src="<?php echo base_url() . $vendor_detail['pan_card_path']; ?>"
                                                class="img-image" />
                                        </div>
                                    </td>
                                    <td>
                                      <?php if($vendor_detail['status'] == 1) { ?>
                                          <a data-url="vendor/updateVendorStatus"
                                          data-id="<?php echo $vendor_detail['id']; ?>" data-status="2"
                                          class="editBtn btn btn-info btn-sm text-dark">Click to Active</a>
                                      <?php } else { ?>
                                          <a data-url="vendor/updateVendorStatus"
                                            data-id="<?php echo $vendor_detail['id']; ?>" data-status="1"
                                            class="editBtn btn btn-danger btn-sm text-dark">Click to Inactive</a>
                                      <?php } ?>
                                    </td>

                                    <td class="text-right">
                                        <div class="dropdown show d-inline-block widget-dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                                id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" data-display="static"></a>
                                            <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdown-recent-order1">
                                                <li class="dropdown-item">
                                                    <a data-url="vendor/addVendorModal"
                                                        data-id="<?php echo $vendor_detail['id']; ?>"
                                                        class="editBtn btn">Edit</a>
                                                </li>
                                                <!-- <li class="dropdown-item">
                                                    <a data-url="vendor/deleteVendor"
                                                        data-id="<?php echo $vendor_detail['id']; ?>"
                                                        data-img-path="<?php echo $vendor_detail['pan_card_path']; ?>"
                                                        class="btn removeBtn">Remove</a>
                                                </li> -->
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