@include('header')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><b>{{ __('label.login') }}</b></h2>
                <hr>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('loginsuccess') }}" style="width: 50%" method="POST">
            @csrf

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" >
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <br>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="psw" >
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <br>
            <button type="submit" class="registerbtn">Login</button>
    </div>

    <div style="width: 50%; float:left; margin-top:22px;">
        <p style="float:left;">Already have an account? <a href="{{ route('registrationform') }}">Sign Up</a>.</p>
    </div>
    </form>


    @include('footer')
