@include('header')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><b>Update </b></h2>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('user.update', $usereditdata->id) }}" style="width: 50%" method="POST">
            @csrf
            @method('PUT')
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter name" value="{{ $usereditdata->name }}" name="name" id="name">

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" value="{{ $usereditdata->email }}" name="email" id="email">

            <label for="Phone"><b>Phone</b></label>
            <input type="text" placeholder="Enter Phone" value="{{ $usereditdata->phone }}" name="phone" id="email">

            <button type="submit" class="registerbtn">Update</button>
    </div>
    </form>
</div>
</div>

@include('footer')
