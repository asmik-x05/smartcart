<x-layout>
    <section class="bg-surface text-text">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold ">
                <img class="w-8 h-8 mr-2" src="/images/logo/logo.png" alt="logo">
                {{ config('app.name', 'SmartCart') }}
            </a>
            @if (session('success'))
                <div class="w-full md:mt-0 sm:max-w-md xl:p-0   ">
                    <div
                        class="flex flex-col items-center justify-center px-6 py-8 mx-auto lg:py-0 bg-surface text-text">
                        <h3 class="text-2xl font-bold mb-4"><i
                                class="ri-check-line bg-green-800 text-green-300 p-2 rounded-full"></i>
                        </h3>
                        <p>Password reset link has been sent to your email.</p>
                        <a href="{{ url('/merchant/login') }} "
                            class="mt-4 inline-block bg-primary text-white px-4 py-2 rounded">Go
                            to
                            Login</a>
                    </div>
                </div>
            @else
                <div class="w-full  rounded-lg shadow-md md:mt-0 sm:max-w-md xl:p-0  border border-border ">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl ">
                            Forgot Password
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="{{ route('merchant.forgot-password') }}"
                            method="POST">
                            @csrf
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium ">Your email</label>
                                <input type="email" name="email" id="email"
                                    class=" border-border border-0 border-b-2  focus:border-primary outline-none transition-colors duration-200  text-sm rounded-lg block w-full p-2.5  placeholder-text-muted"
                                    placeholder="name@company.com" required>
                            </div>


                            <div class="text-end"> <a href="{{ url('/merchant/login') }}"
                                    class="font-medium hover:underline text-primary ">Back to Login</a></div>

                            <button type="submit"
                                class="w-full text-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-primary cursor-pointer ">Send
                                Reset Link</button>

                        </form>

                    </div>
            @endif
        </div>
    </section>
</x-layout>
