<div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center space-x-3">
        <div class="sm:w-1/6">
            <div>
                <div class="mt-1">
                    <input wire:model="search" type="text" name="search" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Movie...">
                </div>
            </div>
        </div>

        <div class="sm:w-1/6">
            <div>
                <div class="mt-1">
                    <input wire:model="venue" type="text" name="search" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Venue...">
                </div>
            </div>
        </div>
        <div class="sm:w-1/6">
            <div>
                <div class="mt-1 flex">
                    <input wire:model="minPrice" type="text" name="price" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Min. price...">
                    <input wire:model="maxPrice" type="text" name="price" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Max. price..">
                </div>
            </div>
        </div>

    </div>
    <div class="mt-8 flex space-x-6">
        <div class="flex-none lg:pr-8">
            <div class="relative flex items-start flex-col">
                @foreach($this->categories as $category)
                    <div class="flex">
                        <div class="flex h-5 items-center">
                            <input wire:model="category" value="{{ $category->id }}" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="comments" class="font-medium text-gray-700">{{ $category->name }}</label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="flex flex-1 flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 sm:pr-6">Title</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                @forelse($this->movies as $movie)
                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                            {{ $movie->title }}
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $this->movies->links() }}
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-none lg:pr-8">
            <div class="relative flex items-start flex-col">
                @foreach($this->tags as $tag)
                    <div class="flex">
                        <div class="flex h-5 items-center">
                            <input wire:model="tag" value="{{ $tag->id }}" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="comments" class="font-medium text-gray-700">{{ $tag->name }}</label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
