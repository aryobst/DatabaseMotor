<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class MotorController extends Controller
{
    public function index()
    {
    	// mengambil data dari table motor
    	$motor = DB::table('motor')->get();
 
    	// mengirim data motor ke view index
    	return view('index',['motor' => $motor]);
 
    }
	public function tambah()
	{

		//memanggil view tambah
		return view('tambah');
	}
	public function store(Request $request)
	{
	// insert data ke table motor
	DB::table('motor')->insert([
		'motor_nama' => $request->nama,
		'motor_jenis' => $request->jenis,
		'motor_stok' => $request->stok,
		'motor_merek' => $request->merek
	]);
	return redirect('/motor');
	}
	public function edit($id)
	{
		// mengambil data motor berdasarkan id yang dipilih
		$motor = DB::table('motor')->where('motor_id',$id)->get();
		// passing data motor yang didapat ke view edit.blade.php
		return view('edit',['motor' => $motor]);
	}
	public function update(Request $request)
	{
	// update data motor
	DB::table('motor')->where('motor_id',$request->id)->update([
		'motor_nama' => $request->nama,
		'motor_jenis' => $request->jenis,
		'motor_stok' => $request->stok,
		'motor_merek' => $request->merek
	]);
	return redirect('/motor');
	}
	public function hapus ($id)
	{
	// menghapus data motor berdasarkan id yang dipilih
	DB::table('motor')->where('motor_id',$id)->delete();
		
	// alihkan halaman ke halaman motor
	return redirect('/motor');
}
}