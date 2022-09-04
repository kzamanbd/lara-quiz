<x-guest-layout>
    <div class="bg-white-gray font-roboto dark:bg-dark-secondary dark:text-gray-300">
        <div class="flex items-center justify-center h-screen">
            <div class="w-full max-w-sm p-8 bg-white rounded-md shadow-md">
                <div class="flex items-center justify-center mb-6">
                    <svg class="w-10 h-10" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z"
                            fill="#4C51BF" stroke="#4C51BF" strokewidth="2" strokelinecap="round" strokelinejoin="round">
                        </path>
                        <path
                            d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z"
                            fill="white"></path>
                    </svg>
                    <span class="text-3xl font-semibold text-gray-700">Analyzen</span>
                </div>
                <p class="text-2xl font-semibold text-gray-700">Welcome to Analyzen!</p>
                <p class="text-xs text-gray-600">Please sign-in to your account and start the adventure</p>

                <form class="mt-4" method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <label class="block">
                        <span class="text-sm text-gray-700">Email</span>
                        <input type="email" name="email"
                            class="block w-full mt-1 border-gray-200 rounded-md focus:border-primary-600 focus:ring focus:ring-opacity-40 focus:ring-primary-600"
                            value="{{ old('email', 'kzamanbn@gmail.com') }}" required autofocus>
                    </label>

                    <label class="block mt-3">
                        <span class="text-sm text-gray-700">Password</span>
                        <input type="password" name="password"
                            class="block w-full mt-1 border-gray-200 rounded-md focus:border-primary-600 focus:ring focus:ring-opacity-40 focus:ring-primary-600"
                            value="password" required autocomplete="current-password">
                    </label>

                    <div class="flex items-center justify-between mt-4">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="remember"
                                class="text-indigo-600 border-gray-200 rounded-md focus:border-primary-600 focus:ring focus:ring-opacity-40 focus:ring-primary-600">
                            <span class="mx-2 text-sm text-gray-600">Remember me</span>
                        </label>

                        <a class="block text-sm text-primary-600 fontme hover:underline"
                            {{ route('password.request') }}>
                            Forgot your password?
                        </a>
                    </div>

                    <div class="mt-6">
                        <button type="submit"
                            class="mt-6 w-full px-4 py-2 text-sm text-center flex items-center justify-center text-white bg-primary-600 rounded-md focus:outline-none hover:bg-primary-700">
                            Sign in
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-guest-layout>
