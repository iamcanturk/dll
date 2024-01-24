<!DOCTYPE html>
<html lang="en">

<head>
    @include('panel.inc.head')
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    @include('panel.inc.preloader')
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">


        @include('panel.inc.header')
        <!--**********************************
            EventList
        ***********************************-->



        <div class="content-body">
            <div class="container-fluid">
                <!-- row -->
				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="card  card-bx m-b30">
							<div class="card-header">
								<h4 class="card-title">Profil Bilgileri</h4>
							</div>
							<form class="profile-form">
								<div class="card-body">
									<div class="row">
										<div class="col-sm-6 m-b30">
											<label class="form-label">İsim</label>
											<input type="text" class="form-control" value="John">
										</div>
										<div class="col-sm-6 m-b30">
											<label class="form-label">Soyisim</label>
											<input type="text" class="form-control">
										</div>
										<div class="col-sm-12 m-b30">
											<label class="form-label">Firma Unvanı</label>
											<input type="text" class="form-control" value="Developer">
										</div>

										<div class="col-sm-6 m-b30">
											<div class="example">
												<label class="form-label">Vergi Dairesi</label>
												<input class="form-control " type="text" name="daterange" placeholder="2017-06-04" id="mdate">
											</div>
										</div>
										<div class="col-sm-6 m-b30">
											<label class="form-label">Vergi Numarası</label>
											<input type="text" class="form-control" value="+123456789">
										</div>
										<div class="col-sm-6 m-b30">
											<label class="form-label">Email</label>
											<input type="text" class="form-control" value="demo@gmail.com">
										</div>
                                        <div class="col-sm-6 m-b30">
											<label class="form-label">Telefon</label>
											<input type="text" class="form-control" value="demo@gmail.com">
										</div>
									</div>
								</div>

							</form>
						</div>
					</div>
				</div>
            </div>
        </div>

        <!--**********************************
            Footer start
        ***********************************-->
        @include('panel.inc.footer')
        <!--**********************************
            Footer end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    @include('panel.inc.scripts')



</body>
</html>
