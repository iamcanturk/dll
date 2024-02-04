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
												<th>Müşteri Adı</th>
												<th>Ürün Adı</th>
                                                <th>U</th>
                                                <th>İnternet</th>
                                                <th>Uplink</th>
                                                <th>IP</th>
                                                <th>Anti DDOS</th>
                                                <th>Fiyat (KDV Hariç)</th>
                                                <th>Yenileme Tarihi</th>
                                                <th>Durum</th>
                                                <th>İşlemler</th>
											</tr>
										</thead>
										<tbody>

                                         @foreach($cabinets as $cabinet)

                                             <tr>
												<td>
                                                    {{$cabinet->user_name}} {{$cabinet->surname}}
												</td>
												<td>
                                                    {{$cabinet->name}}
                                                </td>
												<td>
                                                    {{$cabinet->u_size}}
                                                </td>
                                                <td>
                                                    {{$cabinet->internet}}
                                                </td>
                                                <td>
                                                    {{$cabinet->uplink}}
                                                </td>
                                                  <td>
                                                    {{$cabinet->ip}}
                                                </td>
                                                  <td>
                                                    {{$cabinet->anti_ddos == "yes" ? "Var" : "Yok"}}
                                                </td>
                                                <td>
                                                    {{
                                                   number_format($cabinet->price, 2, ',', '.') }}
                                                    @if($cabinet->price_currency == "TRY")
                                                        ₺
                                                    @elseif($cabinet->price_currency == "USD")
                                                        $
                                                    @elseif($cabinet->price_currency == "EUR")
                                                        €
                                                    @endif
                                                </td>
												<td>{{\Carbon\Carbon::parse($cabinet->expired_date)->format('d/m/Y H:i:s')}}</td>

												<td>
                                                    @if($cabinet->status == "active")
                                                        <span class="badge badge-success">Aktif</span>
                                                    @elseif($cabinet->status == "passive")
                                                        <span class="badge badge-danger">Pasif</span>
                                                    @elseif($cabinet->status == "waiting_payment")
                                                        <span class="badge badge-warning">Ödeme Bekliyor</span>
                                                    @endif
												</td>
                                                 <td>
                                                    <a href="{{route('cabinet.edit', $cabinet->id)}}" class="btn btn-primary btn-sm">Düzenle</a>
                                                     <form action="{{route('all-cabinets.destroy', $cabinet->id)}}" method="post" class="btn" style="padding: 0px">
                                                         @csrf
                                                         @method('DELETE')
                                                         <button type="submit" class="btn btn-danger btn-sm">Sil</button>
                                                        </form>
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
