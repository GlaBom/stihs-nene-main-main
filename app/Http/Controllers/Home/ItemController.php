<?php

namespace App\Http\Controllers\Home;

use Image;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\ItemInstance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::with('itemInstances')
        ->withCount('itemInstances')
        ->get();

        $categories = Category::all();
        return view('items.index', compact('items', 'categories'));
    }

    public function store(Request $request)
    {
        $item = Item::create([
            'category_id' => $request->category_name,
            'item_name' => $request->item_name,
            'item_description' => $request->item_description,
            'item_specification' => $request->item_specification,
        ]);

        for ($i = 1; $i <= $request->quantity; $i++) {
            $uuid = Str::uuid()->toString();
            $shortenedUuid = substr($uuid, 0, 13); // Extract the first 13 characters

            ItemInstance::create([
                'item_id' => $item->id,
                'status' => 'Working',
                'serial_number' => $shortenedUuid,
            ]);
        }
        return redirect()->back()->with('success', 'Item added successfully');
    }

    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        $item->update([
            'category_id' => $request->category_name,
            'item_name' => $request->item_name,
            'item_description' => $request->item_description,
            'item_specification' => $request->item_specification,
        ]);

        return redirect()->back()->with('success', 'Item updated successfully');
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect()->back()->with('success', 'Item deleted successfully');
    }

    public function show($id)
    {
        $item = Item::find($id);
        $itemInstances = ItemInstance::with('item')->where('item_id', $id)->get();
        return view('items.show', compact('item', 'itemInstances'));
    }
}
