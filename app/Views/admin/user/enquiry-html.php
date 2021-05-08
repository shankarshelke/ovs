
    <div class="content-wrapper">
      <div class="content">
        <div class="row">
          <div class="col-12">
            <!-- Recent Order Table -->
            <div class="card card-table-border-none" id="recent-orders">
              <div class="card-header justify-content-between pt-2 pb-2 heading-border-bottom">
                <h2>Enquiry 
                  <!-- <button data-url="gallery/addGalleryModal" type="button" class="mb-1 btn btn-twitter rounded-circle loadModal"><span class="mdi mdi-plus-outline"></span></button> -->
                </h2>
              </div>
              <div class="card-body pt-0 pb-5">
                <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                  <thead>
                    <tr>
                      <th>Sr. No.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Contact</th>
                      <th>Country</th>
                      <th>Message</th>
                      <!-- <th class="d-none d-md-table-cell">Stock Quantity</th>
                      <th class="d-none d-md-table-cell">codeNo</th> -->
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($enquiry_details as $key => $enquiry_detail) { ?>
                    <tr class="card-header-top">
                      <td ><?php echo ($key + 1);?></td>
                      <td ><?php echo $enquiry_detail['name'];?></td>
                      <td><?php echo ($enquiry_detail['email']) ? $enquiry_detail['email'] : "-";?></td>
                      <td><?php echo ($enquiry_detail['contact']) ? $enquiry_detail['contact'] : "-";?></td>
                      <td><?php echo ($enquiry_detail['country']) ? $enquiry_detail['country'] : "-";?></td>
                      <td><?php echo ($enquiry_detail['message']) ? $enquiry_detail['message'] : "-";?></td>
                     
                      <td class="text-right">
                        <div class="dropdown show d-inline-block widget-dropdown">
                          <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                            <li class="dropdown-item">
                              <a data-url="enquiry/deleteEnquiry" data-id="<?php echo $enquiry_detail['id'];?>"  class="btn removeBtn">Remove</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>	