@extends('layouts.main')
@section('container')

{{-- <div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-signin w-100 m-auto">
            <form action="/login" method="post">
                @csrf
                <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>

                @if (session()-> has('errorLogin'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('errorLogin')}}
                </div>
                @endif

                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="floatingInput"
                        placeholder="name@example.com" autofocus>
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword"
                        placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary " type="submit">Sign in</button>
                <!-- <p class="mt-5 mb-3 text-muted text-center">&copy; 2022</p> -->
            </form>
        </main>
    </div>
</div> --}}
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark bg-gradient text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">
                <form action="/login" method="post">
                    @csrf
                <h2 class="fw-bold mb-2 text-uppercase text-white">Please sign in</h2>
                <p class="text-white-50 mb-5">Please enter your login and password!</p>

                @if (session()-> has('errorLogin'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('errorLogin')}}
                </div>
                @endif
                <div class="form-outline form-white mb-4">
                    {{-- <label for="floatingInput">Email address</label> --}}
                  <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" autofocus/>
                </div>

               <div class="form-outline form-white mb-4">
                {{-- <label for="floatingPassword">Password</label>s --}}
                  <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" />
                </div>
                <button class="w-100 btn btn-lg btn-primary " type="submit">Sign in</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
