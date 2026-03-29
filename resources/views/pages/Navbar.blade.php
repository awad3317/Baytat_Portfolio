<header class="fixed top-0 inset-x-0 z-50 transition-all duration-300 bg-slate-950/80 backdrop-blur-lg border-b border-slate-800/50 shadow-sm" id="main-navbar">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="#landing" class="flex-shrink-0 transition-transform duration-300 hover:scale-105 flex items-center">
                <img src="{{ asset('assets/images/baytat.png') }}" alt="بايتات للحلول التقنية" class="h-16 md:h-20 w-auto object-contain drop-shadow-[0_0_15px_rgba(255,255,255,0.15)] scale-110 origin-right brightness-125">
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center gap-8">
                <ul class="flex items-center gap-6 text-sm font-bold text-slate-300">
                    <li><a href="#landing" class="hover:text-cyan-400 transition-colors duration-200 relative group">الرئيسية
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-cyan-500 transition-all duration-300 group-hover:w-full"></span>
                        </a></li>
                    <li><a href="#about" class="hover:text-cyan-400 transition-colors duration-200 relative group">من نحن
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-cyan-500 transition-all duration-300 group-hover:w-full"></span>
                        </a></li>
                    <li><a href="#services" class="hover:text-cyan-400 transition-colors duration-200 relative group">خدماتنا
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-cyan-500 transition-all duration-300 group-hover:w-full"></span>
                        </a></li>
                    <li><a href="#projects" class="hover:text-cyan-400 transition-colors duration-200 relative group">أعمالنا
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-cyan-500 transition-all duration-300 group-hover:w-full"></span>
                        </a></li>
                    <li><a href="#contact" class="px-5 py-2.5 bg-cyan-600 hover:bg-cyan-500 text-white rounded-xl shadow-md shadow-cyan-600/30 transition-all duration-200">تواصل معنا</a></li>
                </ul>
            </nav>

            <!-- Mobile Menu Toggle -->
            <button class="md:hidden p-2 text-slate-300 hover:text-cyan-400 transition-colors focus:outline-none" id="mobile-menu-btn">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </div>
    
    <!-- Mobile Navigation -->
    <div class="md:hidden hidden bg-slate-900 border-t border-slate-800 shadow-xl overflow-hidden" id="mobile-menu">
        <ul class="flex flex-col px-4 py-4 space-y-2 text-slate-300 font-bold">
            <li><a href="#landing" class="block px-4 py-3 rounded-xl hover:bg-slate-800 hover:text-cyan-400 transition-colors">الرئيسية</a></li>
            <li><a href="#about" class="block px-4 py-3 rounded-xl hover:bg-slate-800 hover:text-cyan-400 transition-colors">من نحن</a></li>
            <li><a href="#services" class="block px-4 py-3 rounded-xl hover:bg-slate-800 hover:text-cyan-400 transition-colors">خدماتنا</a></li>
            <li><a href="#projects" class="block px-4 py-3 rounded-xl hover:bg-slate-800 hover:text-cyan-400 transition-colors">أعمالنا</a></li>
            <li><a href="#contact" class="block px-4 py-3 mt-2 text-center bg-cyan-600 hover:bg-cyan-500 text-white rounded-xl shadow-md">تواصل معنا</a></li>
        </ul>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if(mobileBtn && mobileMenu) {
            mobileBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
    });
</script>