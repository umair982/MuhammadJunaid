<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:portfolio_categories,id',
            'tags' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,webp|max:2048',
            'url' => 'required|url',  // <-- make sure user provides a valid URL
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads/portfolio', 'public');
        }

        Portfolio::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'tags' => $request->tags,
            'image' => $imagePath,
            'url' => $request->url,  // <-- important
        ]);

        return redirect()->back()->with('success', 'Portfolio added successfully.');
    }

    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $request->validate([
            'title'       => 'required|string|max:255',
            'category_id' => 'required|exists:portfolio_categories,id',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Update Image
        if ($request->hasFile('image')) {

            // delete old
            if (!empty($portfolio->image) && File::exists(public_path($portfolio->image))) {
                File::delete(public_path($portfolio->image));
            }

            $file = $request->file('image');
            $name = time() . '_portfolio.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/portfolio'), $name);

            $portfolio->image = 'uploads/portfolio/' . $name;
        }

        $portfolio->update([
            'title'       => $request->title,
            'category_id' => $request->category_id,
            'tags'        => $request->tags,
        ]);

        return back()->with('success', 'Portfolio updated');
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        // delete image
        if (!empty($portfolio->image) && File::exists(public_path($portfolio->image))) {
            File::delete(public_path($portfolio->image));
        }

        $portfolio->delete();

        return back()->with('success', 'Portfolio deleted');
    }
}
