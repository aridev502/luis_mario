@extends('layouts.admin')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">


            <div class="card">
                <div class="card-header">{{ __('Add New User') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.users.store') }}" enctype="multipart/form-data">
                        @csrf


                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <div class="form-group">
                            <label for="role_id" class="required">{{ __('Role') }}</label>


                            <select id="role_id" type="text"
                                class="form-control @error('role_id') is-invalid @enderror" name="role_id" required
                                autocomplete="role_id" autofocus>
                                <option value="" selected hidden>Please Select</option>

                                @foreach ($roles as $id => $role)
                                    <option value="{{ $id }}" {{ old('role_id', '') == $id ? 'selected' : '' }}>
                                        {{ $role }}</option>
                                @endforeach
                            </select>

                            @error('role_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="name" class="required">{{ __('Name') }}</label>


                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="email" class="required">{{ __('E-Mail Address') }}</label>


                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="password" class="required">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="required">{{ __('Confirm Password') }}</label>


                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password">

                        </div>

                        <div class="form-group">
                            <label for="direccion">DIRECCION</label>
                            <input type="text" class="form-control" name="direccion" id="direccion"
                                aria-describedby="helpId" placeholder="Direccion del usuario">
                        </div>

                        <div class="form-group">
                            <label for="Telefono">Telefono</label>
                            <input type="text" class="form-control" name="telefono" id="Telefono"
                                aria-describedby="helpId" placeholder="Telefono">
                        </div>


                        <div class="form-group">
                            <label for="ciudad">Ciudad</label>
                            <input type="text" class="form-control" name="ciudad" id="ciudad"
                                aria-describedby="helpId" placeholder="Ciudad del usuario">
                        </div>

                        <div class="form-group">
                            <label for="dpi">DPI</label>
                            <input type="text" class="form-control" name="dpi" id="dpi"
                                aria-describedby="helpId" placeholder="DPI del usuario">
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>


        </div>
    </div>
@endsection
