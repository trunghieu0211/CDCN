<?php

Route::auth();
Route::get('/user', 'HomeController@index');
// Route::get('/user/edit', 'HomeController@edit');

//admin route 
Route::get('admin/login', ['as'  => 'getlogin', 'uses' =>'Admin\AuthController@showLoginForm']);
Route::post('admin/login', ['as'  => 'postlogin', 'uses' =>'Admin\AuthController@login']);
Route::get('admin/password/reset', ['as'  => 'getreser', 'uses' =>'Admin\AuthController@email']);

Route::get('admin/logout', ['as'  => 'getlogin', 'uses' =>'Admin\AuthController@logout']);
//trang chủ
Route::get('/', ['as'=>'index', 'uses'=>'PagesController@index']);
//tìm kiếm
Route::get('tim-kiem',['as'=>'search','uses'=>'PagesController@search']);
//giỏ hàng
Route::get('gio-hang', ['as'=>'getcart', 'uses'=>'PagesController@getcart']);
//thêm vào giỏ hàng
Route::get('gio-hang/addcart/{id}', ['as'=>'getcartadd', 'uses' =>'PagesController@addcart']);
Route::get('gio-hang/update/{id}/{qty}-{dk}', ['as'=>'getupdatecart','uses'=>'PagesController@getupdatecart']);
Route::get('gio-hang/delete/{id}', ['as' =>'getdeletecart','uses'=>'PagesController@getdeletecart']);
Route::get('gio-hang/xoa', ['as' =>'getempty', 'uses'=>'PagesController@xoa']);

//đặt hàng
Route::get('dat-hang', ['as'=>'getoder', 'uses'=>'PagesController@getoder']);
Route::post('dat-hang', ['as'=>'postoder', 'uses'=>'PagesController@postoder']);
//category
Route::get('/{cat}', ['as'=>'getcate', 'uses'=>'PagesController@getcate']);
Route::get('/{cat}/{id}-{slug}', ['as'=>'getdetail', 'uses' =>'PagesController@detail']);


//phần back end
Route::group(['middleware' => 'admin'], function () {
      Route::group(['prefix' => 'admin'], function() {
        
       	Route::get('/home', function() {         
         return view('back-end.home');       	
       });
       // --------------------quản lý danh mục----------------------
       	Route::group(['prefix'=> 'danhmuc'], function() {
           Route::get('add',['as'=>'getaddcat','uses'=>'CategoryController@getadd']);
           Route::post('add',['as'=>'postaddcat','uses'=>'CategoryController@postadd']);

           Route::get('/',['as'=>'getcat','uses'=>'CategoryController@getlist']);
           Route::get('del/{id}',['as'=>'getdellcat','uses'=>'CategoryController@getdel']);
           
           Route::get('edit/{id}',['as'=>'geteditcat','uses'=>'CategoryController@getedit']);
           Route::post('edit/{id}',['as'=>'posteditcat','uses'=>'CategoryController@postedit']);
    	});
         // -------------------- quản lý sản phẩm--------------------
        Route::group(['prefix'=>'/sanpham'], function() {
           Route::get('/{loai}/add',['as'=>'getaddpro','uses'=>'ProductsController@getadd']);
           Route::post('/{loai}/add',['as'=>'postaddpro','uses'=>'ProductsController@postadd']);

           Route::get('/{loai}',['as'=>'getpro','uses'=>'ProductsController@getlist']);
           Route::get('/del/{id}',['as'=>'getdellpro','uses'=>'ProductsController@getdel']);
           
           Route::get('/{loai}/edit/{id}',['as'=>'geteditpro','uses'=>'ProductsController@getedit']);
           Route::post('/{loai}/edit/{id}',['as'=>'posteditpro','uses'=>'ProductsController@postedit']);
      });
       // -------------------- quản lý tin tức-----------------------------
        Route::group(['prefix' => '/news'], function() {
           Route::get('/add',['as'=>'getaddnews','uses'=>'NewsController@getadd']);
           Route::post('/add',['as'=>'postaddnews','uses'=>'NewsController@postadd']);

           Route::get('/',['as'=>'getnews','uses' =>'NewsController@getlist']);
           Route::get('/del/{id}',['as'=>'getdellnews','uses'=>'NewsController@getdel']);
           
           Route::get('/edit/{id}',['as'=>'geteditnews','uses'=>'NewsController@getedit']);
           Route::post('/edit/{id}',['as'=>'posteditnews','uses'=>'NewsController@postedit']);
      });
        // -------------------- quản lý đơn đặt hàng--------------------
        Route::group(['prefix' => '/donhang'], function() {;

           Route::get('',['as'=>'getpro','uses'=>'OdersController@getlist']);
           Route::get('/del/{id}',['as'   =>'getdeloder','uses' => 'OdersController@getdel']);
           
           Route::get('/detail/{id}',['as'  =>'getdetail','uses' => 'OdersController@getdetail']);
           Route::post('/detail/{id}',['as' =>'postdetail','uses' => 'OdersController@postdetail']);
      });
        // -------------------- quản lý tài khoản khách hàng--------------------
        Route::group(['prefix' => '/khachhang'], function() {;

           Route::get('',['as'=>'getmem','uses'=>'UsersController@getlist']);
           Route::get('/del/{id}',['as'=>'getdelmem','uses'=>'UsersController@getdel']);
      });
       // -------------------- quản lý nhân viên--------------------
        Route::group(['prefix' => '/nhanvien'], function() {;

           Route::get('',['as'=>'getnv','uses'=>'Admin_usersController@getlist']);

      });
      
    });     
});
