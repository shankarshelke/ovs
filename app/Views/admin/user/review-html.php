<div class="content-wrapper">
  <div class="content">
    <div class="row">
      <div class="col-12">
        <!-- Recent Order Table -->
        <div class="card card-table-border-none" id="recent-orders">
          <div class="card-header justify-content-between pt-2 pb-2 heading-border-bottom">
            <h2>Reviews - <span class="text-danger small">(Note:- Approved review will be shown directly to website Review Section under about us.)</span>
              <!-- <button data-url="gallery/addGalleryModal" type="button" class="mb-1 btn btn-twitter rounded-circle loadModal"><span class="mdi mdi-plus-outline"></span></button> -->
            </h2>

          </div>
          <div class="card-body pt-0 pb-5" style="overflow-x : auto">
            <table class="table card-table table-responsive table-responsive-large" style="width:100%">
              <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Message</th>
                  <th>Image</th>
                  <th>Status</th>
                  <!-- <th class="d-none d-md-table-cell">Stock Quantity</th>
                      <th class="d-none d-md-table-cell">codeNo</th> -->
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($review_details as $key => $review_details) { ?>
                  <tr class="card-header-top">
                    <td><?php echo ($key + 1); ?></td>
                    <td><?php echo $review_details['name']; ?></td>
                    <td><?php echo ($review_details['email']) ? $review_details['email'] : "-"; ?></td>
                    <td><?php echo ($review_details['message']) ? $review_details['message'] : "-"; ?></td>
                    <td>
                      <div class="table-img media-image align-self-center mr-3 rounded">
                        <img src="<?php echo base_url() . $review_details['imgPath']; ?>" class="img-image" />
                      </div>

                      <!-- <?php echo ($review_details['imgPath']) ? $review_details['imgPath'] : "-"; ?> -->
                    </td>
                    <td>
                      <span class="badge <?php echo ($review_details['status']) ? ($review_details['status'] == 1) ? 'badge-success' : 'badge-danger' : 'badge-warning'; ?>"><?php echo ($review_details['status']) ? ($review_details['status'] == 1) ? 'approved' : 'rejected' : 'pending'; ?></span>
                    </td>
                    <td class="text-right">
                      <div class="dropdown show d-inline-block widget-dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                          <li class="dropdown-item">
                            <a class="saveBtn btn" data-id="<?php echo $review_details['id']; ?>" data-status="1" data-url="review/updateReview">Approve</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="saveBtn btn" data-id="<?php echo $review_details['id']; ?>" data-status="2" data-url="review/updateReview">Reject</a>
                          </li>
                          <li class="dropdown-item">
                            <a data-url="review/addReviewModal" data-id="<?php echo $review_details['id']; ?>" class="editBtn btn">Edit</a>
                          </li>
                          <li class="dropdown-item">
                            <a data-url="review/deleteReview" data-id="<?php echo $review_details['id']; ?>" class="btn removeBtn">Remove</a>
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