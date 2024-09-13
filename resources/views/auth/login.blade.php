<x-guest-layout>
    <div class="flex min-h-screen bg-gradient-to-r from-purple-500 via-blue-500 to-pink-500">
        <!-- Left Side with Gradient Background -->
        <div class="w-1/2 bg-gradient-to-r from-purple-500 via-blue-500 to-pink-500 text-white flex flex-col justify-center p-12">
            <div class="max-w-md mx-auto">
                <h1 class="text-4xl font-bold mb-4">Welcome to Factory Admin Panel</h1>
                <p class="text-lg mb-6">Manage your factory operations with ease and efficiency. Our admin panel is designed to help you streamline processes and improve productivity.</p>
                <p class="text-lg">Start managing your operations today and take control of your factory’s performance.</p>
            </div>
        </div>

        <!-- Right Side with Login Form -->
        <div class="w-1/2 flex flex-col justify-center items-center p-8 bg-white">
            <div class="w-full max-w-md p-8 bg-gray-100 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-4 text-gray-800">Log in to Your Account</h2>
                <p class="text-gray-600 mb-6">Enter your credentials to access the Factory Admin Panel. If you don't have an account, please contact support.</p>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-purple-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-purple-500" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mb-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-purple-600 shadow-sm focus:ring-purple-500" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-primary-button class="bg-purple-600 hover:bg-purple-700 text-white">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
