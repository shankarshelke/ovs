<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <!-- Recent Order Table -->
                <div class="card card-table-border-none" id="recent-orders">
                    <div class="card-header justify-content-between pt-2 pb-2 heading-border-bottom">
                        <h2>Booking
                            <!-- <button data-url="booking/addBookingModal" type="button"
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
                                    <th>Service Name</th>
                                    <th>Customer Name</th>
                                    <th>Vendor Name</th>
                                    <th>Price(RS)</th>
                                    <th>Status</th>
                                    <!-- <th class="d-none d-md-table-cell">Stock Quantity</th>
                      <th class="d-none d-md-table-cell">codeNo</th> -->
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($booking_details as $key => $booking_detail) { ?>
                                <tr class="card-header-top">
                                    <td><?php echo ($key + 1); ?></td>
                                    <td><?php echo $booking_detail['service_name']; ?></td>
                                    <td><?php echo $booking_detail['customer_name']; ?></td>
                                    <td><?php echo $booking_detail['vendor_name']; ?></td>
                                    <td><?php echo ($booking_detail['price']) ? $booking_detail['price'] : "-"; ?></td>
                                    <td>
                                        <?php if($booking_detail['status'] == PENDING_BOOKING) { ?>
                                            <a class="btn btn-warning btn-sm text-dark">Pending</a>
                                        <?php } else if($booking_detail['status'] == RECEIVED_BOOKING) { ?>
                                            <a class="editBtn btn btn-success btn-sm text-dark">Received</a>
                                        <?php } else{ ?>
                                            <a class="editBtn btn btn-danger btn-sm text-dark">Canceled</a>
                                        <?php } ?>
                                    </td>

                                    <td class="text-right">
                                        <div class="dropdown show d-inline-block widget-dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                                id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" data-display="static"></a>
                                            <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdown-recent-order1">
                                                <?php if($booking_detail['status'] == PENDING_BOOKING) { ?>
                                                    <li class="dropdown-item">
                                                        <a data-url="booking/updateBookingStatus/<?php echo $type;?>"
                                                            data-id="<?php echo $booking_detail['id']; ?>" data-status="2"
                                                            class="editBtn btn">Click to Receive</a>
                                                    </li>
                                                <?php }else if($booking_detail['status'] == RECEIVED_BOOKING && $this->data['groups']->id == CUSTOMERS) { ?>
                                                    <li class="dropdown-item">
                                                        <a data-url="booking/updateBookingStatus/<?php echo $type;?>"
                                                            data-id="<?php echo $booking_detail['id']; ?>" data-status="3"
                                                            class="editBtn btn">Click to Cancel</a>
                                                    </li>
                                                <?php } ?>
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