@extends('backend.master')
@section('title', 'Danh sách sản phẩm')
@section('main')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách bình luận</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>Cmt ID</th>
											<th width="30%">Name</th>
											<th>Email</th>
											<th>Content</th>
											<th>Product Name</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($comment as $item)
											<tr>
												<td>{{ $item->cmt_id}}</td>
												<td>{{ $item->cmt_name}}</td>
												<td>{{ $item->cmt_email}}</td>
												<td>{{ $item->cmt_content}}</td>
												<td>{{ $item->cmt_product}}</td>
												<td>
													
													<a onclick="return confirm('Bạn có chắc chắn muốn xóa không!')" href="{{asset('admin/product/delete/'.$item->cmt_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>							
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection