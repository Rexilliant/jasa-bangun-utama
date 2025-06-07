@if ($paginator->hasPages())
    <div class="flex items-center mt-10 text-sm">
        {{-- Tombol Previous --}}
        @if ($paginator->onFirstPage())
            <span class="px-3 py-1.5 border border-gray-200 rounded-l-lg text-gray-400 bg-gray-100 cursor-not-allowed">prev</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}"
                class="px-3 py-1.5 border border-gray-200 rounded-l-lg text-gray-400 hover:text-[#012269]">prev</a>
        @endif

        {{-- Halaman-halaman --}}
        @php
            // Tentukan range halaman yang akan ditampilkan
            $current = $paginator->currentPage();
            $last = $paginator->lastPage();
            $start = max(1, $current - 1);
            $end = min($last, $current + 1);

            // Pastikan selalu ada 3 item jika memungkinkan
            if ($end - $start < 2) {
                if ($current == 1) {
                    $end = min($last, 3);
                }
                if ($current == $last) {
                    $start = max(1, $last - 2);
                }
            }
        @endphp

        @foreach ($paginator->getUrlRange($start, $end) as $page => $url)
            <a href="{{ $url }}"
                class="px-3 py-1.5 border h-full border-gray-200 {{ $page == $current ? 'bg-[#012269] font-bold text-white' : ' text-gray-400 hover:text-[#012269]' }}">
                {{ $page }}
            </a>
        @endforeach

        {{-- Tombol Next --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="px-3 py-1.5 border border-gray-200 rounded-r-lg text-gray-400 hover:text-[#012269]">next</a>
        @else
            <span class="px-3 py-1.5 border border-gray-200 rounded-r-lg text-gray-400 bg-gray-100 cursor-not-allowed">next</span>
        @endif
    </div>
@endif
