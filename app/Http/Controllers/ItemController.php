<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function getCreateItem()
    {
        return view('create');
    }

    public function createItem(ItemRequest $request)
    {
        $path = $request->file('image')->store('public/images');
        $path = substr($path, strlen('public/'));
        Item::create([
            'category' => $request->category,
            'name' => $request->name,
            'price' => $request->price,
            'amount' => $request->amount,
            'image' => $path,
        ]);
        return redirect(route('getItems'));
    }

    public function getItems()
    {
        $items = Item::all();
        return view('view', ['itemz' => $items]);
    }

    public function getItemById($id)
    {
        $item = Item::find($id);
        return view('update', ['item' => $item]);
    }

    public function updateItem(ItemRequest $request, $id)
    {
        $item = Item::find($id);
        $item->update([
            'category' => $request->category,
            'name' => $request->name,
            'price' => $request->price,
            'amount' => $request->amount,
        ]);
        return redirect(route('getItems'));
    }

    public function deleteItem($id)
    {
        Item::destroy($id);
        return redirect(route('getItems'));
    }

    public function getHomePage()
    {
        return view('welcome2');
    }

    public function viewImage($id)
    {
        $item = Item::find($id);
        return view('image', ['item' => $item]);
    }
}
