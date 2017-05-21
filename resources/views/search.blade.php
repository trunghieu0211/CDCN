@extends('layouts.master')
@section('content')
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">   
        <!-- Dien thoai -->
        @foreach($products as $pr)
        @if($pr->category->parent_id == 1)        
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding">
            <div class="thumbnail mobile">              
              <div class="bt">
                <div class="image-m pull-left">
                  <img class="img-responsive" src="{!!url('uploads/products/'.$pr->images)!!}" alt="img responsive">
                </div>
                <div class="intro pull-right">
                  <h1><small class="title-mobile">{!!$pr->name!!}</small></h1>
                  <li>{!!$pr->intro!!}</li>
                  <span class="label label-info">KHUYẾN MÃI</span>   
                  <li><span class="glyphicon glyphicon-hand-right"></span> {!!$pr->promo1!!}</li> 
                  <li><span class="glyphicon glyphicon-hand-right"></span> {!!$pr->promo2!!}</li> 
                  <li><span class="glyphicon glyphicon-hand-right"></span> {!!$pr->promo3!!}</li> 
                </div><!-- /div introl -->
              </div> <!-- /div bt -->
              <div class="ct">
                <a href="{!!url('mobile/'.$pr->id.'-'.$pr->slug)!!}" title="Xem chi tiết">
                  <span class="label label-info">ƯU ĐÃI KHI MUA HÀNG</span>   
                  <li><span class="glyphicon glyphicon-hand-right"></span> {!!$pr->promo1!!}</li> 
                  <li><span class="glyphicon glyphicon-hand-right"></span> {!!$pr->promo2!!}</li> 
                  <li><span class="glyphicon glyphicon-hand-right"></span> {!!$pr->promo3!!}</li>
                  <span class="label label-warning">CẤU HÌNH NỔI BẬT</span> 
                  <li><strong>CPU</strong> : <i> {!!$pr->pro_details->cpu!!}</i></li>
                  <li><strong>Màn Hình</strong> : <i>{!!$pr->pro_details->screen!!} </i></li> 
                  <li><strong>Camera</strong> : Trước  <i>{!!$pr->pro_details->cam1!!}</i> Sau <i>{!!$pr->pro_details->cam2!!} </i></li> 
                  <li><strong>HĐH</strong> :<i> {!!$pr->pro_details->os!!} </i> <strong> Bộ nhớ trong</strong> :<i> {!!$pr->pro_details->storage!!} </i></li> 
                  <li><strong>Pin</strong> :<i> {!!$pr->pro_details->pin!!}</i></li>
                </a>
              </div>
                <span class="btn label-warning">Giá :<strong>{!!number_format($pr->price)!!}</strong> VNĐ </span>
                <a href="{!!url('gio-hang/addcart/'.$pr->id)!!}" class="btn btn-success pull-right add">Thêm vào giỏ </a>
            </div> <!-- / div thumbnail -->
          </div>  <!-- /div col-4 -->
          <!-- danh muc dien thoai -->
         {{--  <div class="clearfix"></div> --}}
       
          

        

        <!--========================== Laptop  =========================================  -->
          
          <?php
            elseif($pr->category->parent_id == 2) :
          ?> 
          {{-- <div id="laptop"></div> --}}
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding" >
            <div class="thumbnail mobile">          
              <div class="hienthi">
                <div class="image-m pull-left">
                  <img class="img-responsive" src="{!!url('uploads/products/'.$pr->images)!!}" alt="img responsive"><br><br><br>
                   <span class="btn label-warning">Giá : <strong>{!!number_format($pr->price)!!}</strong> VNĐ </span>
                </div>
                <div class="caption">
                  <h1><small><strong class="title-pro">{!!$pr->name!!}</strong></small></h1>
                  <p>    
                      <li><i>{!!$pr->intro!!}</i></li>             
                      <span class="label label-info ">ƯU ĐÃI KHI MUA HÀNG</span>
                      <li><span class="glyphicon glyphicon-hand-right"></span> {!!$pr->promo1!!}</li> 
                      <li> <span class="glyphicon glyphicon-hand-right"></span> {!!$pr->promo2!!}</li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> {!!$pr->promo3!!}</li>
                  </p>
                  <p>
                   
                  </p>
                </div>
              </div>
              <div class="tomtat">
                <div class="thongtin">
                  <a href="{!!url('laptop/'.$pr->id.'-'.$pr->slug)!!}" title="Xem chi tiết">
                    <span class="label label-info ">ƯU ĐÃI KHI MUA HÀNG</span>   
                    {{-- <li><span class="glyphicon glyphicon-hand-right"></span> {!!$pr->promo1!!}</li> 
                    <li><span class="glyphicon glyphicon-hand-right"></span> T{!!$pr->promo2!!}</li> 
                    <li><span class="glyphicon glyphicon-hand-right"></span> {!!$pr->promo3!!}</li> --}}
                    <span class="label label-warning">CẤU HÌNH NỔI BẬT</span> 
                    <li><strong>CPU</strong> : <i>{!!$pr->pro_details->cpu!!}</i></li>
                    <li><strong>RAM </strong> : <i>{!!$pr->pro_details->ram!!}</i></li>
                    <li><strong>Lưu Trữ</strong> : <i> {!!$pr->pro_details->storage!!}</i></li>
                    <li><strong>Màn Hình</strong> : <i> {!!$pr->pro_details->screen!!} </i></li> 
                    <li><strong>VGA</strong> : <i> {!!$pr->pro_details->vga!!}</i></li> 
                    <li><strong>HĐH</strong> :<i> {!!$pr->pro_details->os!!}</i></li> 
                    <li><strong>Pin</strong> :<i> {!!$pr->pro_details->pin!!}</i></li>
                  </a>
                 {{--  <div class="price">  --}} 
                   {{--  <span class="btn btn-info btn-block ">Giá : <strong>{!!number_format($pr->price)!!}</strong> VNĐ</span>  --}}  
                   {{--  <a href="{!!url('gio-hang/addcart/'.$pr->id)!!}" class="btn btn-success btn-block">Thêm vào giỏ</a>  --}}
                   <br><br>
                   <span class="btn label-warning">Giá :<strong>{!!number_format($pr->price)!!}</strong> VNĐ </span>
                    <a href="{!!url('gio-hang/addcart/'.$pr->id)!!}" class="btn btn-success pull-right add">Thêm vào giỏ </a>
                 {{--  </div>  --}}
                </div>                
                                   
              </div> 
            </div>
          </div>
        {{--   <div class="clearfix"></div> --}}
       
          
