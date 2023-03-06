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

        <form action="{{ route('blog.update', $blogeditdata->id) }}" style="width: 50%" method="POST">
            @csrf
            @method('PUT')
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter name" value="{{ $blogeditdata->name }}" name="name"
                id="name">

            <label for="Description"><b>Description</b></label>
            <input type="text" placeholder="Enter Description" value="{{ $blogeditdata->description }}"
                name="description" id="email">

            {{-- <label for="cars">Select Category:</label>
            <select name="category" id="email">
                @foreach ($categoryids as $categoryid)
                    <option value="{{ $categoryid->id }}">{{ $categoryid->name }}</option>
                @endforeach
            </select> --}}

            <label for="category">Select Category:</label><br>
            <select name="category" id="language">
                @foreach ($categoryids as $categoryid)
                    <option value="{{ $categoryid->id }}">{{ $categoryid->name }}</option>
                @endforeach
            </select>
            <br>
            <button type="submit" class="registerbtn">Update</button>
    </div>
    </form>
</div>
</div>

@include('footer')
