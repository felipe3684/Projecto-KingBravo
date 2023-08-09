<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <link rel="shortcut icon" href="{{ asset('/img-app/logo.jpg') }}">
    <link rel="stylesheet" href="css/style.css">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Recuérdame') }}</span>
            </label>
        </div>

        <div class="reg-pass">
            @if (Route::has('register'))
                <a class="" href="{{ route('register') }}">
                    {{ __('Registrate') }}
                </a>
            @endif
            @if (Route::has('password.request'))
                <a class=" " href="{{ route('password.request') }}">
                    {{ __('Olvidaste tu contraseña?') }}
                </a>
            @endif

            <x-primary-button class="reg-pass-b">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
