@extends('layouts.master')
<!-- sidebar -->
@section('content') 
  

  <div class="container margin-top-20">
    
      <div class="row">
         
        <div class="col-md-12" style="background-color: #e0e0e0;">
        	<div class="widget">
        		<h3 class="text-center m-3">All Product</h3>
        		<div class="row">
        			@foreach ($products as $product)
        			<div class="card ml-5 text-center mb-5" style="width: 20rem; margin: 0 auto;">
        				@php
        				$i=1;
        				@endphp
        				@foreach ($product->images as $image)
        				@if ($i>0)
        				<img src="{{asset('images/product/'.$image->image)}}" class="card-img-top" alt="..." style="width:100%">
        				@endif
        				@php  $i--  @endphp
        				@endforeach
        				<div class="card-body">
        					<h5 class="card-title"> <h3>{{$product->name}}</h1></h3>
        					<p class="card-text">{{$product->title}}</p>
        					<a href="{!! route('product.show', $product->slug) !!}" class="btn btn-info text-light btn-lg">Details</a>
        				</div>
        			</div>
					@endforeach
        		</div>
        		

        	</div>
          </div>
        </div>
      </div>
  </div> <!-- //end container -->



@endsection

