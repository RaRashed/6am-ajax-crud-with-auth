<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product CRUD</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="container mt-2">

    <div class="row">

        <div class="col-md-12 card-header text-center font-weight-bold">
          <h2> User Product Management</h2>
        </div>
        <a class="btn btn-primary" href="{{ route('products.create') }}">Add new Product</a>
        <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Product Title</th>
                  <th scope="col">Category</th>
                  <th scope="col">description</th>
                  <th scope="col">price</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">



                            <a class="btn btn-info" href="{{ route('products.show',$product->id) }}"><i class="fa fa-eye"></i></a>



                            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}"><i class="fa fa-edit"></i></a>



                            @csrf

                            @method('DELETE')



                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>

                        </form>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>

        </div>
    </div>
</div>

</body>
</html>
