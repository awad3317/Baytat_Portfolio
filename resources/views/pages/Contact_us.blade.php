<section id="contact" class="py-20 lg:py-32 bg-slate-900 relative overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center max-w-7xl mx-auto">
            
            <div class="content flex flex-col order-2 lg:order-1" data-aos="fade-left">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-12 h-12 flex items-center justify-center bg-slate-800 rounded-xl border border-slate-700 shadow-sm">
                        <i class="fas fa-headset text-2xl text-cyan-400"></i>
                    </div>
                    <h2 class="text-3xl md:text-5xl font-black text-white relative inline-block">تواصل معنا
                        <span class="absolute -bottom-3 right-0 w-1/2 h-1.5 bg-linear-to-r from-cyan-500 to-blue-500 rounded-full shadow-[0_0_10px_rgba(6,182,212,0.5)]"></span>
                    </h2>
                </div>
                
                <p class="text-slate-400 mb-8 font-medium text-lg lg:text-xl">نحن هنا لمساعدتك. اترك رسالتك وسيتواصل معك فريقنا في أقرب وقت لإطلاق أفكارك نحو النجاح.</p>

                <div class="bg-slate-800/80 backdrop-blur-md p-6 md:p-10 rounded-3xl shadow-[0_15px_40px_rgba(0,0,0,0.3)] border border-slate-700">
                    <form action="{{ route('order.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="form-group space-y-2">
                                <label for="customer_name" class="block text-sm font-bold text-slate-300">الاسم</label>
                                <input type="text" id="customer_name" name="customer_name" placeholder="أدخل اسمك" required
                                    class="w-full px-5 py-3.5 bg-slate-900/50 border border-slate-600 text-white rounded-xl focus:ring-2 focus:ring-cyan-500/50 focus:border-cyan-500 focus:bg-slate-900 outline-none transition-all placeholder:text-slate-500 @error('customer_name') border-rose-500 focus:ring-rose-500/50 @enderror">
                                @error('customer_name')
                                    <div class="text-xs text-rose-500 mt-1 font-bold"><i class="fas fa-exclamation-circle ml-1"></i>{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group space-y-2">
                                <label for="number" class="block text-sm font-bold text-slate-300">الرقم</label>
                                <input type="number" id="number" name="number" placeholder="أدخل رقمك" required
                                    class="w-full px-5 py-3.5 bg-slate-900/50 border border-slate-600 text-white rounded-xl focus:ring-2 focus:ring-cyan-500/50 focus:border-cyan-500 focus:bg-slate-900 outline-none transition-all placeholder:text-slate-500 @error('number') border-rose-500 focus:ring-rose-500/50 @enderror" dir="rtl">
                                @error('number')
                                    <div class="text-xs text-rose-500 mt-1 font-bold"><i class="fas fa-exclamation-circle ml-1"></i>{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group space-y-2">
                            <label for="email" class="block text-sm font-bold text-slate-300">البريد الإلكتروني</label>
                            <input type="email" id="email" name="email" placeholder="أدخل بريدك الإلكتروني" required
                                class="w-full px-5 py-3.5 bg-slate-900/50 border border-slate-600 text-white rounded-xl focus:ring-2 focus:ring-cyan-500/50 focus:border-cyan-500 focus:bg-slate-900 outline-none transition-all placeholder:text-slate-500 @error('email') border-rose-500 focus:ring-rose-500/50 @enderror">
                            @error('email')
                                <div class="text-xs text-rose-500 mt-1 font-bold"><i class="fas fa-exclamation-circle ml-1"></i>{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group space-y-2">
                            <label for="message" class="block text-sm font-bold text-slate-300">الرسالة</label>
                            <textarea id="message" rows="5" name="message" placeholder="أدخل رسالتك"
                                class="w-full px-5 py-3.5 bg-slate-900/50 border border-slate-600 text-white rounded-xl focus:ring-2 focus:ring-cyan-500/50 focus:border-cyan-500 focus:bg-slate-900 outline-none transition-all resize-none placeholder:text-slate-500 @error('message') border-rose-500 focus:ring-rose-500/50 @enderror"></textarea>
                            @error('message')
                                <div class="text-xs text-rose-500 mt-1 font-bold"><i class="fas fa-exclamation-circle ml-1"></i>{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="w-full py-4 bg-white hover:bg-slate-50 text-slate-900 text-lg font-bold rounded-xl shadow-[0_4px_20px_rgba(255,255,255,0.1)] active:scale-[0.98] transition-all duration-500 flex items-center justify-center gap-3 group relative overflow-hidden focus:ring-4 focus:ring-cyan-500/50 outline-none hover:shadow-[0_15px_40px_rgba(6,182,212,0.4)] hover:-translate-y-1">
                            <span class="absolute inset-0 w-full h-full bg-linear-to-r from-cyan-500 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
                            <span class="relative z-10 group-hover:text-white transition-colors duration-500">إرسـال الرسالة</span>
                            <i class="fas fa-paper-plane relative z-10 group-hover:-translate-y-1 group-hover:-translate-x-1 group-hover:text-white transition-all duration-500"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="image flex flex-col items-center justify-center order-1 lg:order-2" data-aos="fade-right">
                <div class="relative w-full max-w-md mx-auto group">
                    <div class="absolute inset-0 bg-linear-to-tr from-cyan-500 to-blue-600 rounded-full mix-blend-screen opacity-20 blur-[80px] filter animate-pulse group-hover:opacity-40 transition-opacity duration-700"></div>
                    <img src="{{ asset('assets/images/contact img.svg') }}" alt="contact image" class="relative z-10 w-full h-auto drop-shadow-[0_0_25px_rgba(6,182,212,0.3)] group-hover:scale-110 group-hover:-translate-y-2 group-hover:-rotate-3 transition-all duration-700 ease-[cubic-bezier(0.25,1,0.5,1)]">
                </div>
            </div>
            
        </div>
    </div>
</section>