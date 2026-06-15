<x-layout>
    <section class="bg-surface text-text">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold ">
                <img class="w-8 h-8 mr-2" src="/images/logo/logo.png" alt="logo">
                {{ config('app.name', 'SmartCart') }}
            </a>
            @if (!config('app.merchant_registration_enabled'))
                <div class="w-full  rounded-lg shadow-md md:mt-0 sm:max-w-md xl:p-0  border border-border bg-surface">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl ">
                            Merchant Registration is Currently Closed
                        </h1>
                        <p class="text-sm font-light">
                            We are not accepting new merchant registrations at this time. Please check back later.
                        </p>
                    </div>
                </div>
            @elseif (session('success'))
                <div
                    class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 bg-surface text-text">
                    <h3 class="text-2xl font-bold mb-4"><i
                            class="ri-check-line bg-green-800 text-green-300 p-2 rounded-full"></i>
                    </h3>
                    <p>Your submission has been received successfully. </p>
                    <p>We will review it and get back to you shortly.</p>
                    <a href="{{ route('home') }}" class="mt-4 inline-block bg-primary text-white px-4 py-2 rounded">Go
                        to
                        Home</a>
                </div>
            @else
                <div class="w-full  rounded-lg shadow-md md:mt-0 sm:max-w-md xl:p-0 border border-border">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl ">
                            Register as a Merchant
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="{{ route('merchant.register.store') }}"
                            method="POST">
                            @csrf
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium ">Your name <span
                                        class="text-red-500">*</span></label>
                                <input type="text" name="name" id="name"
                                    class=" border-border border-0 border-b-2  focus:border-primary outline-none transition-colors duration-200  text-sm rounded-lg block w-full p-2.5  placeholder-text-muted"
                                    placeholder="Enter your name" required>
                            </div>

                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium ">Your email <span
                                        class="text-red-500">*</span></label>
                                <input type="email" name="email" id="email"
                                    class=" border-border border-0 border-b-2  focus:border-primary outline-none transition-colors duration-200  text-sm rounded-lg block w-full p-2.5  placeholder-text-muted"
                                    placeholder="name@company.com" required>
                            </div>
                            <div>
                                <label for="contact_no" class="block mb-2 text-sm font-medium ">Contact Number <span
                                        class="text-red-500">*</span></label>
                                <input type="text" name="contact_no" id="contact_no"
                                    class=" border-border border-0 border-b-2  focus:border-primary outline-none transition-colors duration-200  text-sm rounded-lg block w-full p-2.5  placeholder-text-muted"
                                    placeholder="Enter your contact number" maxlength="10" required>
                            </div>
                            <div>
                                <label for="message" class="block mb-2 text-sm font-medium ">Message <span
                                        class="text-red-500">*</span></label>
                                <textArea
                                    class=" border-border border-0 border-b-2  focus:border-primary outline-none transition-colors duration-200  text-sm rounded-lg block w-full p-2.5  placeholder-text-muted"
                                    placeholder="Enter your message" id="message" name="message" rows="4" required></textArea>

                            </div>
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
                                Already have an account? <a href="{{ route('merchant.login') }}"
                                    class="font-medium  hover:underline ">Login
                                    here</a>
                            </p>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </section>
</x-layout>
