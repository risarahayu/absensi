@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white" style="background-color: #FDD72A;">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>

                                @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat_user" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="alamat_user" type="text" class="form-control @error('alamat_user') is-invalid @enderror" name="alamat_user" value="{{ old('alamat_user') }}" required autocomplete="alamat_user" autofocus>

                                @error('alamat_user')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!--  -->
                        <!-- tambah kolom -->
                        <div class="form-group row">
                            <label for="status_user" class="col-md-4 col-form-label text-md-right">{{ __('Status User') }}</label>

                            <div class="col-md-6">


                                <select id="status_user" class="form-control @error('status') is-invalid @enderror" name="status_user" value="{{ old('status_user') }}" required>
                                    <option selected>guru</option>
                                </select>



                                @error('status_user')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!--  -->
                        <!-- tambha -->
                        <div class="form-group row">
                            <label for="nomor_Hp" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Hp') }}</label>

                            <div class="col-md-6">
                                <input id="nomor_Hp" type="text" class="form-control @error('nomor_Hp') is-invalid @enderror" name="nomor_Hp" value="{{ old('nomor_Hp') }}" required autocomplete="nomor_Hp" autofocus>

                                @error('nomor_Hp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!--  -->
                        <!-- tambha -->
                        <div class="form-group row">
                            <label for="mapel" class="col-md-4 col-form-label text-md-right">{{ __('mapel') }}</label>

                            <div class="col-md-6">
                                <input id="mapel" type="text" class="form-control @error('mapel') is-invalid @enderror" name="mapel" value="{{ old('mapel') }}" required autocomplete="mapel" autofocus>

                                @error('mapel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!--  -->
                        <!-- tambha -->
                        <div class="form-group row">
                            <label for="nomor_rekening" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Rekening') }}</label>

                            <div class="col-md-6">
                                <input id="nomor_rekening" type="text" class="form-control @error('nomor_rekening') is-invalid @enderror" name="nomor_rekening" value="{{ old('nomor_rekening') }}" required autocomplete="nomor_rekening" autofocus>

                                @error('nomor_rekening')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_bank" class="col-md-4 col-form-label text-md-right">{{ __('Nama Bank') }}</label>

                            <div class="col-md-6">
                                <input id="nama_bank" type="text" class="form-control @error('nama_bank') is-invalid @enderror" name="nama_bank" value="{{ old('nama_bank') }}" required autocomplete="nama_bank" autofocus>

                                @error('nama_bank')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="atas_nama" class="col-md-4 col-form-label text-md-right">{{ __('Atas  Nama') }}</label>

                            <div class="col-md-6">
                                <input id="atas_nama" type="text" class="form-control @error('atas_nama') is-invalid @enderror" name="atas_nama" value="{{ old('atas_nama') }}" required autocomplete="atas_nama" autofocus>

                                @error('atas_nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!--  -->
                        <!-- tambah -->
                        <div class="form-group row">

                            <label for="foto_guru" class="col-md-4 col-form-label text-md-right">Masukan Foto</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control-file" id="foto_guru" name="foto_guru" value="{{ old('foto_guru') }}">
                                @error('foto_guru')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                        <!--  -->
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn rounded-pill text-white" style="background-color: #FDD72A;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection