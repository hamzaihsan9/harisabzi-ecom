<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Plant;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::withCount('plants')->get();

        $query = Plant::with('category');

        // Search Filter
        if ($request->filled('q')) {
            $search = $request->input('q');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('urdu_name', 'like', "%{$search}%")
                  ->orWhere('short_description', 'like', "%{$search}%")
                  ->orWhere('scientific_name', 'like', "%{$search}%");
            });
        }

        // Category Filter
        if ($request->filled('category') && $request->input('category') !== 'all') {
            $catSlug = $request->input('category');
            $query->whereHas('category', function ($q) use ($catSlug) {
                $q->where('slug', $catSlug);
            });
        }

        // Max Price Filter (PKR)
        if ($request->filled('max_price')) {
            $query->where('price_pkr', '<=', (int)$request->input('max_price'));
        }

        // Difficulty Filter
        if ($request->filled('difficulty') && $request->input('difficulty') !== 'all') {
            $query->where('difficulty', $request->input('difficulty'));
        }

        // Sorting
        $sort = $request->input('sort', 'featured');
        switch ($sort) {
            case 'price_asc':
                $query->orderBy('price_pkr', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('price_pkr', 'desc');
                break;
            case 'rating':
                $query->orderBy('rating', 'desc');
                break;
            case 'newest':
                $query->latest();
                break;
            default:
                $query->orderBy('is_featured', 'desc')->latest();
                break;
        }

        $plants = $query->paginate(12)->withQueryString();
        $featuredPlants = Plant::where('is_featured', true)->take(4)->get();
        $maxPriceInDb = Plant::max('price_pkr') ?? 2000;

        return view('marketplace.index', compact(
            'plants',
            'categories',
            'featuredPlants',
            'maxPriceInDb',
            'sort'
        ));
    }

    public function show($slug)
    {
        $plant = Plant::where('slug', $slug)->with('category')->firstOrFail();
        $relatedPlants = Plant::where('category_id', $plant->category_id)
            ->where('id', '!=', $plant->id)
            ->take(4)
            ->get();

        return view('marketplace.show', compact('plant', 'relatedPlants'));
    }

    public function apiQuickView($id)
    {
        $plant = Plant::with('category')->findOrFail($id);
        return response()->json([
            'id' => $plant->id,
            'name' => $plant->name,
            'urdu_name' => $plant->urdu_name,
            'scientific_name' => $plant->scientific_name,
            'category' => $plant->category->name,
            'price_pkr' => $plant->price_pkr,
            'formatted_price' => $plant->formatted_price,
            'formatted_original_price' => $plant->formatted_original_price,
            'discount' => $plant->discount_percentage,
            'image_url' => $plant->image_url,
            'short_description' => $plant->short_description,
            'description' => $plant->description,
            'pot_size' => $plant->pot_size,
            'growth_stage' => $plant->growth_stage,
            'harvest_time' => $plant->harvest_time,
            'sunlight' => $plant->sunlight,
            'watering' => $plant->watering,
            'difficulty' => $plant->difficulty,
            'rating' => $plant->rating,
            'reviews_count' => $plant->reviews_count,
            'badge' => $plant->badge,
            'origin_city' => $plant->origin_city,
        ]);
    }
}
