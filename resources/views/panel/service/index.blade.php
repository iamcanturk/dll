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
                                                <th>Kullanıcı</th>
												<th>Ürün Adı</th>
												<th>Disk</th>
                                                <th>Ram</th>
                                                <th>CPU</th>
                                                <th>Port</th>
                                                <th>Fiyat (KDV Hariç)</th>
                                                <th>Yenileme Tarihi</th>
                                                <th>Durum</th>
                                                <th>İşlemler</th>
											</tr>
										</thead>
										<tbody>

                                         @foreach($services as $service)

                                             <tr>
                                                 <td>
                                                     {{$service->user_name}} {{$service->surname}}
                                                 </td>
												<td>
                                                    {{$service->name}}

												</td>
												<td>
                                                    {{$service->disk}}
                                                </td>
												<td>
                                                    {{$service->ram}}
                                                </td>
                                                <td>
                                                    {{$service->cpu}}
                                                </td>
                                                <td>
                                                    {{$service->port}}
                                                </td>
                                                <td>
                                                    {{
                                                   number_format($service->price, 2, ',', '.') }}
                                                    @if($service->price_currency == "TRY")
                                                        ₺
                                                    @elseif($service->price_currency == "USD")
                                                        $
                                                    @elseif($service->price_currency == "EUR")
                                                        €
                                                    @endif
                                                </td>
												<td>{{\Carbon\Carbon::parse($service->expired_date)->format('d/m/Y H:i:s')}}</td>

												<td>
                                                    @if($service->status == "active")
                                                        <span class="badge badge-success">Aktif</span>
                                                    @elseif($service->status == "passive")
                                                        <span class="badge badge-danger">Pasif</span>
                                                    @elseif($service->status == "waiting_payment")
                                                        <span class="badge badge-warning">Ödeme Bekliyor</span>
                                                    @endif
												</td>
                                                                                                 <td>
                                                    <div class="d-flex">
                                                         <a href="{{route('all-services.edit', $service->id)}}" class="btn btn-primary btn-sm">Düzenle</a>

                                                        <form action="{{route('all-services.destroy', $service->id)}}" method="POST" class="btn" style="padding: 0">
                                                        @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm">Sil</button>
                                                    </form>
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
