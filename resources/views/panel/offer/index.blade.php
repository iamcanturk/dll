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
								  <h4 class="card-title">Teklif Listesi</h4>
								  <a href="{{route('offer.create')}}" class="btn btn-primary me-3 mt-2 mt-sm-0"><i
                                          class="feather feather-user-plus"></i> Teklif Al</a>
							 </div>
							 <div class="card-body">
								 <div class="table-responsive ticket-table ">
									<table id="example" class="display dataTablesCard table-responsive-xl"
                                           style="min-width: 845px">
										<thead>
											<tr>
												<th>Teklif Adı</th>
												<th>Hizmet Türü</th>
                                                <th>Durum</th>
                                                <th>Detay</th>
											</tr>
										</thead>
										<tbody>

                                         @foreach($offers as $offer)

                                             <tr>
												<td>
                                                    {{$offer->name}}

												</td>
												<td>
                                                    @if($offer->service_type == "domain")
                                                        Domain
                                                    @elseif($offer->service_type == "server")
                                                        Sunucu
                                                    @elseif($offer->hosting_type == "location")
                                                        Barındırma
                                                    @elseif($offer->hosting_type == "other")
                                                        Diğer
                                                    @endif
                                                </td>
												<td>
                                                    @if($offer->status == "active")
                                                        <span class="badge badge-success">Aktif</span>
                                                    @elseif($offer->status == "passive")
                                                        <span class="badge badge-danger">Pasif</span>
                                                    @elseif($offer->status == "waiting_payment")
                                                        <span class="badge badge-warning">Ödeme Bekliyor</span>
                                                    @endif
												</td>
                                                <td>
                                                    <a href="{{route('offer.show', $offer->id)}}" class="btn btn-primary btn-sm">Detay</a>
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
