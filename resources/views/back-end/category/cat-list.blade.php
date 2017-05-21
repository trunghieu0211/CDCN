@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Danh mục</li>
			</ol>
		</div><!--/.row-->
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Danh sách danh mục
						<a href="{!!url('admin/danhmuc/add')!!}" title=""><button type="button" class="btn btn-primary pull-right">Thêm mới danh mục</button></a>
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
										<th>Tên danh mục</th>										
										<th>Sửa/Xóa</th>
									</tr>
								</thead>
								<tbody>
								<?php $i=1;?>
								@foreach($data as $row)
									<tr>
										<td>{{$i++}}</td>
										<td>{{$row->name}}</td>
										<td>
											<a href="{!!url('admin/danhmuc/edit/'.$row->id)!!}" title="Sửa"><span class="glyphicon glyphicon-edit">Sửa</span> </a>
										    <a href="{!!url('admin/danhmuc/del/'.$row->id)!!}"  title="Xóa" onclick="return xacnhan('Bạn có muốn xóa danh mục này ?')"><span class="glyphicon glyphicon-remove">Xóa</span> </a>
										</td>
									</tr>
								@endforeach()									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection