
    <div class="content-wrapper">
      <div class="content">
        <div class="row">
          <div class="col-12">
            <!-- Recent Order Table -->
            <div class="card card-table-border-none" id="recent-orders">
              <div class="card-header justify-content-between pt-2 pb-2 heading-border-bottom">
                <h2>Client Area 
                <button data-url="client_area/addClientAreaModal" type="button" class="btn ml-2 btn-info btn-pill loadModal">
                Add New <i class="mdi mdi-plus-outline font-size-20"></i>
              </button>

                  <!-- <button data-url="client_area/addClientAreaModal" type="button" class="mb-1 btn btn-twitter rounded-circle loadModal"><span class="mdi mdi-plus-outline"></span></button> -->
                </h2>
              
              </div>
              <div class="card-body pt-0 pb-5">
                <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                  <thead>
                    <tr>
                      <th>Sr. No.</th>
                      <th>Name</th>
                      <th>Desc</th>
                      <th>Image</th>
                      <!-- <th class="d-none d-md-table-cell">Stock Quantity</th>
                      <th class="d-none d-md-table-cell">codeNo</th> -->
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($client_area_details as $key => $client_area_detail) { ?>
                    <tr class="card-header-top">
                      <td ><?php echo ($key + 1);?></td>
                      <td ><?php echo $client_area_detail['name'];?></td>
                      <td><?php echo ($client_area_detail['desc']) ? $client_area_detail['desc'] : "-";?></td>
                      <td>
                        <div class="media-image align-self-center mr-3 rounded">
                          <img src="<?php echo base_url().$client_area_detail['imgPath'];?>" class="img-thumbnail"/>
                        </div>
                      </td>
                      <td class="text-right">
                        <div class="dropdown show d-inline-block widget-dropdown">
                          <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                            <li class="dropdown-item">
                              <a data-url="client_area/addClientAreaModal" data-id="<?php echo $client_area_detail['id'];?>" class="editBtn btn">Edit</a>
                            </li>
                            <li class="dropdown-item">
                              <a data-url="client_area/deleteClientArea" data-id="<?php echo $client_area_detail['id'];?>" data-img-path="<?php echo $client_area_detail['imgPath'];?>" class="btn removeBtn">Remove</a>
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