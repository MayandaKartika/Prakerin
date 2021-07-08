<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\KategoriSiswa;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        //halaman utama produk Controller
        $data_siswa = Siswa::simplePaginate(10);
        $data_kategori = KategoriSiswa::all();
        return view('siswa.index',compact('data_siswa','data_kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //untuk tambah data
        $data_kategori = KategoriSiswa::all();
        return view('siswa.create', compact('data_kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //fungsi untuk input data
        
            $siswa = new Siswa;
            $siswa->id_kategori = $request->id_kategori;
            $siswa->nama_siswa = $request->nama_siswa;
            $siswa->jenis_kelamin = $request->jenis_kelamin;
            $siswa->asal = $request->asal;
            $siswa->agama = $request->agama;
            $siswa->alamat = $request->alamat;
            $siswa->save();
            return redirect('siswa')->with('success','Data has been saved');
        
        
        
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
        //
        $siswa = Siswa::find($id);
        $data_kategori = KategoriSiswa::all();
        return view('siswa.edit',compact('siswa','id','data_kategori'));

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
        //
        $siswa = Siswa::find($id);
        
        $siswa->nama_siswa = $request->get('nama_siswa');
        $data_kategori = KategoriSiswa::find($request->get('id_kategori'));
        $siswa->kategori()->associate($data_kategori);
        $siswa->jenis_kelamin = $request->get('jenis_kelamin');
        $siswa->asal = $request->get('asal');
        $siswa->agama = $request->get('agama');
        $siswa->alamat = $request->get('alamat');
        $siswa->update();
        return redirect('siswa')->with('success','Data has been update');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //fngsi untuk mengapus data
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('siswa')->with('success','Data has been delete');
    }
}