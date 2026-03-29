<section id="services" class="py-20 lg:py-32 bg-slate-950 relative">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col items-center justify-center text-center mb-16">
            <div class="inline-flex items-center justify-center p-3 sm:p-4 bg-slate-900/50 rounded-2xl mb-6 shadow-sm ring-1 ring-slate-800" data-aos="zoom-in" data-aos-duration="600">
                <img src="{{ asset('assets/images/our service icon.svg') }}" alt="services" class="w-10 h-10 sm:w-12 sm:h-12 object-contain filter drop-shadow-[0_0_8px_rgba(6,182,212,0.8)]">
            </div>
            <h2 class="text-3xl md:text-5xl font-black text-white relative inline-block px-4" data-aos="fade-up" data-aos-duration="800">خدماتنا
                <span class="absolute -bottom-4 left-1/2 -translate-x-1/2 w-24 h-1.5 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full shadow-[0_0_15px_rgba(6,182,212,0.5)]"></span>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
            @if (!empty($services) && count($services) > 0)
                @foreach ($services as $service)
                    <div class="group bg-slate-900 rounded-3xl p-8 border border-slate-800 shadow-[0_8px_30px_rgba(0,0,0,0.3)] hover:shadow-[0_15px_50px_rgba(6,182,212,0.2)] hover:border-slate-700 transition-all duration-500 hover:-translate-y-3 flex flex-col items-start" data-aos="fade-up" data-aos-delay="{{ 100 * $loop->iteration }}">
                        <div class="w-16 h-16 rounded-2xl bg-slate-800 flex items-center justify-center ring-1 ring-slate-700 mb-6 group-hover:bg-cyan-900/40 group-hover:ring-cyan-500/50 transition-all duration-500 shadow-inner group-hover:shadow-[0_0_20px_rgba(6,182,212,0.3)]">
                            <img src="{{ asset('assets/images/' . $service->icon_service) }}" alt="{{ $service->name }}" class="w-8 h-8 object-contain group-hover:scale-125 group-hover:-rotate-12 transition-transform duration-500 drop-shadow-[0_0_10px_rgba(255,255,255,0.1)]">
                        </div>
                        <h3 class="text-xl md:text-2xl font-bold text-white mb-4 group-hover:text-cyan-400 transition-colors duration-300">{{ $service->name }}</h3>
                        <p class="text-slate-400 leading-relaxed font-medium line-clamp-4 group-hover:text-slate-300 transition-colors duration-300">{{ $service->description }}</p>
                    </div>
                @endforeach
            @else
                <div class="col-span-1 md:col-span-2 xl:col-span-3 text-center py-12">
                     <div class="inline-flex items-center gap-3 px-6 py-4 bg-slate-900 border border-slate-800 shadow-sm text-slate-400 rounded-2xl font-medium">
                         <i class="fas fa-info-circle text-2xl text-slate-500"></i>
                         <span>لا توجد خدمات متاحة حالياً</span>
                     </div>
                </div>
            @endif
        </div>
    </div>
</section>
