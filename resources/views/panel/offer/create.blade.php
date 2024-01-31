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
								<h4 class="card-title">Teklif Bilgileri</h4>
                                <a href="/panel/offer/" class="btn btn-primary btn-sm">Geri Dön</a>
							</div>
                            <form action="{{route('offer.store')}}" method="POST">
                                @csrf
                                @method('POST')
                                <div class="profile-form card-body">
									<div class="row">
										<div class="col-sm-6 m-b30">
											<label class="form-label">Teklif Adı</label>
											<input type="text" name="name"
                                                   class="form-control @error('name') is-invalid @enderror">
                                            @error('name')
                                            <div class="invalid-feedback" style="display: block">
															{{ $message }}
                                            </div>
                                            @enderror
										</div>
										<div class="col-sm-6 m-b30">
											<label class="form-label">Hizmet Türü</label>
                                            <select name="service_type" class="form-control @error('service_type') is-invalid @enderror" required>
                                                <option value="">Seçiniz</option>
                                                <option value="domain">Domain</option>
                                                <option value="server">Sunucu</option>
                                                <option value="location">Barındırma</option>
                                                <option value="other">Diğer</option>
                                            </select>
                                            @error('service_type')
                                            <div class="invalid-feedback" style="display: block">
                                                            {{ $message }}
                                            </div>
                                            @enderror

										</div>


										<div class="col-sm-12 m-b30">
											<label class="form-label">Teklif Detayı</label>

                                            <textarea name="details" class="form-control @error('details') is-invalid @enderror" rows="5"></textarea>
                                            @error('details')
                                            <div class="invalid-feedback" style="display: block">
															{{ $message }}
                                            </div>
                                            @enderror
										</div>
									</div>
								</div>
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">Teklif Al</button>
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
