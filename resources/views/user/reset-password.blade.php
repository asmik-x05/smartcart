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
                        Reset Password
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('user.reset-password') }}" method="POST">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium ">Your email </label>
                            <input type="email" name="email" id="email" value="" disabled
                                class=" border-border border-0 border-b-2  focus:border-primary outline-none transition-colors duration-200  text-sm rounded-lg block w-full p-2.5  placeholder-text-muted"
                                placeholder="name@company.com" required>
                        </div>
                        <x-utils.password-input name="password" label="Password" placeholder="Enter your password"
                            id="password" />
                        <x-utils.password-input name="password_confirmation" label="Confirm Password"
                            placeholder="Confirm your password" id="password_confirmation" />


                        <button type="submit"
                            class="w-full  font-medium rounded-lg text-gray-100 text-sm px-5 py-2.5 text-center bg-primary cursor-pointer ">Reset
                            Password</button>
                    </form>
                </div>
            </div>

        </div>
    </section>
</x-layout>
