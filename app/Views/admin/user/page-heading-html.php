<div class="content-wrapper">
  <div class="content">
    <div class="row">
      <div class="col-12">
        <!-- Recent Order Table -->
        <div class="card card-table-border-none" id="recent-orders">
          <div class="card-header justify-content-between pt-2 pb-2 heading-border-bottom">
            <h2>About Us & Deals </h2>

          </div>
          <div class="card-body pt-0 pb-5">
            <table class="table card-table table-responsive table-responsive-large" style="width:100%">
              <thead>
                <tr>
                  <th>Sr.No</th>
                  <th>Name</th>
                  <th>Desc 1</th>
                  <!-- <th>Desc 2</th> -->
                  <th>Image</th>
                  <!-- <th class="d-none d-md-table-cell">Stock Quantity</th>
                      <th class="d-none d-md-table-cell">codeNo</th> -->
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($page_details as $key => $gallery_detail) { ?>
                  <tr class="card-header-top">
                    <td><?php echo ($key + 1); ?></td>
                    <td><?php echo $gallery_detail['name']; ?></td>
                    <td><?php echo ($gallery_detail['desc1']) ? $gallery_detail['desc1'] : "-"; ?></td>
                    <!-- <td><?php echo ($gallery_detail['desc2']) ? $gallery_detail['desc2'] : "-"; ?></td> -->
                    <td>
                      <div class="table-img media-image align-self-center mr-3 rounded">
                        <img src="<?php echo base_url() . $gallery_detail['imgPath']; ?>" class="img-image" />
                      </div>
                    </td>
                    <td class="text-right">
                      <a data-url="page_heading/updateHeadingModal" data-id="<?php echo $gallery_detail['id']; ?>" class="editBtn btn">
                        <i class="mdi mdi-pen"></i> Edit</a>
                      <!-- <div class="dropdown show d-inline-block widget-dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                          <li class="dropdown-item">
                            
                          </li>
                          <li class="dropdown-item">
                            <a data-url="gallery/deleteGallery" data-id="<?php echo $gallery_detail['id']; ?>" data-img-path="<?php echo $gallery_detail['imgPath']; ?>" class="btn removeBtn">Remove</a>
                          </li>
                        </ul>
                      </div> -->
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