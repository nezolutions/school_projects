<?php

namespace App\Http\Controllers;

use App\Models\Supplier as ModelsSupplier;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Supplier extends Controller
{
    public function sup() {
        $sup = ModelsSupplier::all();
        $data = ['supplier' => $sup];
        return view('supplier', $data);
    }

    public function add_sup() {
        return view('add_supplier');
    }

    public function save_sup(Request $request) {
        DB::table('supplier')->insert([
            'namaSupplier' => $request->namaSupplier,
            'alamatSupplier' => $request->alamatSupplier,
            'telpSupplier' => $request->telpSupplier
        ]);

        return redirect()->to(url('/bloking/supplier'));
    }

    public function destroy_sup($id) {
        $sup = ModelsSupplier::find($id);
        $sup->delete();
        return redirect()->to(url('/bloking/supplier'));
    }

    public function edit_sup($id, Request $request) {
        $sup = ModelsSupplier::find($id);
        $sup->update($request->except(['_token', 'save']));
        return redirect()->to(url('/bloking/supplier'));
    }

    public function update_sup($id) {
        $sup = ModelsSupplier::find($id);
        return view('edit_supplier', $sup);
    }
}
