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
								  <h4 class="card-title">Domain Listesi</h4>
								  <a href="add-customers.html" class="btn btn-primary me-3 mt-2 mt-sm-0"><i
                                          class="feather feather-user-plus"></i> Domain Al</a>
							 </div>
							 <div class="card-body">
								 <div class="table-responsive ticket-table ">
									<table id="example" class="display dataTablesCard table-responsive-xl"
                                           style="min-width: 845px">
										<thead>
											<tr>
												<th>Ürün Adı</th>
												<th>Domain</th>
                                                <th>DNS 1</th>
                                                <th>DNS 2</th>
                                                <th>Fiyat (KDV Hariç)</th>
                                                <th>Yenileme Tarihi</th>
                                                <th>Durum</th>
											</tr>
										</thead>
										<tbody>

                                         @foreach($domains as $domain)

                                             <tr>
												<td>
                                                    {{$domain->name}}

												</td>
												<td>
                                                    {{$domain->url}}
                                                </td>
												<td>
                                                    {{
                                                    explode(",", $domain->dns)[0]
                                                    }}
                                                </td>

                                                <td>
                                                    {{
                                                    explode(",", $domain->dns)[1]
                                                    }}
                                                </td>
                                                <td>
                                                    {{
                                                   number_format($domain->price, 2, ',', '.') }}
                                                    @if($domain->price_currency == "TRY")
                                                        ₺
                                                    @elseif($domain->price_currency == "USD")
                                                        $
                                                    @elseif($domain->price_currency == "EUR")
                                                        €
                                                    @endif
                                                </td>
												<td>{{\Carbon\Carbon::parse($domain->expired_date)->format('d/m/Y H:i:s')}}</td>

												<td>
                                                    @if($domain->status == "active")
                                                        <span class="badge badge-success">Aktif</span>
                                                    @elseif($domain->status == "passive")
                                                        <span class="badge badge-danger">Pasif</span>
                                                    @elseif($domain->status == "waiting_payment")
                                                        <span class="badge badge-warning">Ödeme Bekliyor</span>
                                                    @endif
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
