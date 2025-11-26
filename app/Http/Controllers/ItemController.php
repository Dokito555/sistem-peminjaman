<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ItemController extends Controller {
    public function index() {
        $items = Item::latest()->paginate(10);
        return view('items.index', compact('items'));
    }

    public function create() {
        return view('items.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'quantity' => 'required|integer|min:0',
            'available_quantity' => 'required|integer|min:0',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('items', 'public');
        }

        Item::create($data);

        return redirect()->route('items.index')->with('success', 'barang berhasil ditambahkan');
    }

    public function show(Item $item) {
        return view('items.show', compact('item'));
    }

    public function update(Request $request, Item $item) {
       $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'quantity' => 'required|integer|min:0',
            'available_quantity' => 'required|integer|min:0',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($item->image) {
                Storage::disk('public')->delete($item->image);
            }
            $data['image'] = $request->file('image')->store('items', 'public');
        }

        $item->update($data);
        return redirect()->route('items.index')->with('success', 'barang berhasil di update');
    }

    public function destroy(Item $item) {
        if ($item->image) {
            Storage::disk('public')->delete($item->image);
        }

        $item->delete();

        return redirect()->route('items.index')->with('sucess', 'barang berhasil dihapus');
    }
}
