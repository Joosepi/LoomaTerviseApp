<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">Your Pets</h3>
                    <p>Total Pets: {{ $petCount }}</p>
                    
                    @if($pets->count() > 0)
                        <ul class="mt-4">
                            @foreach($pets as $pet)
                                <li class="mb-2">{{ $pet->name }} - {{ $pet->species }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p class="mt-4">You haven't added any pets yet.</p>
                    @endif

                    <a href="{{ route('pets.create') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">Add a Pet</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>