@include('header')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><b>Registration </b></h2>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('user.store') }}" style="width: 50%" method="POST">
            @csrf
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter name" name="name" id="name">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <br>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <br>
            <label for="Phone"><b>Phone</b></label>
            <input type="text" placeholder="Enter Phone" name="phone" id="email">
            @error('phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <br>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="psw">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <br>
            <button type="submit" class="registerbtn">Register</button>
    </div>
    </form>
</div>
</div>

@include('footer')
