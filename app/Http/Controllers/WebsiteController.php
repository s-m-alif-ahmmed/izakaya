<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class WebsiteController extends Controller
{
    private static  $searchItems ;

    public function index()
    {
        return view('website.home.index',[
            'categories' => Category::all(),
        ]);
    }

    public function menuPage($id)
    {
        $items = Item::where('status', 1)
            ->where('category_id', $id)
            ->paginate(1);

        return view('website.home.menu-page',[
            'categories' => Category::all(),
            'items' =>  $items,
        ]);
    }

    public function orderOnline()
    {
        $items = Item::where('status', 1)
            ->paginate(4);

        return view('website.home.order-online',[
            'categories' => Category::all(),
            'items' =>  $items,
        ]);
    }

    public function story()
    {
        return view('website.home.our-story');
    }

    public function detail($id)
    {
        return view('website.home.detail',[
            'item' => Item::find($id),
        ]);
    }

    public function search()
    {
        return view('website.search.search');
    }

    public function searchResult(Request $request)
    {
        $searchQuery = $request->input('search');

        if ($searchQuery) {
            $searchItems = Item::where('name', 'LIKE', '%' . $searchQuery . '%')
                ->orWhere('description', 'LIKE', '%' . $searchQuery . '%')
                ->where('status', 1)
                ->latest()
                ->paginate(1); // Change 10 to the number of items you want to display per page.

            if ($searchItems->isEmpty()) {
                // No matching results found.
                return redirect()->back()->with('message', 'No matching result found.');
            } else {
                // Display the search results.
                return view('website.search.search-result', compact('searchItems'));
            }
        } else {
            // If no search query is provided, redirect back with a message.
            return redirect()->back()->with('message', 'Please enter a search query.');
        }
    }


}
