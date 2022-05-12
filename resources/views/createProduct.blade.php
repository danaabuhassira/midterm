@extends('layout.app')
@section('content')
        <div class="btn-toolbar mb-2 mb-md-0">

            <div class="card-body">
                <form method="" action="#" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="name">Product Name:</label>
                      <input type="text" class="form-control" name="product_name" />
                    </div>
                    <div class="form-group">
                      <label for="price">Product Category :</label>
                      <select class="form-control" id="exampleFormControlSelect1">
                        <option>Category 1</option>
                        <option>Category 2</option>
                        <option>Category 3</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price :</label>
                        <input type="text" class="form-control" name="product_price" />
                    </div>
                    <div class="form-group">
                        <label for="quantity">Product Quantity:</label>
                        <input type="text" class="form-control" name="product_qty" />
                    </div>


                    <button type="submit" class="btn btn-primary"href="{{url('allProduct')}}">Add</button>
                </form>
            </div>
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
