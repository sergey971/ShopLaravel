<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Category;
use App\Models\ColorProduct;
use App\Models\Product;
use App\Models\ProductTag;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('preview_img')) {
            $filename = time() . '_' . $request->file('preview_img')->getClientOriginalName();
            $request->file('preview_img')->move(public_path('images'), $filename);
            $data['preview_img'] = 'images/' . $filename;
        }

        $tagsIds = $data['tags'];
        $colorsIds = $data['colors'];
        unset($data['tags'], $data['colors']);

        $product = Product::updateOrCreate(['name' => $data['name']], $data);

        foreach ($tagsIds as $tagsId) {
            ProductTag::updateOrCreate([
                'product_id' => $product->id,
                'tag_id' => $tagsId
            ]);
        }

        foreach ($colorsIds as $colorsId) {
            ColorProduct::updateOrCreate([
                'product_id' => $product->id,
                'color_id' => $colorsId
            ]);
        }

        return redirect()->route('product.index');
    }
}
