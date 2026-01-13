<footer class="bg-white border-t border-slate-200 mt-auto">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="col-span-1 md:col-span-1">
                <a href="{{ url('/') }}" class="text-xl font-bold text-slate-900 flex items-center mb-4">
                    <i class="fa-solid fa-bolt mr-2 text-brand-500"></i> ElectroManager
                </a>
                <p class="text-slate-500 text-sm">
                    Providing top-quality hiking gear and home appliances since 2025. Modern living meets outdoor adventure.
                </p>
            </div>
            
            <div>
                <h3 class="text-sm font-semibold text-slate-900 tracking-wider uppercase mb-4">Shop</h3>
                <ul class="space-y-3">
                    <li><a href="{{ url('/produits/hicking') }}" class="text-slate-500 hover:text-brand-600 text-sm transition">Hiking Gear</a></li>
                    <li><a href="{{ url('/produits/electromenager') }}" class="text-slate-500 hover:text-brand-600 text-sm transition">Appliances</a></li>
                    <li><a href="#" class="text-slate-500 hover:text-brand-600 text-sm transition">New Arrivals</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-sm font-semibold text-slate-900 tracking-wider uppercase mb-4">Support</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-slate-500 hover:text-brand-600 text-sm transition">Contact Us</a></li>
                    <li><a href="#" class="text-slate-500 hover:text-brand-600 text-sm transition">FAQs</a></li>
                    <li><a href="#" class="text-slate-500 hover:text-brand-600 text-sm transition">Shipping & Returns</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-sm font-semibold text-slate-900 tracking-wider uppercase mb-4">Stay Connected</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-slate-400 hover:text-brand-500 transition">
                        <span class="sr-only">Facebook</span>
                        <i class="fab fa-facebook fa-lg"></i>
                    </a>
                    <a href="#" class="text-slate-400 hover:text-brand-500 transition">
                        <span class="sr-only">Twitter</span>
                        <i class="fab fa-twitter fa-lg"></i>
                    </a>
                    <a href="#" class="text-slate-400 hover:text-brand-500 transition">
                        <span class="sr-only">Instagram</span>
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-8 border-t border-slate-200 pt-8 md:flex md:items-center md:justify-between">
            <p class="text-sm text-slate-400">
                &copy; {{ date('Y') }} ElectroManager. All rights reserved.
            </p>
        </div>
    </div>
</footer>
