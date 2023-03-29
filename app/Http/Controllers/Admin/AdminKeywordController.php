<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Admin;
use App\Http\Requests\AdminRequestKeyword;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Keyword;
use Illuminate\Http\Request;

class AdminKeywordController extends AdminController
{
    public function index(){
        $keywords = Keyword::paginate(10);

        $viewData = [
            'keywords' => $keywords,
        ];
        return view('admin.keyword.index', $viewData);
    }

    public function create(){
        return view('admin.keyword.create');
    }
    public function store(AdminRequestKeyword $request){
        $data                   = $request->except('_token');
        $data['k_slug']          = Str::slug($request -> k_name);
        $data['created_at']     = Carbon::now();

        $id = Keyword::insertGetId($data);
        return redirect()->back();
   }

   public function edit($id){
        $keyword = Keyword::find($id);
        return view('admin.keyword.update' , compact('keyword'));
    }

    public function update(AdminRequestKeyword $request, $id){
        $keyword           = Keyword::find($id);
        $keyword -> update($request->all());
        return redirect()->back();
    }
    public function hot($id){
        $keyword           = Keyword::find($id);
        $keyword->k_hot = ! $keyword->k_hot;
        $keyword->save();

        return redirect()->back();
    }
    public function delete($id){
        $keyword           = Keyword::find($id);
        $keyword->delete();
        return redirect()->back();

    }
}
