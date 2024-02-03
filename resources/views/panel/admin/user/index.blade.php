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
								  <h4 class="card-title">Kullanıcı Listesi</h4>
								  <a href="{{route('user.create')}}" class="btn btn-primary me-3 mt-2 mt-sm-0"><i
                                          class="feather feather-user-plus"></i> Kullanıcı Oluştur</a>
							 </div>
							 <div class="card-body">
								 <div class="table-responsive ticket-table ">
									<table id="example" class="display dataTablesCard table-responsive-xl"
                                           style="min-width: 845px">
										<thead>
											<tr>
												<th>Kullanıcı Adı Soyadı</th>
												<th>Mail</th>
                                                <th>Kayıt Tarihi</th>
                                                <th>Yetki</th>
                                                <th>İşlemler</th>
											</tr>
										</thead>
										<tbody>

                                         @foreach($users as $user)

                                             <tr>
												<td>
                                                    {{$user->name}} {{$user->surname}}

												</td>
												<td>
                                                    {{$user->email}}
                                                </td>
                                                 <td>{{\Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i:s')}}</td>

												<td>
                                                    @if($user->role == "admin")
                                                        <span class="badge badge-success">Yönetici</span>
                                                    @elseif($user->role == "user")
                                                        <span class="badge badge-danger">Kullanıcı</span>
                                                    @endif
												</td>
                                                <td>
                                                    <a href="{{route('user.edit', $user->id)}}" class="btn btn-primary btn-sm">Düzenle</a>
                                                    <form action="{{route('user.destroy', $user->id)}}" method="POST" class="btn" style="padding: 0">
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
