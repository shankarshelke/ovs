 <!-- Start Breadcrumbbar -->
 <div class="breadcrumbbar">
     <div class="row align-items-center">
         <div class="col-md-8 col-lg-8">
             <h4 class="page-title">Product List</h4>
             <div class="breadcrumb-list">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                     <li class="breadcrumb-item"><a href="#">eCommerce</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Product List</li>
                 </ol>
             </div>
         </div>
         <div class="col-md-4 col-lg-4">
             <div class="widgetbar">
                 <button class="btn btn-primary-rgba loadPage" data-url="/products/details"><i class="feather icon-plus mr-2"></i>Add new products</button>
             </div>
         </div>
     </div>
 </div>
 <!-- End Breadcrumbbar -->
 <!-- Start Contentbar -->
 <div class="contentbar">
     <!-- Start row -->
     <div class="row">
<div class="col-12">
	<div class="bg-white border rounded">
		<div class="row no-gutters">
			<div class="col-lg-4 col-xl-3">
				<div class="profile-content-left pt-5 pb-3 px-3 text-center">
					<div class="card text-center widget-profile px-0 border-0">
						<div class="card-img mx-auto rounded-circle">
							<img src="assets/admin/img/user/user.png" id="profile-photo" class="profileImg card-img" alt="user image">
						</div>
						<div class="text-right">
							<button data-toggle="modal" class="openModal" data-url="file_upload/" data-target="#file-upload-modal">
								<i class="mdi mdi-border-color"></i>
							</button>
						</div>
						<div class="mt-4">
							<h4 class="py-2 text-dark"></h4>
							<p></p>
							<!-- <a class="btn btn-primary btn-pill btn-lg my-4" href="#">Follow</a> -->
						</div>

					</div>
					<!-- 		<div class="d-flex justify-content-between ">
							<div class="text-center pb-4">
								<h6 class="text-dark pb-2">1503</h6>
								<p>Friends</p>
							</div>
							<div class="text-center pb-4">
								<h6 class="text-dark pb-2">2905</h6>
								<p>Followers</p>
							</div>
							<div class="text-center pb-4">
								<h6 class="text-dark pb-2">1200</h6>
								<p>Following</p>
							</div>
						</div> -->
					<hr class="w-100">
					<div class="contact-info">

						<button type="button" class="mb-1 btn btn-outline btn-facebook rounded-circle">
							<i class="mdi mdi-facebook"></i>
						</button>
						<button type="button" class="mb-1 btn btn-outline btn-twitter rounded-circle">
							<i class="mdi mdi-twitter"></i>
						</button>
						<button type="button" class="mb-1 btn btn-outline btn-pinterest rounded-circle">
							<i class="mdi mdi-pinterest"></i>
						</button>
						<button type="button" class="mb-1 btn btn-outline btn-linkedin rounded-circle">
							<i class="mdi mdi-linkedin"></i>
						</button>

					</div>
				</div>
			</div>
			<div class="col-lg-8 col-xl-9">
				<div class="profile-content-right py-5">
					<ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
						<!-- <li class="nav-item">
								<a class="nav-link active" id="unique-profile-tab" data-toggle="tab" href="#unique-profile" role="tab" aria-controls="unique-profile" aria-selected="false">Profile</a>
							</li> -->
						<li class="nav-item">
							<a class="nav-link" id="unique-profile-tab" data-toggle="tab" href="#unique-profile" role="tab" aria-controls="unique-profile" aria-selected="true">Profile</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="personal-profile-tab" data-toggle="tab" href="#personal-profile" role="tab" aria-controls="personal-profile" aria-selected="false">Social Media</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
						</li>
					</ul>
					<div class="tab-content px-3" id="myTabContent">

						<div class="tab-pane fade show active" id="unique-profile" role="tabpanel" aria-labelledby="unique-profile-tab">
							<?php echo $userUniqueProfileHtml; ?>
						</div>
						<div class="tab-pane fade show" id="personal-profile" role="tabpanel" aria-labelledby="personal-profile-tab">
							<?php echo $userPersonalProfileHtml; ?>
						</div>
						<!-- <div class="tab-pane fade" id="social-profile" role="tabpanel" aria-labelledby="timeline-tab">
							< ?php echo $socialProfileFormHtml; ?>
						</div> -->
						<div class="tab-pane fade show" id="settings" role="tabpanel" aria-labelledby="settings-tab">...</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	</div>
</div>