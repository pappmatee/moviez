<?php

namespace Modules\Movie\Livewire;

use App\Contracts\WithDownloadTables;
use App\Traits\HasTableDownload;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\WithPagination;
use Modules\Movie\Models\Movie;
use Nip\User\Models\User;

class MoviesTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'simple-tailwind';

    public string $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function getMoviesProperty(): Collection|LengthAwarePaginator|array
    {
        return Movie::query()
            ->with('categories')
            ->when($this->search, fn($query, $search) => $query->filter($search))
            ->paginate(20);
    }


    public function render(): View
    {
        return view('movies.livewire.movies-table');
    }

}
