@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="{!!(url('/admin/home'))!!}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Tin tức</li>
			</ol>
		</div><!--/.row-->
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Danh sách tin tức
						<a href="{!!url('admin/news/add')!!}" title=""><button type="button" class="btn btn-primary pull-right">Thêm tin mới</button></a>
					</div>
					@if (count($errors) > 0)
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					    @elseif (session('thongbao'))
					    	<div class="alert alert-success">
						        <ul>
						            {!! session('thongbao') !!}	
						        </ul>
						    </div>
						@endif
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>										
										<th>STT</th>										
										<th>Hình ảnh</th>										
										<th>Tiêu đề bản tin</th>										
										<th>Tóm tắt</th>										
										<th>Trạng thái</th>										
										<th>Sửa/Xóa</th>
									</tr>
								</thead>
								<tbody>
								<?php $i=1;?>
								@foreach($data as $row)
									<tr>
										<td>{{$i++}}</td>
										<td> <img src="{!!url('uploads/news/'.$row->images)!!}" alt="" width="40" height="40"> </td>
										<td>{!!$row->title!!}</td>
										<td><small>{!!$row->intro!!}</small></td>
										<td style="width: 90px;">
											@if($row->status==1)
											Hiển thị
											@else
											Tạm ẩn
											@endif
										</td>
										<td style="width: 120px;">
										    <a href="{!!url('admin/news/edit/'.$row->id)!!}" title="Sửa"><span class="glyphicon glyphicon-edit">Sửa</span> </a>
										    <a href="{!!url('admin/news/del/'.$row->id)!!}"  title="Xóa" onclick="return xacnhan('Bạn có muốn xóa tin tức này ?')"><span class="glyphicon glyphicon-remove">Xóa</span> </a>
										</td>
									</tr>	
								@endforeach								
								</tbody>
							</table>
						</div>
						{!!$data->render()!!}
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection