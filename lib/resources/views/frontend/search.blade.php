
@extends('frontend.master')
@section('title','Tìm kiếm sản phẩm')
@section('main')
<link rel="stylesheet" href="css/search.css">

<div id="wrap-inner main" class="col-md-9">
	<div class="products">
		<h3>Tìm kiếm với từ khóa: <span>{{$keyword}}</span></h3>
		<div class="product-list row">
				@foreach ($items as $item)
				<div class="product-item col-md-3 col-sm-6 col-xs-12">
					<a href="#"><img src="{{asset('lib/storage/app/avatar/'.$item->prod_img)}}" class="img-thumbnail"></a>
					<p><a href="#">{{$item->prod_name}}</a></p>
					<p class="price">{{ number_format($item->prod_price,0,',','.')}} VND</p>	  
					<div class="marsk">
						<a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">Xem chi tiết</a>
					</div>                                    
				</div>
				@endforeach

		</div>                	                	
	</div>

	<div id="pagination">
		{{$items->links()}}
	</div>
</div>
@endsection
			