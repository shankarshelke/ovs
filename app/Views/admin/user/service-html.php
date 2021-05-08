<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <!-- Recent Order Table -->
                <div class="card card-table-border-none" id="recent-orders">
                    <div class="card-header justify-content-between pt-2 pb-2 heading-border-bottom">
                        <h2>Services
                            <button data-url="service/addServiceModal" type="button"
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
                                    <th>Category</th>
                                    <th>Desc</th>
                                    <th>Price(RS)</th>
                                    <th>Image</th>
                                    <th>Icon</th>
                                    <th>Status</th>
                                    <!-- <th class="d-none d-md-table-cell">Stock Quantity</th>
                      <th class="d-none d-md-table-cell">codeNo</th> -->
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($service_details as $key => $service_detail) { ?>
                                <tr class="card-header-top">
                                    <td><?php echo ($key + 1); ?></td>
                                    <td><?php echo $service_detail['name']; ?></td>
                                    <td><?php echo $service_detail['category']['name']; ?></td>
                                    <td><?php echo ($service_detail['desc']) ? $service_detail['desc'] : "-"; ?></td>
                                    <td><?php echo ($service_detail['price']) ? $service_detail['price'] : "-"; ?></td>
                                    <td>
                                        <div class="table-img media-image align-self-center mr-3 rounded">
                                            <img src="<?php echo base_url() . $service_detail['imgPath']; ?>"
                                                class="img-image" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-img media-image align-self-center mr-3 rounded">
                                            <img src="<?php echo base_url() . $service_detail['iconPath']; ?>"
                                                class="img-image" />
                                        </div>
                                    </td>
                                    <td>
                                        <?php   if($service_detail['status'] == 1) { 
                                                    if($this->data['groups']->id == VENDORS) { ?>
                                                        <a class="btn btn-info btn-sm text-dark">Inactive</a>
                                            <?php   } else { ?>
                                                        <a data-url="service/updateServiceStatus"
                                                        data-id="<?php echo $service_detail['id']; ?>" data-status="2"
                                                        class="editBtn btn btn-info btn-sm text-dark">Click to Active</a>
                                            <?php   } 
                                                }else { 
                                                        if($this->data['groups']->id == VENDORS) { ?>
                                                            <a class="btn btn-info btn-sm text-dark">Active</a>
                                                    <?php } else { ?>
                                                            <a data-url="service/updateServiceStatus"
                                                            data-id="<?php echo $service_detail['id']; ?>" data-status="1"
                                                            class="editBtn btn btn-danger btn-sm text-dark">Click to Inactive</a>
                                                    <?php } 
                                                }?>
                                    </td>

                                    <td class="text-right">
                                        <div class="dropdown show d-inline-block widget-dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                                id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" data-display="static"></a>
                                            <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdown-recent-order1">
                                                <li class="dropdown-item">
                                                    <a data-url="service/addServiceModal"
                                                        data-id="<?php echo $service_detail['id']; ?>"
                                                        class="editBtn btn">Edit</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a data-url="service/deleteService"
                                                        data-id="<?php echo $service_detail['id']; ?>"
                                                        data-img-path="<?php echo $service_detail['imgPath']; ?>"
                                                        class="btn removeBtn">Remove</a>
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