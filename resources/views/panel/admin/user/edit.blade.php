<!DOCTYPE html>
<html lang="en">

<head>
    @include('panel.inc.head')
</head>
<body>

    <!-- Preloader start -->
    @include('panel.inc.preloader')
    <!-- Preloader end -->

    <!-- Main wrapper start -->
    <div id="main-wrapper">

        @include('panel.inc.header')

        <div class="content-body">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card card-bx m-b30">
                            <div class="card-header">
                                <h4 class="card-title">Kullanıcı Düzenle</h4>
                                <a href="/panel/user/" class="btn btn-primary btn-sm">Geri Dön</a>
                            </div>
                            <form action="{{ route('user.update', $user->id) }}" method="POST">
                                @csrf
                                @method('PUT') <!-- Formun güncelleme işlemi için olduğunu belirtir -->

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="profile-form card-body">
                                    <div class="row">
                                        <div class="col-sm-6 m-b30">
                                            <label class="form-label">Kullanıcı Adı</label>
                                            <input type="text" name="name" value="{{ $user->name }}"
                                                   class="form-control @error('name') is-invalid @enderror">
                                            @error('name')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                            <div class="col-sm-6 m-b30">
                                            <label class="form-label">Kullanıcı Soyadı</label>
                                            <input type="text" name="surname" value="{{ $user->surname }}"
                                                   class="form-control @error('surname') is-invalid @enderror">
                                                @error('surname')
                                                <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                                @enderror
                                        </div>


                                        <div class="col-sm-6 m-b30">
                                            <label class="form-label">Kullanıcı Email</label>
                                            <input type="email" name="email" value="{{ $user->email }}"
                                                   class="form-control @error('email') is-invalid @enderror">
                                            @error('email')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                            <div class="col-sm-6 m-b30">
                                            <label class="form-label">Kullanıcı Telefon</label>
                                            <input type="text" name="phone" value="{{ $user->phone }}"
                                                   class="form-control @error('phone') is-invalid @enderror">
                                                @error('phone')
                                                <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                                @enderror
                                        </div>

                                         <div class="col-sm-12 m-b30">
                                            <label class="form-label">Unvan</label>
                                            <input type="text" name="company" value="{{ $user->company }}"
                                                   class="form-control @error('company') is-invalid @enderror">
                                             @error('company')
                                             <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                             @enderror
                                        </div>


                                         <div class="col-sm-6 m-b30">
                                            <label class="form-label">Vergi Dairesi</label>
                                            <input type="text" name="tax_office" value="{{ $user->tax_office }}"
                                                   class="form-control @error('tax_office') is-invalid @enderror">
                                             @error('tax_office')
                                             <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                             @enderror
                                        </div>

                                         <div class="col-sm-6 m-b30">
                                            <label class="form-label">Vergi No</label>
                                            <input type="text" name="tax_number" value="{{ $user->tax_number }}"
                                                   class="form-control @error('tax_number') is-invalid @enderror">
                                             @error('tax_number')
                                             <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                             @enderror
                                        </div>





                                        <div class="col-sm-12 m-b30">
                                            <label class="form-label">Parola (Değiştirmek istemiyorsanız boş bırakın)</label>
                                            <input type="password" name="password"
                                                   class="form-control @error('password') is-invalid @enderror" placeholder="Yeni parola">
                                            @error('password')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">Kullanıcı Güncelle</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('panel.inc.footer')

    </div>
    <!-- Main wrapper end -->

    @include('panel.inc.scripts')

</body>
</html>
