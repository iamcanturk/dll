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
                                <a href="/panel/profile/" class="btn btn-primary btn-sm">Geri Dön</a>
							</div>
                            <form action="{{route('profile.update',auth()->user()->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="profile-form card-body">
									<div class="row">
										<div class="col-sm-6 m-b30">
											<label class="form-label">İsim</label>
											<input type="text" name="name"
                                                   class="form-control @error('name') is-invalid @enderror"
                                                   value="{{auth()->user()->name}}">
                                            @error('name')
                                            <div class="invalid-feedback" style="display: block">
															{{ $message }}
                                            </div>
                                            @enderror
										</div>
										<div class="col-sm-6 m-b30">
											<label class="form-label">Soyisim</label>
											<input type="text" name="surname"
                                                   class="form-control @error('surname') is-invalid @enderror"
                                                   value="{{auth()->user()->surname}}">
                                            @error('surname')
                                            <div class="invalid-feedback" style="display: block">
                                                            {{ $message }}
                                            </div>
                                            @enderror

										</div>
										<div class="col-sm-12 m-b30">
											<label class="form-label">Firma Unvanı</label>
											<input type="text" name="company"
                                                   class="form-control @error('company') is-invalid @enderror"
                                                   value="{{auth()->user()->company}}">
                                            @error('company')
                                            <div class="invalid-feedback" style="display: block">
															{{ $message }}
                                            </div>
                                            @enderror
										</div>

										<div class="col-sm-6 m-b30">
											<div class="example">
												<label class="form-label">Vergi Dairesi</label>
												<input class="form-control  @error('tax_office') is-invalid @enderror "
                                                       type="text" name="tax_office"
                                                       value="{{auth()->user()->tax_office}}" id="mdate">
                                                @error('tax_office')
                                                <div class="invalid-feedback" style="display: block">
                                                            {{ $message }}
                                                    </div>
                                                @enderror
											</div>
										</div>
										<div class="col-sm-6 m-b30">
											<label class="form-label">Vergi Numarası</label>
											<input type="text"
                                                   class="form-control @error('tax_number') is-invalid @enderror"
                                                   name="tax_number"
                                                   value="{{auth()->user()->tax_number}}">
                                            @error('tax_number')
                                            <div class="invalid-feedback" style="display: block">
                                                            {{ $message }}
                                                    </div>
                                            @enderror
										</div>
										<div class="col-sm-6 m-b30">
											<label class="form-label">Email</label>
											<input type="text"
                                                   class="form-control @error('email') is-invalid @enderror "
                                                   name="email"
                                                   value="{{auth()->user()->email}}">
                                            @error('email')
                                            <div class="invalid-feedback" style="display: block">
                                                            {{ $message }}
                                                    </div>
                                            @enderror
										</div>
                                        <div class="col-sm-6 m-b30">
											<label class="form-label">Telefon</label>
											<input type="text" class="form-control @error('phone') is-invalid @enderror"
                                                   name="phone"
                                                   value="{{auth()->user()->phone}}">
                                            @error('phone')
                                            <div class="invalid-feedback" style="display: block">
                                                            {{ $message }}
                                                    </div>
                                            @enderror
										</div>
									</div>
								</div>
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">Kaydet</button>
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
