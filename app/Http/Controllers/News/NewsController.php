<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        // Your truck listing logic here
    }

    public function list()
    {
        $news = News::all();
        return view('news',compact('news'));
    }

    public function create()
    {
        // Display a form for creating a new truck
    }

    public function store(Request $request)
    {
        // echo "test";die;
        $image = $request->file('thumbnail') ;

        $new_name = $image->getclientoriginalname();
        
        $image->move(public_path(), $new_name);

        // print_r($request->all());

        if($request->input('id')){
            $truck = News::findOrFail($request->input('id'));

            $truck->title = $request->input('title');
            $truck->description = $request->input('description');
            $truck->content = $request->input('content');
            $truck->content = $new_name;
            $truck->save();
        }else{
            $truck = new News([
                'title' => ucfirst($request->title),
                'description' => ucfirst($request->description),
                'content' => ucfirst($request->content),
                'image' => $new_name,
            ]);
            
            $truck->save();
        }
        
        
        $insertedTruckId = $truck->id;
        
            return response()->json([
                'status' => 200,
            ]);
        
    }

    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();    
        $news = News::all();
        return redirect('news-list')->with('success', 'Data Updated successfully.');
    
    }
}
