<footer class="bg-surface border-t border-border ">
    <div class="max-w-7xl mx-auto px-4 py-12 grid grid-cols-2 md:grid-cols-4 gap-8">
        <div>
            <h4 class="text-text-heading font-semibold mb-3">Shop</h4>
            <ul class="space-y-2 text-text-muted text-sm">
                <li><a href="#" class="hover:text-link-hover">All Products</a></li>
                <li><a href="#" class="hover:text-link-hover">New Arrivals</a></li>
                <li><a href="#" class="hover:text-link-hover">Sale</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-text-heading font-semibold mb-3">Support</h4>
            <ul class="space-y-2 text-text-muted text-sm">
                <li><a href="#" class="hover:text-link-hover">Contact Us</a></li>
                <li><a href="#" class="hover:text-link-hover">FAQs</a></li>
                <li><a href="#" class="hover:text-link-hover">Shipping</a></li>
            </ul>
        </div>
        <div class="col-span-2 md:col-span-2">
            <h4 class="text-text-heading font-semibold mb-3">Newsletter</h4>
            <p class="text-text-muted text-sm mb-3">Get 10% off your first order</p>
            <form class="flex gap-2" method="POST" action="{{ route('newsletter.subscribe') }}">
                <input type="email" placeholder="you@email.com" name="email" required
                    class=" text-text border-border border-0 border-b-2  focus:border-primary outline-none transition-colors duration-200  text-sm rounded-lg block w-full p-2.5  placeholder-text-muted" />
                <button type="submit"
                    class="bg-primary text-white px-6 py-2 rounded-lg font-semibold hover:opacity-90 transition-opacity cursor-pointer duration-200">
                    Subscribe
                </button>
            </form>
        </div>
    </div>
    <div class="border-t border-border py-6 text-center text-text-muted text-sm">
        &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
    </div>
</footer>
