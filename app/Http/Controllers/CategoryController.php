<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Http\Requests\AddCategoryRequest;
use DateTime;

class CategoryController extends Controller
{
   public function getlist()
   {
		$data = Category::all();
		return view('back-end.category.cat-list',['data'=>$data]);
   }
   public function getadd()
   {	
		$data = Category::all();
		return view('back-end.category.add',['data'=>$data]);
   }
   public function postadd(AddCategoryRequest $rq)
   {
		$cat = new Category();
      $cat->parent_id= $rq->sltCate;
      $cat->name= $rq->txtCateName;
      $cat->slug = str_slug($rq->txtCateName,'-');
      $cat->created_at = new DateTime;
      $cat->save();
      return redirect()->route('getaddcat')->with('thongbao','Đã thêm thành công!');
         
   }
   public function getedit($id)   {
      $cat = Category::all();
      $data = Category::findOrFail($id)->toArray();
      return view('back-end.category.edit',['cat'=>$cat,'data'=>$data]);
   }
   public function postedit($id,AddCategoryRequest $request)
   {
      $cat = category::find($id);
      $cat->name = $request->txtCateName;
      $cat->slug = str_slug($request->txtCateName,'-');
      $cat->parent_id = $request->sltCate;
      $cat->updated_at = new DateTime;
      $cat->save();
      return redirect('admin/danhmuc/edit/'.$id)->with('thongbao','Đã sửa thành công');

   }
   public function getdel($id)
   {
      $parent_id = category::where('parent_id',$id)->count();
      if ($parent_id==0) {
         $category = category::find($id);
         $category->delete();
         return redirect()->route('getcat')->with('thongbao','Đã xóa thành công');
      } else{
         echo '<script type="text/javascript">
                  alert("Không thể xóa danh mục này !");                
                window.location = "';
                echo route('getcat');
            echo '";
         </script>';
      }
   }
}