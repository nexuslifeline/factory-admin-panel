<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-4">
                        <h1 class="text-lg font-bold">{{ $employee->firstname }} {{ $employee->lastname }}</h1>
                        <a href="{{ route('employees.edit', $employee->id) }}" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-white hover:bg-blue-600">
                            {{ __('Edit') }}
                        </a>
                    </div>

                    <!-- Employee Details -->
                    <div class="mb-4">
                        <h2 class="text-xl font-semibold mb-2">{{ __('Employee Information') }}</h2>
                        <p><strong>{{ __('First Name:') }}</strong> {{ $employee->firstname }}</p>
                        <p><strong>{{ __('Last Name:') }}</strong> {{ $employee->lastname }}</p>
                        <p><strong>{{ __('Email:') }}</strong> {{ $employee->email ?? 'N/A' }}</p>
                        <p><strong>{{ __('Phone:') }}</strong> {{ $employee->phone ?? 'N/A' }}</p>
                        <p><strong>{{ __('Factory:') }}</strong> {{ $employee->factory->factory_name ?? 'N/A' }}</p>
                    </div>

                    <!-- Back Button -->
                    <div>
                        <a href="{{ route('employees.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-white hover:bg-gray-600">
                            {{ __('Back to List') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
