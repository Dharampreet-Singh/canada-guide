<x-guest-layout>
    <section class="h-screen">
        <div class="px-6 h-full text-gray-800">
            <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6">
                <div class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0">
                    <img src="{{ asset('images/WelcomeLogin.png') }}" class="w-full" alt="Welcome" />
                </div>
                <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                    <x-auth-card>
                        <x-slot name="logo">
                            <a href="/">
                                {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                            </a>
                        </x-slot>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />

                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" required autofocus />

                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                        name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                            <div class="block mt-4">
                                <a href="{{ route('register') }}"
                                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                                <x-primary-button class="ml-3 w-25">
                                    {{ __('Login') }}
                                </x-primary-button>

                                <a href="{{ url('auth/google') }}" style="margin-top: 20px;"
                                    class="btn btn-lg btn-success btn-block">
                                    <strong>Login With Google</strong>
                                </a>
                            </div>
                        </form>
                    </x-auth-card>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
