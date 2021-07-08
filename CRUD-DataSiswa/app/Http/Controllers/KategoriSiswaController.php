<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\KategoriSiswa;

class KategoriSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function _construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $data_kategori = KategoriSiswa::simplePaginate(10);
        return view('kategori.index', compact('data_kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_kategori = KategoriSiswa::all();
        return view('kategori.create', compact('data_kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //deklarasi variabel
        $kategori = new KategoriSiswa;
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();
        return redirect('kategori')->with('success','Data has been saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //fungsi untuk mengedit data
        $kategori = KategoriSiswa::find($id);
        return view('kategori.edit',compact('kategori','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //fungsi untuk mengupdate data
        $kategori = KategoriProduk::find($id);

        $this->validate(request(),[
            'nama_kategori' =>'required'
        ]);
        $kategori->nama_kategori = $request->get('nama_kategori');
        $kategori->save();
        return redirect('kategori')->with('success','Data has been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //fungsi untuk menghapus data
        $kategori = KategoriSiswa::find($id);
        $kategori->delete();
        return redirect('kategori')->with('success','Data has been delete');
    }
}
