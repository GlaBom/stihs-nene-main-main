<?php

namespace App\Http\Controllers;

use App\Models\ItemInstance;
use Illuminate\Http\Request;

class ItemInstanceController extends Controller
{
    public function update(Request $request, $id)
    {
        $itemInstance = ItemInstance::find($id);
        $itemInstance->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Item instance updated successfully');
    }

    public function destroy($id)
    {
        $itemInstance = ItemInstance::find($id);
        $itemInstance->delete();

        return redirect()->back()->with('success', 'Item instance deleted successfully');
    }

}
