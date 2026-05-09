<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;
use Throwable;

class HomeController extends Controller
{
    public function __invoke()
    {
        $school = config('school.profile');

        return view('pages.home', [
            'school' => $school,
            'navGroups' => config('school.navigation'),
            'slides' => config('school.slides'),
            'notices' => config('school.notices'),
            'facilities' => config('school.facilities'),
            'messages' => config('school.messages'),
            'aboutHighlights' => config('school.about_highlights'),
            'reviews' => config('school.reviews'),
            'galleryItems' => $this->galleryItems(),
            'pageTitle' => "{$school['name']} | Maniram",
            'pageDescription' => "{$school['name']} school website for admissions, academics, facilities, gallery and contact information.",
        ]);
    }

    private function galleryItems(): Collection
    {
        $fallbackItems = collect(config('school.gallery_fallback'));

        try {
            if (! Schema::hasTable('galleries')) {
                return $fallbackItems;
            }

            $galleryItems = Gallery::query()
                ->published()
                ->recent()
                ->take(6)
                ->get()
                ->map(fn (Gallery $gallery): array => [
                    'title' => $gallery->title,
                    'category' => $gallery->category,
                    'image' => $gallery->image_url ?? $fallbackItems->first()['image'],
                ]);

            return $galleryItems->isNotEmpty() ? $galleryItems : $fallbackItems;
        } catch (Throwable) {
            return $fallbackItems;
        }
    }
}
