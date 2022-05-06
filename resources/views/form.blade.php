
 @extends('layouts.master')


@section('pagetitle','koosharayan|formpage')



@section('title')
<h1>فرم ثبت نام </h1>
@endsection

@section('content')

@if ($errors->any())

<ul>
    @foreach ($errors->all() as $error )

    <li>{{$error}}</li>

    @endforeach
</ul>
@endif

 <form action="/user/form" method="POST">
   @csrf

<label for="name">Name:</label>
<input type="text"  name="username" id="username" class="form-control">
<label for="family">Family:</label>
<input type="text"   name="family" id="family" class="form-control">
<label for="phone">Phone:</label>
<input type="text"  name="phone" id="phone"  class="form-control">
<label for="email">Email:</label>
<input type="email" name="email" id="email"  class="form-control">
<label for="address">Address:</label>
<input type="text"   name="address" id="address" class="form-control">
<button type="submit" class="btn btn-primary mb-2">submit</button>


</form>



@endsection