<!-- =============== máy tính ===================================== -->
        
        <?php 
          elseif($pr->category->parent_id == 19) :
        ?>
        <div id="pc"></div>
           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding">
            <div class="thumbnail mobile">              
              <div class="bt">
                <div class="image-m pull-left">
                  <img class="img-responsive" src="{!!url('uploads/products/'.$pr->images)!!}" alt="img responsive">
                </div>
                <div class="intro pull-right">
                  <h1><small class="title-pc">{!!$pr->name!!}</small></h1>
                  {{-- <li> CPU: {!!$pr->pro_details->cpu!!}</li>
                  <li> RAM :{!!$pr->pro_details->ram!!}</li>
                  <li>HDD : {!!$pr->pro_details->storage!!} </li> --}}
                  <span class="label label-info">KHUYẾN MÃI</span>   
                  <li><span class="glyphicon glyphicon-hand-right"></span> {!!$pr->promo1!!}</li> 
                  <li><span class="glyphicon glyphicon-hand-right"></span> {!!$pr->promo2!!} </li> 
                  <li><span class="glyphicon glyphicon-hand-right"></span> {!!$pr->promo3!!} </li> 
                </div><!-- /div introl -->
              </div> <!-- /div bt -->
              <div class="ct">
                <a href="{!!url('pc/'.$pr->id.'-'.$pr->slug)!!}" title="Xem chi tiết">                   
                  <span class="label label-warning">CẤU HÌNH CHI TIẾI</span> 
                  <li><strong>CPU</strong> : <i>  {!!$pr->pro_details->cpu!!}</i></li>
                  <li><strong>HDD</strong> : T<i> {!!$pr->pro_details->storage!!}</i></li> 
                  <li><strong>HĐH</strong> :<i{!!$pr->pro_details->os!!}  </i> - <strong>RAM </strong> :<i>{!!$pr->pro_details->ram!!}</i></li> 
                  <li><strong>VGA - DVD</strong> :<i> {!!$pr->pro_details->vga!!}</i></li>
                  <li><strong>Kết nối</strong> : <i> {!!$pr->pro_details->connect!!}</i></li> 
                </a>
              </div>
                <span class="btn label-warning">Giá : <strong>{!!number_format($pr->price)!!}</strong> VNĐ </span>
                <a href="{!!url('gio-hang/addcart/'.$pr->id)!!}" class="btn btn-success pull-right add">Thêm vào giỏ </a>
            </div> <!-- / div thumbnail -->
          </div>  <!-- /div col-4 item products -->
          
        @endif

        {{-- <div class="clearfix"></div> --}}
    @endforeach    

        </div> <!-- /col 12 -->     
@endsection
