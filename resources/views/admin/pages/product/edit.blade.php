@extends('admin.layouts.master')

@section('content')

<div class="main-panel">
       <div class="content-wrapper">
         <div class="card">
          <div class="card-header">
            Add Product
            <div class="card-body">
             <form action="{{ route('admin.product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="exampleFormControlInput1">Name</label>
                  <input type="text" name="name" class="form-control" value="{{$product->name}}">
                </div>
                
                <div class="form-group">
                  <label for="exampleFormControlInput1">Title</label>
                  <input type="text" name="title" class="form-control" value="{{$product->title}}">
                </div>
                 <div class="form-group">
                  <label for="exampleFormControlTextarea1">Details One</label>
                  <textarea class="form-control" name="details_one"  rows="3">{{$product->details_one}}</textarea>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Details Two</label>
                  <textarea class="form-control" name="details_two"  rows="3">{{$product->details_two}}</textarea>
                </div>
                 <div class="form-group">
                  <label for="exampleFormControlInput1">Price</label>
                  <input type="number" name="price" class="form-control"  value="{{$product->price}}">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Quantity</label>
                  <input type="number" name="quantity" class="form-control" value="{{$product->quantity}}">
                </div>
                 <div class="row">
                  <div class="col-md-4 form-group">
                  <input type="file" name="image[]" class="form-control">
                </div>
               <div class="col-md-4">
                  <input type="file" name="image[]" class="form-control">
                </div>
                <div class="col-md-4">
                  <input type="file" name="image[]" class="form-control">
                </div>
                <div class="col-md-4">
                  <input type="file" name="image[]" class="form-control">
                </div>
                <div class="col-md-4">
                  <input type="file" name="image[]" class="form-control">
                </div>
              </div>
            
              {{--   <div class="form-group">
                  <label for="exampleFormControlSelect2">Example multiple select</label>
                  <select multiple class="form-control" id="exampleFormControlSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div> --}}
               
                <button type="submit" class="btn btn-success btn-lg">Update Product</button>
                
            
                </form>
              </div>
          </div>
           
         </div>
       </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- partial -->
      </div>
      <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
 <script>tinymce.init({selector:'textarea',height: 250,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste code help wordcount'
  ],
  toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tiny.cloud/css/codepen.min.css'
  ]
  });</script>

@endsection
