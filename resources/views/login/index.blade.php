@extends('template')
@section('contents')
<style>
    .btn-submit {
        background-color: #01796f;
        border-color: #01796f;
        color: white;
        padding: 7px 15px;
        border-radius: 5px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: #016a60;
    }
</style>
{{-- <div class="form-signin w-100 m-auto"> --}}
    <div class="page-heading">
        <div class="container ">
            <div class="login">
            <div class="row justify-content-center">
                <div class="col-lg-6 bg-light rounded-3">
                    @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
                    @endif
                    @if (session()->has('LoginError'))
                    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                        {{ session('LoginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
                    @endif
                    <main class="form-signin w-100 m-auto">
                        <form action="/login" method="post">
                            @csrf
                          <h1 class="h3 mb-3 fw-normal">LOGIN</h1>
                          <div class="form-floating">
                            <input type="email" name="email" class="form-control @error('email')
                                is-invalid
                            @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                          </div>


                          <button class="btn-submit w-100 py-2" type="submit">login</button>

                        </form>
                        <small>Not Registered?</small>
                      </main>
                </div>
            </div>
        </div>
        </div>
    </div>

{{-- </div> --}}
@endsection
