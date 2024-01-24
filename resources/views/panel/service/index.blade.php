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


        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
                <div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header flex-wrap">
								  <h4 class="card-title">Hizmet Listesi</h4>
								  <a href="add-customers.html" class="btn btn-primary me-3 mt-2 mt-sm-0"><i
                                          class="feather feather-user-plus"></i> Teklif Al</a>
							 </div>
							 <div class="card-body">
								 <div class="table-responsive ticket-table ">
									<table id="example" class="display dataTablesCard table-responsive-xl"
                                           style="min-width: 845px">
										<thead>
											<tr>
												<th>Ürün Adı</th>
												<th>Disk</th>
                                                <th>Ram</th>
                                                <th>CPU</th>
                                                <th>Port</th>
                                                <th>Fiyat (KDV Hariç)</th>
                                                <th>Yenileme Tarihi</th>
                                                <th>Status</th>
                                                <th>İşlemler</th>
											</tr>
										</thead>
										<tbody>

                                         @foreach($services as $service)

											<tr>
												<td>
a
												</td>
												<td>Male</td>
												<td>Customer</td>
												<td>
													<span class="badge light badge-success">15 Mar, 2015</span>
												</td>
												<td>
													<span class="badge light  badge-danger">17 Mar, 2018</span>
												</td>
												<td>
													<span class="badge badge-success">Active</span>
												</td>

												<td>
													<div class="d-flex">
														<a href="javascript:void(0);"
                                                           class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                                class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);"
                                                           class="btn btn-danger shadow btn-xs sharp"><i
                                                                class="fa fa-trash"></i></a>
													</div>
												</td>
											</tr>

                                            @endforeach


										</tbody>

									</table>
								</div>
							</div>
						</div>
                    </div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


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
