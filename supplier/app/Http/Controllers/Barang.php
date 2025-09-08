<?php

namespace App\Http\Controllers;

use App\Models\Barang as ModelsBarang;
use Illuminate\Http\Request;

class Barang extends Controller
{
    public function bar() {
        $bar = ModelsBarang::all();
        $data = [
            'title' => 'Barang',
            'active' => 'Barang',
            'barang' => $bar
        ];
        return view('barang.package', $data);
    }

    public function save_bar(Request $request) {
        ModelsBarang::create($request->except(['_token', 'save']));
        return redirect()->to(url('/bloking/package'))->with('dataTambah', 'Package has been added.');
    }

    public function update_bar($id) {
        $bar = ModelsBarang::find($id);
        return view('barang.edit_package', $bar);
    }

    public function edit_bar(Request $request) {
        $bar = ModelsBarang::find($request->id);
        $bar->update($request->except(['_token', 'id']));
        return redirect()->to(url('/bloking/package'))->with('dataEdit', 'Package has been updated.');
    }

    public function destroy_bar($id) {
        $bar = ModelsBarang::find($id);
        $bar->delete();
        return redirect()->to(url('/bloking/package'));
    }
}
