<div class="content-wrapper">
  <div class="content">
    <div class="row">
      <div class="col-12">
        <!-- Recent Order Table -->
        <div class="card card-table-border-none" id="recent-orders">
          <div class="card-header justify-content-between pt-2 pb-2 heading-border-bottom">
            <h2>Testimonial
              <button data-url="testimonial/addTestimonialModal" type="button" class="btn ml-2 btn-info btn-pill loadModal">
                Add New <i class="mdi mdi-plus-outline font-size-20"></i>
              </button>
              <!-- <button data-url="testimonial/addTestimonialModal" type="button" class="mb-1 btn btn-twitter rounded-circle loadModal"><span class="mdi mdi-plus-outline"></span></button> -->
            </h2>
          </div>
          <div class="card-body pt-0 pb-5">
            <table class="table card-table table-responsive table-responsive-large" style="width:100%">
              <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Name</th>
                  <th>Designation</th>
                  <th>Description</th>
                  <th>Image</th>
                  <!-- <th class="d-none d-md-table-cell">Stock Quantity</th>
                      <th class="d-none d-md-table-cell">codeNo</th> -->
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($testimonial_details as $key => $teatimoninal_detail) { ?>
                  <tr class="card-header-top">
                    <td><?php echo ($key + 1); ?></td>
                    <td><?php echo $teatimoninal_detail['name']; ?></td>
                    <td><?php echo ($teatimoninal_detail['designation']) ? $teatimoninal_detail['designation'] : "-"; ?></td>
                    <td><?php echo ($teatimoninal_detail['desc']) ? $teatimoninal_detail['desc'] : "-"; ?></td>
                    <td>
                      <div class="table-img media-image align-self-center mr-3 rounded">
                        <img src="<?php echo base_url() . $teatimoninal_detail['imgPath']; ?>" class="img-image" />
                      </div>
                    </td>
                    <td class="text-right">
                      <div class="dropdown show d-inline-block widget-dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                          <li class="dropdown-item">
                            <a data-url="testimonial/addTestimonialModal" data-id="<?php echo $teatimoninal_detail['id']; ?>" class="editBtn btn">Edit</a>
                          </li>
                          <li class="dropdown-item">
                            <a data-url="testimonial/deleteTestimonial" data-id="<?php echo $teatimoninal_detail['id']; ?>" data-img-path="<?php echo $teatimoninal_detail['imgPath']; ?>" class="btn removeBtn">Remove</a>
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