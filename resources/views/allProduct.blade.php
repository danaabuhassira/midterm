@extends('layout.app')
@section('content')

        <div class="btn-toolbar mb-2 mb-md-0">
            <table class="table table-bordered">
              <tbody>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th width="280px">Actions</th>
                  </tr>

                @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{product->price}}</td>
                    <td>{{product->quality}}</td>
                    <td>
                        <td>
                            <form action="/edit/{{$product->id}}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-trash"></i>Edit
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="/task/destroy/{{$product->id}}" method="POST">
                                @csrf
                                @method('Delete')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-btn fa-trash"></i>Delete
                                </button>
                            </form>
                        </td>
                    </td>
                </tr>
                @endforeach


              </tbody>
            </table>
        </div>
    </main>
  </div>
</div>

<script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/jquery-3.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/bootstrap.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/feather.js"></script>
        <script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/Chart.js"></script>
        <script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/dashboard.js"></script>

</body></html>
@endsection
