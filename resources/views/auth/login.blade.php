<x-layout>
    <section class="bg-gray-50 dark:bg-gray-900">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Log in
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="/login" method="POST">
                            @csrf
                            <div>
                                <x-input.label for="email">Email</x-input.label>
                                <x-input.input-field type="email" name="email" id="email" placeholder="name@company.com" :value="old('email')"></x-input.input-field>
                                <x-input.field-error type="email"></x-input.field-error>
                            </div>
                            <div>
                                <x-input.label for="password">Password</x-input.label>
                                <x-input.input-field type="password" name="password" id="password" placeholder="••••••••"></x-input.input-field>
                                <x-input.field-error type="password"></x-input.field-error>
                            </div>
                            <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Log in</button>
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Don't have an account? <a href="{{ route('register') }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Register here</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
</x-layout>