<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jam Tangan — VALIANT</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #0A0A0A; }</style>
</head>
<body class="bg-[#0A0A0A] text-neutral-200 p-6 sm:p-12">
    <div class="max-w-[700px] mx-auto space-y-6">
        <div class="flex justify-between items-center border-b border-neutral-800 pb-4">
            <h1 class="text-xl font-light text-white">Edit Jam Tangan</h1>
            <a href="{{ route('admin.watches.index') }}" class="text-xs text-neutral-400 hover:text-white">Batal</a>
        </div>

        <form action="{{ route('admin.watches.update', $watch->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4 text-xs">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block mb-1 text-neutral-400">BRAND</label>
                    <input type="text" name="brand" value="{{ $watch->brand }}" required class="w-full bg-[#121212] border border-neutral-800 rounded p-3 text-white focus:outline-none focus:border-[#CBB299]">
                </div>
                <div>
                    <label class="block mb-1 text-neutral-400">NAMA MODEL</label>
                    <input type="text" name="model_name" value="{{ $watch->model_name }}" required class="w-full bg-[#121212] border border-neutral-800 rounded p-3 text-white focus:outline-none focus:border-[#CBB299]">
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block mb-1 text-neutral-400">NOMOR REFERENSI</label>
                    <input type="text" name="reference_number" value="{{ $watch->reference_number }}" class="w-full bg-[#121212] border border-neutral-800 rounded p-3 text-white focus:outline-none focus:border-[#CBB299]">
                </div>
                <div>
                    <label class="block mb-1 text-neutral-400">TAHUN</label>
                    <input type="number" name="year" value="{{ $watch->year }}" class="w-full bg-[#121212] border border-neutral-800 rounded p-3 text-white focus:outline-none focus:border-[#CBB299]">
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4">
                <div>
                    <label class="block mb-1 text-neutral-400">HARGA (RP)</label>
                    <input type="number" name="price" value="{{ $watch->price }}" required class="w-full bg-[#121212] border border-neutral-800 rounded p-3 text-white focus:outline-none focus:border-[#CBB299]">
                </div>
                <div>
                    <label class="block mb-1 text-neutral-400">KONDISI</label>
                    <select name="condition" class="w-full bg-[#121212] border border-neutral-800 rounded p-3 text-white focus:outline-none">
                        <option value="UNWORN" {{ $watch->condition == 'UNWORN' ? 'selected' : '' }}>UNWORN</option>
                        <option value="EXCELLENT" {{ $watch->condition == 'EXCELLENT' ? 'selected' : '' }}>EXCELLENT</option>
                        <option value="VERY GOOD" {{ $watch->condition == 'VERY GOOD' ? 'selected' : '' }}>VERY GOOD</option>
                    </select>
                </div>
                <div>
                    <label class="block mb-1 text-neutral-400">BADGE</label>
                    <select name="badge" class="w-full bg-[#121212] border border-neutral-800 rounded p-3 text-white focus:outline-none">
                        <option value="VERIFIED" {{ $watch->badge == 'VERIFIED' ? 'selected' : '' }}>VERIFIED</option>
                        <option value="FEATURED" {{ $watch->badge == 'FEATURED' ? 'selected' : '' }}>FEATURED</option>
                        <option value="TRENDING" {{ $watch->badge == 'TRENDING' ? 'selected' : '' }}>TRENDING</option>
                        <option value="NEW" {{ $watch->badge == 'NEW' ? 'selected' : '' }}>NEW</option>
                    </select>
                </div>
            </div>
<div class="grid grid-cols-2 gap-4">
    <div>
        <label class="block mb-1 text-neutral-400">UKURAN CASE</label>
        <input type="text" name="case_size" value="{{ $watch->case_size }}" class="w-full bg-[#121212] border border-neutral-800 rounded p-3 text-white focus:outline-none focus:border-[#CBB299]">
    </div>
    <div>
        <label class="block mb-1 text-neutral-400">MOVEMENT / MESIN</label>
        <input type="text" name="movement" value="{{ $watch->movement }}" class="w-full bg-[#121212] border border-neutral-800 rounded p-3 text-white focus:outline-none focus:border-[#CBB299]">
    </div>
</div>

<div class="grid grid-cols-2 gap-4">
    <div>
        <label class="block mb-1 text-neutral-400">JENIS KACA</label>
        <input type="text" name="glass" value="{{ $watch->glass }}" class="w-full bg-[#121212] border border-neutral-800 rounded p-3 text-white focus:outline-none focus:border-[#CBB299]">
    </div>
    <div>
        <label class="block mb-1 text-neutral-400">KELENGKAPAN</label>
        <input type="text" name="completeness" value="{{ $watch->completeness }}" class="w-full bg-[#121212] border border-neutral-800 rounded p-3 text-white focus:outline-none focus:border-[#CBB299]">
    </div>
</div>
            <div>
                <label class="block mb-1 text-neutral-400">GANTI FOTO PRODUK (OPSIONAL)</label>
                <input type="file" name="image" class="w-full bg-[#121212] border border-neutral-800 rounded p-3 text-neutral-400 focus:outline-none">
            </div>

            <button type="submit" class="w-full py-3.5 bg-[#CBB299] text-black font-bold uppercase tracking-wider rounded-full hover:bg-[#d8c3ad] transition mt-4">Update Jam Tangan</button>
        </form>
    </div>
</body>
</html>