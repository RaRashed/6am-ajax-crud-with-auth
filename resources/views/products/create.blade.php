<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Crud</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container mt-2">

    <div class="row">

        <div class="col-md-12 card-header text-center font-weight-bold">
          <h2>Create Product</h2>
        </div>
        <div class="col-md-12">


@if ($errors->any())

<div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.<br><br>

    <ul>

        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif



<form action="{{ route('products.store') }}" method="POST">

@csrf


    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Name:</strong>

            <input type="text" name="name" class="form-control" placeholder="Name">

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Category</strong>
<select class="form-control" name="category_id" id="">
    @foreach ($categories as $category )
    <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach

</select>

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Description</strong>

            <textarea class="form-control" style="height:100px" name="description" placeholder="Description"></textarea>

        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">

        <strong>Price</strong>

        <input type="number" name="price" class="form-control" placeholder="Price">

    </div>
    </div>



    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

            <button type="submit" class="btn btn-primary">Submit</button>

    </div>





</form>


        </div>
    </div>
</div>

</body>
</html>








