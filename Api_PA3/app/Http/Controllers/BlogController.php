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
        // dd($request);
        $request ->validate([
            "id_blog" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg,gif|max:2048",
            "title" => "required",
            "content" => "required",
        ]);

        $imagePath = $request-> file('image')->store('public/blogs');

        $blog = Blog::create([
            "id_blog" => $request->id_blog,
            "image"=> $imagePath,
            "title"=> $request->title,
            "content"=> $request->content,
        ]);

        if($blog) {
            return redirect('/home')->with('success', 'Data tanaman berhasil ditambahkan');
        } else {
            return back()->with('error', 'Gagal Menambahkan Tanaman');
        }
        // if ($response->successful()) {
        //     // Ambil data terbaru dari endpoint API
        //     $blogResponse = Http::get('http://localhost:8070/api/data-tanaman');
        //     $blogs = $blogResponse->json()['data'];

        //     // Redirect atau tampilkan pesan sukses
        //     return redirect('/home')->with('success', 'Data tanaman berhasil ditambahkan ');
        // } else {
        //     // JIka respons gagal, tampilkan pesan error
        //     return back()->with('error', 'Gagal menambahkan tanaman');
        // }

        return response()->json(['message'=>'Tanaman created successfully','data' => $blog]);
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
