<?php

namespace App\Http\Controllers;

use App\Models\ItemModel;
use Illuminate\Http\Request;

class ItemModelController extends Controller
{
    //

    public function index() {

        $items = ItemModel::all();
        return view('items.index', compact('items'));
    }

    public function create() {
        return view('items.create');
    }

    public function store(Request $resquest) {

        $resquest->validate([
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ]);

        ItemModel::create([
            'name' => request('name'),
            'desc' => request('desc'),
            'price' => request('price'),
            'quantity' => request('quantity')
        ]);

        return redirect('/items')->with('Message', 'Item Has Been Added.');
    }

    public function edit(ItemModel $item) {

        return view('items.edit', ['item' => $item]);
    }

    public function delete(ItemModel $item) {

        return view('items.index', ['item' => $item]);
    }


    public function update(ItemModel $item) {

        request()->validate([
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ]);

        $item->update([
            'name' => request('name'),
            'desc' => request('desc'),
            'price' => request('price'),
            'quantity' => request('quantity')
        ]);

        return redirect('/items')->with('Message', 'Items Updated.');
    }

    public function destroy(ItemModel $item) {
        $item->delete();

        return redirect('/items')->with('Message', 'One Item Deleted.');
    }
}
