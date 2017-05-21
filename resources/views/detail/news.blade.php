@extends('layouts.new-master')
@section('content')
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <h3 class="panel-title">
      <span class="glyphicon glyphicon-home"><a href="#" title=""> Home</a></span> 
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span><a href="#" title=""> Tin Tức</a>
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span> <a href="#" title="">{!!$slug!!}</a>
    </h3>              
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 no-padding">              
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="panel panel-success">
            <div class="panel-body">
              <div class="row">
              <!-- hot new content -->
                <div class="col-lg-12">
                  <h3 class="title-h3"><a href="#" title="{!!$data->title!!}">{!!$data->title!!}</a></h3>
                   <p class="time-views"> <span> Đăng bởi: </span> <strong>{!!$data->author!!}</strong> <strong></strong></p>
                  <img class="img-new" src="{!!url('uploads/news/'.$data->images)!!}" alt="{!!$data->images!!}" >                  
                  <p class="summary-content">
                  <div class="panel-body">
                    <p class="text-left" style=" padding-bottom: 0px;">
                      <strong>
                        {!!$data->intro!!}
                      </strong>                  
                    </p>          
                      <div class="accordion-inner">
                        {!!$data->full!!}
                      </div>
                    <p class="text-left"><strong> Nguồn : <a target="#" href="#"> {!!$data->source!!}</a> </strong><br>
                      <span style="font-size:10px;color:#bdc3c7;">Sửa lần cuối: {!!$data->updated_at!!} </span></p>
                      <p class="text-right"> <span class="glyphicon glyphicon-user" style="color:blue;"></span> <strong> {!!$data->author!!} </strong></p>
                  </div>
                  </p>
                </div>                
              </div>
              <div class="fb-comments" data-href="http://localhost/CDCN/tin-tuc/{{$data->id}}-{{$data->slug}}" data-width="700" data-numposts="5"></div>
              <div class="row">
                <?php 
                    $data = DB::table('news')
                    ->orderBy('created_at', 'desc')
                    ->paginate(5); 
                  ?>
                 <div class="panel-heading" style="background-color: #bce8f1;">
                  <h3 class="panel-title text-center">TIN TỨC MỚI</h3>
                </div>
                <hr>
                @foreach($data as $row)
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                      <a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="{!!$row->title!!}"><img src="{!!url('uploads/news/'.$row->images)!!}" alt="{!!$row->title!!}" width="90%" height="99%"> </a>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                      <h4><a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}"" title="{!!$row->title!!}">{!!$row->title!!}</a></h4>
                      <p> 
                        {!!$row->intro!!}
                      </p>
                      <p><strong>Lúc :</strong> {!!$row->created_at!!} Bởi : <strong>{!!$row->author!!} </strong></p>
                    </div>
                  </div> 
                @endforeach 
              </div><!-- /row -->
              {!!$data->render()!!}
            </div>
          </div>   
        </div>
      </div>     
    </div> 
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding">            
  
         
      <div class="panel panel-info"> 
       <div class="panel-heading">
        <h3 class="panel-title text-center">TIN TỨC MỚI</h3>
      </div>
        <div class="panel-body"> 
          <div class="tab-content ">
            <div class="tab-pane active" id="1">
              <ul class="li-menu-tab">
                <div class="row">
                @foreach($data as $row)
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
<!-- ===================================================================================/news ============================== -->
@endsection