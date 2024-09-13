<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Delete Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Are you sure you want to delete this employee?</h3>

                    <!-- Display Employee Information -->
                    <div class="mb-4">
                        <p><strong>{{ __('First Name:') }}</strong> {{ $employee->firstname }}</p>
                        <p><strong>{{ __('Last Name:') }}</strong> {{ $employee->lastname }}</p>
                        <p><strong>{{ __('Email:') }}</strong> {{ $employee->email }}</p>
                        <p><strong>{{ __('Phone:') }}</strong> {{ $employee->phone }}</p>
                        <p><strong>{{ __('Factory:') }}</strong> {{ $employee->factory->factory_name ?? 'N/A' }}</p>
                    </div>

                    <!-- Delete Confirmation Form -->
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('employees.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-white hover:bg-gray-600">
                                {{ __('Cancel') }}
                            </a>
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-white hover:bg-red-600 ml-4">
                                {{ __('Delete') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
