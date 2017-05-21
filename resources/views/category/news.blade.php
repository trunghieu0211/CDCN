@extends('layouts.new-master')
@section('content')
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    {{-- <h3 class="panel-title">
      <span class="glyphicon glyphicon-home"><a href="#" title=""> Trang chủ</a></span> 
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span><a href="#" title=""> Tin Tức </a>
      <!--   <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span> <a href="#" title=""> noi dung con</a> -->
    </h3>      --}}         
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 no-padding"> 
                  
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="panel panel-success">
            <div class="panel-body">
              <div class="row">
              <!-- hot new content -->              
                <div class="col-lg-6">
                  <img src="{!!url('uploads/news/'.$hot1->images)!!}" alt="" height="200" width="100%">
                  <h3 class="title-h3"><a href="{!!url('tin-tuc/'.$hot1->id.'-'.$hot1->slug)!!}" title="">{!!$hot1->title!!} </a></h3>
                  <p class="summary-content">
                    {!!$hot1->intro!!}
                  </p>
                </div>
                <div class="col-lg-6 no-padding">
                  <div class="row">
                    @foreach($data as $row)
                      <div class="col-lg-12 ">
                        <h4><a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="{!!$row->title!!}">{!!$row->title!!}</a></h4>
                        <div class="col-lg-9">
                          <p class="sum">{!!$row->intro!!}</p>
                        </div>
                        <div class="col-lg-3 no-padding">
                          <a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title=""><img src="{!!url('uploads/news/'.$row->images)!!}" alt="" width="80" height="80" style="padding-right:10px; padding-left: 0;"></a>
                        </div>
                      </div>
                    @endforeach                   
                  </div>                                     
                </div>
              </div>

              <div class="row">
                @foreach($all as $row)
                  <div class="col-lg-12 no-padding">
                    <hr>
                    <div class="col-lg-3">
                      <a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="{!!$row->slug!!}"><img src="{!!url('uploads/news/'.$row->images)!!}" alt="" width="90%" height="99%"> </a>
                    </div>
                    <div class="col-lg-9">
                      <h4><a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="">{!!$row->title!!}</a></h4>
                      <p> 
                        {!!$row->intro!!}
                      </p>
                      <p><strong>Lúc :</strong> {!!$row->created_at!!}  <strong>Bởi : </strong> <a href="#" title="admin"> {!!$row->author!!}</a></p>
                    </div>
                  </div> 
                @endforeach 
              </div><!-- /row -->
              {!!$all->render()!!}
            </div>
          </div>   
        </div>
      </div>     
    </div> 
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding">            
      <!-- panel inffo 1 -->
      <div class="panel panel-info"> 
       <div class="panel-heading">
        <h3 class="panel-title text-center">TIN TỨC MỚI</h3>
      </div>
        <div class="panel-body"> 
          <div class="tab-content ">
            <div class="tab-pane active" id="1">
              <ul class="li-menu-tab">
                <div class="row">
                @foreach($all as $row)
                  <div class="col-lg-12 no-padding">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding">
                      <a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="{!!$row->title!!}"><img src="{!!url('uploads/news/'.$row->images)!!}" alt="{!!$row->images!!}" width="99%" height="99%"> </a>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 no-padding">
                     <a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="">{!!$row->title!!}</a>
                    </div>
                  </div>
                @endforeach                  
                        
                </div>
              </ul>
            </div>
          </div> <!-- /tab content -->
        </div>  <!-- /panel boody -->
    </div>
    <!-- panel info 2  quản cáo 1          -->          
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title text-center">SỰ KIỆN</h3>
      </div>
      <div id="myCarousel" class="carousel " data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner slide">
    <div class="item active">
      <img src="{!!url('public/images/slides/thumbs/qc1.png')!!}">
        <div class="carousel-caption d-none d-md-block">
        </div>
    </div>

    <div class="item">
      <img src="{!!url('public/images/slides/thumbs/qc2.jpg')!!}">
        <div class="carousel-caption d-none d-md-block">
        </div>
    </div>

    <div class="item">
      <img src="{!!url('public/images/slides/thumbs/qc3.jpg')!!}">
        <div class="carousel-caption d-none d-md-block">
        </div>
    </div>

    <div class="item">
      <img src="{!!url('public/images/slides/thumbs/qc4.jpg')!!}">
        <div class="carousel-caption d-none d-md-block">
        </div>
    </div>

    <div class="item">
      <img src="{!!url('public/images/slides/thumbs/qc5.jpg')!!}">
        <div class="carousel-caption d-none d-md-block">
        </div>
    </div>

    <div class="item">
      <img src="{!!url('public/images/slides/thumbs/qc6.jpg')!!}">
        <div class="carousel-caption d-none d-md-block">
        </div>
    </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>   
  </div> 
</div>
<!-- ===================================================================================/news ============================== -->
@endsection