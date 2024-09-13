<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Edit Employee Form -->
                    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- First Name -->
                        <div class="mb-4">
                            <label for="firstname" class="block text-sm font-medium text-gray-700">{{ __('First Name') }}</label>
                            <input type="text" id="firstname" name="firstname" value="{{ old('firstname', $employee->firstname) }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 sm:text-sm">
                            @error('firstname')
                                <span class="text-red-600 text-sm mt-2">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Last Name -->
                        <div class="mb-4">
                            <label for="lastname" class="block text-sm font-medium text-gray-700">{{ __('Last Name') }}</label>
                            <input type="text" id="lastname" name="lastname" value="{{ old('lastname', $employee->lastname) }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 sm:text-sm">
                            @error('lastname')
                                <span class="text-red-600 text-sm mt-2">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                            <input type="email" id="email" name="email" value="{{ old('email', $employee->email) }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 sm:text-sm">
                            @error('email')
                                <span class="text-red-600 text-sm mt-2">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Phone -->
                        <div class="mb-4">
                            <label for="phone" class="block text-sm font-medium text-gray-700">{{ __('Phone') }}</label>
                            <input type="text" id="phone" name="phone" value="{{ old('phone', $employee->phone) }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 sm:text-sm">
                            @error('phone')
                                <span class="text-red-600 text-sm mt-2">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Factory -->
                        <div class="mb-4">
                            <label for="factory_id" class="block text-sm font-medium text-gray-700">{{ __('Factory') }}</label>
                            <select id="factory_id" name="factory_id" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 sm:text-sm">
                                <option value="">{{ __('Select Factory') }}</option>
                                @foreach ($factories as $factory)
                                    <option value="{{ $factory->id }}" {{ $factory->id == old('factory_id', $employee->factory_id) ? 'selected' : '' }}>
                                        {{ $factory->factory_name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('factory_id')
                                <span class="text-red-600 text-sm mt-2">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex items-center justify-end mt-4 space-x-4">
                            <a href="{{ route('employees.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md font-semibold text-gray-700 bg-white hover:bg-gray-50">
                                {{ __('Cancel') }}
                            </a>
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-purple-500  border border-transparent rounded-md font-semibold text-white hover:bg-purple-600">
                                {{ __('Update Employee') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
