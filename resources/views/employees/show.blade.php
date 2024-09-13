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
                    <!-- Breadcrumb -->
                    <nav class="mb-4" aria-label="Breadcrumb">
                        <ol class="flex items-center space-x-2 text-sm text-gray-500">
                            <li>
                                <a href="#" class="inline-flex items-center">
                                    <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                    {{ __('Home') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('employees.index') }}" class="inline-flex items-center">
                                    <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                    {{ __('Employees') }}
                                </a>
                            </li>
                            <li aria-current="page" class="flex items-center">
                                <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                <span class="text-gray-800">{{ $employee->firstname }} {{ $employee->lastname }}</span>
                            </li>
                        </ol>
                    </nav>

                    <!-- Employee Information -->
                    <div class="mb-4">
                        <h2 class="text-xl font-semibold mb-2">{{ __('Employee Information') }}</h2>
                        <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-300">
                                        {{ __('Field') }}
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-300">
                                        {{ __('Value') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300 font-medium text-gray-900">{{ __('First Name') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300 text-gray-500">{{ $employee->firstname }}</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300 font-medium text-gray-900">{{ __('Last Name') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300 text-gray-500">{{ $employee->lastname }}</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300 font-medium text-gray-900">{{ __('Email') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300 text-gray-500">{{ $employee->email ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300 font-medium text-gray-900">{{ __('Phone') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300 text-gray-500">{{ $employee->phone ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300 font-medium text-gray-900">{{ __('Factory') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300 text-gray-500">{{ $employee->factory->factory_name ?? 'N/A' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex justify-end space-x-4 mt-6">
                        <a href="{{ route('employees.edit', $employee->id) }}" class="inline-flex items-center px-4 py-2 bg-purple-500 border border-transparent rounded-md font-semibold text-white hover:bg-purple-600">
                            {{ __('Edit') }}
                        </a>
                        <a href="{{ route('employees.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md font-semibold text-gray-700 bg-white hover:bg-gray-100">
                            {{ __('Cancel') }}
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
