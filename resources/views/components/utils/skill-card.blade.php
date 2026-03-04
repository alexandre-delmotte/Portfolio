<div class="bg-site-card p-8 rounded-xl border border-white/5 hover:border-site-blue/50 transition-all duration-300 group hover:-translate-y-1 shadow-lg">
    <div class="w-12 h-12 bg-site-bg rounded-lg flex items-center justify-center mb-6 group-hover:bg-site-blue/20 transition-colors">
        <svg class="w-6 h-6 text-site-blue-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
    </div>
    <h3 class="text-xl font-bold text-white mb-4">{{$title}}</h3>
    <ul class="space-y-3 text-gray-400">
        <li class="flex items-center"><span class="text-site-blue mr-3">▹</span> {{ $first }}</li>
        <li class="flex items-center"><span class="text-site-blue mr-3">▹</span> {{ $second }}</li>
        <li class="flex items-center"><span class="text-site-blue mr-3">▹</span> {{ $third }}</li>
        <li class="flex items-center"><span class="text-site-blue mr-3">▹</span> {{ $fourth }}</li>
    </ul>
</div>
