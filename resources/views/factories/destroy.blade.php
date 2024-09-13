<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Delete Factory') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">{{ __('Are you sure you want to delete this factory?') }}</p>

                    <form method="POST" action="{{ route('factories.destroy', $factory->id) }}">
                        @csrf
                        @method('DELETE')
                        <div class="flex items-center">
                            <button type="submit" class="px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-white hover:bg-red-600">
                                {{ __('Delete Factory') }}
                            </button>
                            <a href="{{ route('factories.index') }}" class="ml-4 px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-white hover:bg-gray-600">
                                {{ __('Cancel') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
