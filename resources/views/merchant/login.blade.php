<x-layout>
    <section class="bg-surface text-text">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold ">
                <img class="w-8 h-8 mr-2" src="/images/logo/logo.png" alt="logo">
                {{ config('app.name', 'SmartCart') }}
            </a>
            <div class="w-full  rounded-lg shadow-md md:mt-0 sm:max-w-md xl:p-0  border border-border ">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl ">
                        Login as a Merchant
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('merchant.login.store') }}" method="POST">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium ">Your email</label>
                            <input type="email" name="email" id="email"
                                class=" border-border border-0 border-b-2  focus:border-primary outline-none transition-colors duration-200  text-sm rounded-lg block w-full p-2.5  placeholder-text-muted"
                                placeholder="name@company.com" required>
                        </div>

                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium ">Password</label>
                            <input type="password" name="password" id="password"
                                class=" border-border border-0 border-b-2  focus:border-primary outline-none transition-colors duration-200  text-sm rounded-lg block w-full p-2.5  placeholder-text-muted"
                                placeholder="Enter your password" required>
                        </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" aria-describedby="terms" type="checkbox"
                                    class="w-4 h-4 border rounded ">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="font-light ">Remember me</label>
                            </div>
                        </div>

                        <button type="submit"
                            class="w-full text-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-primary cursor-pointer ">Login</button>
                        <p class="text-sm font-light ">
                            Don't have an account? <a href="{{ route('merchant.register') }}"
                                class="font-medium  hover:underline ">Register
                                here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>
