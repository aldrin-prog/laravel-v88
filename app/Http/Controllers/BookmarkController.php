<?php

namespace App\Http\Controllers;
use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    //
    public function submit(Request $request){
        $name=$request->input('name');
        $url=$request->input('url');
        $folder=$request->input('folder');
        Bookmark::create(['name'=>$name,'folder'=>$folder,'url'=>$url]);
        return redirect('/');
    }
    public function destroy($id){
        $bookmark=Bookmark::find($id);
        return view('delete_confirmation',['bookmark'=>$bookmark]);
    }
    public static function delete($id){
        $bookmark=Bookmark::find($id);
        $bookmark->delete();
        return redirect('/');
    }
}
