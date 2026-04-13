<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function index () {

    if (!session('login')) {
    return redirect('/login');
}
        
    $data = Pengguna::all(); // ambil data pengguna

    return view('pengguna.index', compact('data'));
    }

    // CREATE (form tambah)
    public function create()
    {
        return view('pengguna.create');
    }

    // SIMPAN DATA
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        Pengguna::create([
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect('/pengguna')->with('success', 'Data berhasil ditambah');
    }

    // EDIT (form edit)
    public function edit($id_pengguna)
    {
        $data = Pengguna::findOrFail($id_pengguna);
        return view('pengguna.edit', compact('data'));
    }

    // UPDATE DATA
    public function update(Request $request, $id_pengguna)
    {
        $data = Pengguna::findOrFail($id_pengguna);

        $data->update([
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect('/pengguna')->with('success', 'Data berhasil diupdate');
    }

    // DELETE
    public function destroy($id_pengguna)
    {
        $data = Pengguna::findOrFail($id_pengguna);
        $data->delete();

        return redirect('/pengguna')->with('success', 'Data berhasil dihapus');
    }
}