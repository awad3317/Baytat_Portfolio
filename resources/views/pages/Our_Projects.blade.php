<section id="projects" class="py-20 lg:py-32 bg-slate-900 relative">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col items-center justify-center text-center mb-16">
            <h2 class="text-3xl md:text-5xl font-black text-white relative inline-block mb-4" data-aos="fade-up" data-aos-duration="800">أعمالنا
                <span class="absolute -bottom-4 left-1/2 -translate-x-1/2 w-24 h-1.5 bg-linear-to-r from-cyan-500 to-blue-500 rounded-full shadow-[0_0_15px_rgba(6,182,212,0.5)]"></span>
            </h2>
            <p class="text-slate-400 text-lg sm:text-xl mt-6 max-w-2xl mx-auto font-medium" data-aos="fade-up" data-aos-delay="100">نطمح دائماً لتقديم أفضل الحلول التقنية. تصفح أحدث المشروعات التي نفذناها.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @if (!empty($projects) && count($projects) > 0)
                @foreach ($projects as $project)
                    <div class="group bg-slate-800 rounded-3xl overflow-hidden border border-slate-700 shadow-[0_8px_30px_rgba(0,0,0,0.3)] hover:shadow-[0_15px_50px_rgba(6,182,212,0.2)] hover:border-slate-600 transition-all duration-500 hover:-translate-y-3 flex flex-col" data-aos="fade-up" data-aos-delay="{{ 100 * $loop->iteration }}">
                        <div class="aspect-video w-full overflow-hidden relative">
                            <div class="absolute inset-0 bg-linear-to-t from-slate-900/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10"></div>
                            <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out">
                            
                            <!-- Status Badge -->
                            <div class="absolute top-4 right-4 z-20">
                                @if ($project->status === 'completed')
                                    <span class="px-3 py-1.5 text-xs font-bold text-emerald-300 bg-emerald-900/80 border border-emerald-500/30 backdrop-blur rounded-full shadow-sm">مكتمل</span>
                                @elseif($project->status === 'in_progress')
                                    <span class="px-3 py-1.5 text-xs font-bold text-amber-300 bg-amber-900/80 border border-amber-500/30 backdrop-blur rounded-full shadow-sm">قيد التنفيذ</span>
                                @else
                                    <span class="px-3 py-1.5 text-xs font-bold text-slate-300 bg-slate-800/80 border border-slate-600/30 backdrop-blur rounded-full shadow-sm">غير محدد</span>
                                @endif
                            </div>
                        </div>
                        <div class="p-6 md:p-8 flex flex-col grow">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-xl font-bold text-white line-clamp-1 group-hover:text-cyan-400 transition-colors">{{ $project->title }}</h3>
                                <span class="bg-slate-700/50 border border-slate-600 text-cyan-400 text-[11px] font-bold px-3 py-1.5 rounded-lg whitespace-nowrap">{{ $project->type }}</span>
                            </div>
                            <p class="text-slate-400 text-sm leading-relaxed font-medium line-clamp-3 mb-8 grow">{{ $project->description }}</p>
                            
                            @if ($project->link)
                                <a href="{{ $project->link }}" target="_blank" class="block w-full text-center px-4 py-3.5 bg-slate-700 border border-slate-600 text-white font-bold rounded-xl hover:bg-cyan-600 hover:border-cyan-500 transition-all duration-300 shadow-sm mt-auto hover:-translate-y-1 hover:shadow-cyan-500/20 hover:shadow-lg">
                                    <i class="fas fa-external-link-alt ml-2 opacity-70"></i> عرض المشروع
                                </a>
                            @endif
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-12">
                     <div class="inline-flex items-center gap-3 px-6 py-4 bg-slate-800 border border-slate-700 text-slate-400 rounded-2xl font-medium">
                         <i class="fas fa-laptop-code text-2xl text-slate-500"></i>
                         <span>لا توجد أعمال متاحة حالياً</span>
                     </div>
                </div>
            @endif
        </div>
    </div>
</section>
