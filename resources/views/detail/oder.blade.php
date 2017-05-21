@extends('layouts.new-master')
@section('content')
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <h3 class="panel-title">
      <span class="glyphicon glyphicon-home"><a href="{{url('/')}}" title=""> Home</a></span> 
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span><a href="{{url('/')}}" title=""> Đặt hàng</a>
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span> <a href="#" title="">{!!$thongbao!!}</a>
    </h3>              
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">              
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
          <div class="panel panel-success">
            <div class="panel-body">   
            <legend class="text-left">Xác nhận thông tin đơn hàng</legend> 
              <div class="table-responsive">
                <table class="table table-hover">
                @if (session('thongbao'))
                    <div class="alert alert-success">
                        <ul>
                            {!! session('thongbao') !!} 
                        </ul>
                    </div>
                @endif
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Hình ảnh</th>
                      <th>Tên sản phẩm</th>
                      <th>SL</th>
                      <th>Giá</th>
                      <th>Thành tiền</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=1;?>
                  @foreach(Cart::content() as $row)
                    <tr>
                      <td>{{$i++}}</td>
                      <td><img src="{!!url('uploads/products/'.$row->options->img)!!}" alt="dell" width="80" height="50"></td>
                      <td>{!!$row->name!!}</td>
                      <td class="text-center">                        
                          <span>{!!$row->qty!!}</span>
                      </td>
                      <td>{!!number_format($row->price)!!} VNĐ</td>
                      <td>{!!number_format($row->qty * $row->price)!!} VNĐ</td>
                    </tr>
                  @endforeach                    
                    <tr>
                      <td colspan="3"><strong>Tổng cộng :</strong> </td>
            
                      <td colspan="2" style="color:#30a5ff;">{!!Cart::subtotal();!!} VNĐ</td>                      
                    </tr>                    
                  </tbody>
                </table>                
              </div>
              {{-- form thong tin khach hang dat hang           --}}
              <form action="" method="POST" role="form">
                <legend class="text-left">Thông tin khách hàng</legend>
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="">
                  <ul style="list-style: none;">
                    <li>- Tên khách hàng : <strong>{{ Auth::user()->name }} </strong> &nbsp;</li>
                    <li>- Điện thoại: <strong> {{ Auth::user()->phone }}</strong> &nbsp;</li>
                    <li>- Địa chỉ: <strong> {{ Auth::user()->address }}</strong></li>
                  </ul>
                  </label>
                </div>               
                <div class="form-group">
                  <label for="">Các ghi chú khác</label>
                  <textarea name="txtnote" id="inputtxtNote" class="form-control" rows="4" required="required">                    
                  </textarea>
                </div>              
                <button type="submit" class="btn btn-primary pull-right"> Đặt hàng</button> 
              </form>
            </div>
          </div>   
        </div>
      </div>     
    </div> 
  
  </div> 
</div>
<!-- ===================================================================================/news ============================== -->
@endsection