<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard — VALIANT TIMEPIECES</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #0A0A0A; }</style>
</head>
<body class="bg-[#0A0A0A] text-neutral-200 antialiased p-6 sm:p-12">
    <div class="max-w-[1200px] mx-auto space-y-8">
        
        <!-- Top Bar -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 border-b border-neutral-800 pb-6">
            <div>
                <span class="text-[10px] tracking-[0.25em] text-[#CBB299] uppercase">ADMIN PANEL</span>
                <h1 class="text-2xl sm:text-3xl font-light text-white">Inventory Management</h1>
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ route('home') }}" class="px-4 py-2 rounded-full border border-neutral-800 text-xs text-neutral-400 hover:text-white transition">Lihat Web</a>
                <a href="{{ route('admin.watches.create') }}" class="px-5 py-2.5 rounded-full bg-[#CBB299] text-black text-xs font-bold uppercase tracking-wider hover:bg-[#d8c3ad] transition flex items-center gap-2">
                    <i data-lucide="plus" class="w-4 h-4"></i> Tambah Jam Tangan
                </a>
            </div>
        </div>

        @if(session('success'))
            <div class="p-4 rounded-lg bg-emerald-950/60 border border-emerald-800/80 text-emerald-400 text-xs">
                {{ session('success') }}
            </div>
        @endif

        <!-- Data Table -->
        <div class="bg-[#121212] border border-neutral-800 rounded-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs text-neutral-300">
                    <thead class="bg-[#161616] text-[10px] uppercase tracking-widest text-neutral-400 border-b border-neutral-800">
                        <tr>
                            <th class="p-4">Jam Tangan</th>
                            <th class="p-4">Brand</th>
                            <th class="p-4">Harga</th>
                            <th class="p-4">Kondisi</th>
                            <th class="p-4">Status</th>
                            <th class="p-4">Badge</th>
                            <th class="p-4 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-neutral-800/60">
                        @foreach($watches as $watch)
                        <tr class="hover:bg-neutral-900/50 transition">
                            <td class="p-4 flex items-center gap-3">
                                <img src="{{ $watch->image }}" class="w-10 h-10 object-cover rounded border border-neutral-800">
                                <div>
                                    <div class="font-medium text-white">{{ $watch->model_name }}</div>
                                    <div class="text-[10px] text-neutral-500">Ref. {{ $watch->reference_number ?? '-' }}</div>
                                </div>
                            </td>
                            <td class="p-4 font-semibold text-[#CBB299]">{{ $watch->brand }}</td>
                            <td class="p-4 font-medium text-white">Rp {{ number_format($watch->price, 0, ',', '.') }}</td>
                            <td class="p-4"><span class="px-2 py-0.5 border border-neutral-800 rounded text-[9px] uppercase">{{ $watch->condition }}</span></td>
                            <td class="p-4">
                                @if(($watch->status ?? 'AVAILABLE') === 'SOLD OUT')
                                    <span class="px-2 py-0.5 bg-rose-950/80 border border-rose-800 text-rose-400 rounded text-[9px] font-bold uppercase">SOLD OUT</span>
                                @else
                                    <span class="px-2 py-0.5 bg-emerald-950/80 border border-emerald-800 text-emerald-400 rounded text-[9px] font-bold uppercase">AVAILABLE</span>
                                @endif
                            </td>
                            <td class="p-4"><span class="px-2 py-0.5 bg-neutral-900 border border-neutral-700 rounded text-[9px] uppercase text-white">{{ $watch->badge }}</span></td>
                            <td class="p-4 text-right space-x-2">
                                <a href="{{ route('admin.watches.edit', $watch->id) }}" class="p-2 inline-block text-neutral-400 hover:text-white"><i data-lucide="edit-3" class="w-4 h-4"></i></a>
                                <form action="{{ route('admin.watches.destroy', $watch->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin mau hapus jam ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-rose-500 hover:text-rose-400"><i data-lucide="trash-2" class="w-4 h-4"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>lucide.createIcons();</script>
</body>
</html>