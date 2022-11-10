<?php

namespace Modules\Movie\Livewire;

use App\Contracts\WithDownloadTables;
use App\Traits\HasTableDownload;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\WithPagination;
use Modules\Category\Models\Category;
use Modules\Movie\Models\Movie;
use Modules\Tag\Models\Tag;
use Nip\User\Models\User;

class MoviesTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'simple-tailwind';

    public array $category = [];
    public array $tag = [];

    public $minPrice;
    public $maxPrice;

    public string $venue = '';
    public string $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingCategory()
    {
        $this->resetPage();
    }

    public function updatingTag()
    {
        $this->resetPage();
    }

    public function getCategoriesProperty()
    {
        return Category::query()->get();
    }

    public function getMoviesProperty(): Collection|LengthAwarePaginator|array
    {
        return Movie::query()
            ->when($this->search, function ($movie) {
                $movie->where('title', 'like', "%$this->search%");
            })
            ->when($this->venue, function ($query) {
                $query->whereHas('venues', function ($query) {
                    $query->where('venues.name', 'like', "%$this->venue%");
                });
            })
            ->when($this->minPrice, function ($query) {
                $query->where('price', '>=', $this->minPrice);
            })
            ->when($this->maxPrice, function ($query) {
                $query->where('price', '<=', $this->maxPrice);
            })
            ->when($this->tag, function ($movie) {
                $movie->whereHas('tags', function ($tag) {
                    $tag->whereIn('id', $this->tag);
                })
                    ->orWhereHas('categories', function ($query) {
                        $query->whereHas('tags', function ($query) {
                            $query->whereIn('tags.id', $this->tag);
                        });
                    });
            })
            ->when($this->category, function ($movie) {
                $movie->whereHas('categories', function ($category) {
                    $category->whereIn('movie_category.category_id', $this->category);
                });
            })
            ->paginate(10);
    }

    public function getTagsProperty()
    {
        return Tag::query()->get();
    }

    public function render(): View
    {
        return view('movies.livewire.movies-table');
    }

}
