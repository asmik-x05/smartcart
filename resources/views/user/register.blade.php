<x-layout>
    <section class="bg-surface text-text">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold ">
                <img class="w-8 h-8 mr-2" src="/images/logo/logo.png" alt="logo">
                {{ config('app.name', 'SmartCart') }}
            </a>


            <div class="w-full  rounded-lg shadow-md md:mt-0 sm:max-w-md xl:p-0 border border-border">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl ">
                        Register as a Customer
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('user.register.store') }}" method="POST">
                        @csrf
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium ">Your name <span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                class=" border-border border-0 border-b-2  focus:border-primary outline-none transition-colors duration-200  text-sm rounded-lg block w-full p-2.5  placeholder-text-muted"
                                placeholder="Enter your name" required>
                        </div>

                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium ">Your email <span
                                    class="text-red-500">*</span></label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class=" border-border border-0 border-b-2  focus:border-primary outline-none transition-colors duration-200  text-sm rounded-lg block w-full p-2.5  placeholder-text-muted"
                                placeholder="name@company.com" required>
                        </div>
                        <x-utils.password-input name="password" label="Password" placeholder="Enter your password"
                            id="password" />
                        <x-utils.password-input name="password_confirmation" label="Confirm Password"
                            placeholder="Confirm your password" id="password_confirmation" />

                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" aria-describedby="terms" type="checkbox"
                                    class="w-4 h-4 border  rounded " required>
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="font-light ">I accept the
                                    <a class="font-medium  hover:underline " href="#">Terms and
                                        Conditions</a></label>
                            </div>
                        </div>
                        <button type="submit"
                            class="w-full  font-medium rounded-lg text-gray-100 text-sm px-5 py-2.5 text-center bg-primary cursor-pointer ">Request
                            Registration</button>
                        <p class="text-sm font-light ">
                            Already have an account? <a href="{{ route('user.login') }}"
                                class="font-medium  hover:underline ">Login
                                here</a>
                        </p>
                    </form>
                </div>
            </div>

        </div>
    </section>
</x-layout>
