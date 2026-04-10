<section id="contact" class="py-40 relative bg-transparent" x-data="{ shown: false }"
    x-intersect.once.margin.-100px="shown = true">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center transition-all duration-1000"
        :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">

        <div class="w-20 h-2 bg-[var(--accent)] mx-auto mb-10"></div>
        <h2 class="text-6xl sm:text-8xl font-black text-[var(--text-main)] tracking-tighter mb-8 leading-none">Let's
            Talk.</h2>
        <p class="text-xl text-[var(--text-dim)] mb-16 max-w-xl mx-auto font-medium leading-relaxed">
            Currently looking for new opportunities in <span
                class="text-[var(--text-main)] font-bold underline decoration-[var(--accent)] decoration-2">Cybersecurity</span>.
            Whether you have a question or just want to say hi, I'll get back to you!
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-10">
            <a href="mailto:rahadya.daffa@gmail.com"
                class="group relative px-12 py-6 bg-[var(--accent)] text-white text-xl font-black neo-shadow neo-border-accent hover:brightness-110 transition-all uppercase tracking-widest">
                Say Hello
                <span
                    class="absolute right-6 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 group-hover:translate-x-3 transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </span>
            </a>

            <a href="https://www.linkedin.com/in/daffa-rahadya-atmawiguna-25ab023b4/" target="_blank" rel="noopener"
                class="flex items-center gap-3 text-xl font-black text-[var(--text-dim)] hover:text-[var(--accent)] transition-all group">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                        clip-rule="evenodd" />
                </svg>
                LinkedIn
            </a>
        </div>

    </div>
</section>