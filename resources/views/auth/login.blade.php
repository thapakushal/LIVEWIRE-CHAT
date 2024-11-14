<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 font-semibold text-center text-green-500" :status="session('status')" />

    <!-- Login Form -->
    <form method="POST" action="{{ route('login') }}" class="max-w-md p-8 mx-auto bg-white rounded-lg shadow-lg dark:bg-gray-800">
        @csrf

        <!-- Title -->
        <h2 class="mb-6 text-2xl font-bold text-center text-gray-800 dark:text-white">{{ __('Sign In') }}</h2>

        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Email')" class="font-semibold text-gray-700 dark:text-gray-200" />
            <x-text-input id="email" class="block w-full mt-2 border-gray-300 rounded-md dark:border-gray-700 dark:bg-gray-700 dark:text-gray-200 focus:border-indigo-500 focus:ring-indigo-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('Password')" class="font-semibold text-gray-700 dark:text-gray-200" />
            <x-text-input id="password" class="block w-full mt-2 border-gray-300 rounded-md dark:border-gray-700 dark:bg-gray-700 dark:text-gray-200 focus:border-indigo-500 focus:ring-indigo-500" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between mb-4">
            <label for="remember_me" class="inline-flex items-center text-sm text-gray-600 dark:text-gray-400">
                <input id="remember_me" type="checkbox" class="text-indigo-600 rounded shadow-sm dark:bg-gray-700 dark:border-gray-700 focus:ring-indigo-500" name="remember">
                <span class="ml-2">{{ __('Remember me') }}</span>
            </label>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 dark:text-indigo-400 hover:underline">{{ __('Forgot password?') }}</a>
            @endif
        </div>

        <!-- Submit Button -->
        <div class="flex justify-center">
            <x-primary-button class="w-full py-3 font-semibold text-white transition duration-200 ease-in-out bg-indigo-600 rounded-md hover:bg-indigo-700">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
