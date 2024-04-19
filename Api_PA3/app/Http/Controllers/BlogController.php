<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        try {
            $blogs = Blog::all();
            return response()->json(['data' => $blogs]);
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            return response()->json(['error' => 'Terjadi kesalahan saat mengambil data'], 500);
        }
    }
    
    // public function create ()
    // {
    //     return view('layouts.crud.create');
    // }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $title = $request->title;
        $content = $request->content;
        $image = $request->file('image')->store('public/blogs');

        $formData = new Blog();
        $formData->title = $title;
        $formData->content = $content;
        $formData->image = $image;
        $formData->save();

        return response()->json([
            'message' => 'Form data saved successfully',
        ]);
    }
    
}
//     /**
//      * edit
//      *
//      * @param  mixed $blog
//      * @return void
//      */
//     public function edit(Blog $blog)
//     {
//         return view('crud.edit', compact('blog'));
//     }
    
//     /**
//      * update
//      *
//      * @param  mixed $request
//      * @param  mixed $blog
//      * @return void
//      */
//     public function update(Request $request, Blog $blog)
//     {
//         $this->validate($request, [
//             'title'     => 'required',
//             'content'   => 'required'
//         ]);

//         //get data Blog by ID
//         $blog = Blog::findOrFail($blog->id);

//         if($request->file('image') == "") {

//             $blog->update([
//                 'title'     => $request->title,
//                 'content'   => $request->content
//             ]);

//         } else {

//             //hapus old image
//             Storage::disk('local')->delete('public/blogs/'.$blog->image);

//             //upload new image
//             $image = $request->file('image');
//             $image->storeAs('public/blogs', $image->hashName());

//             $blog->update([
//                 'image'     => $image->hashName(),
//                 'title'     => $request->title,
//                 'content'   => $request->content
//             ]);
            
//         }

//         if($blog){
//             //redirect dengan pesan sukses
//             return redirect()->route('crud.home')->with(['success' => 'Data Berhasil Diupdate!']);
//         }else{
//             //redirect dengan pesan error
//             return redirect()->route('crud.home')->with(['error' => 'Data Gagal Diupdate!']);
//         }
//     }
    
//     /**
//      * destroy
//      *
//      * @param  mixed $id
//      * @return void
//      */
//     public function destroy($id)
//     {
//         $blog = Blog::findOrFail($id);
//         $blog->delete();

//         if($blog){
//             //redirect dengan pesan sukses
//             return redirect()->route('crud.home')->with(['success' => 'Data Berhasil Dihapus!']);
//         }else{
//             //redirect dengan pesan error
//             return redirect()->route('crud.home')->with(['error' => 'Data Gagal Dihapus!']);
//         }
//     }

// }
