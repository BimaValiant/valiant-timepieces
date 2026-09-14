<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jam Tangan — VALIANT</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #0A0A0A; }</style>
</head>
<body class="bg-[#0A0A0A] text-neutral-200 p-6 sm:p-12">
    <div class="max-w-[700px] mx-auto space-y-6">
        <div class="flex justify-between items-center border-b border-neutral-800 pb-4">
            <h1 class="text-xl font-light text-white">Tambah Jam Tangan Baru</h1>
            <a href="{{ route('admin.watches.index') }}" class="text-xs text-neutral-400 hover:text-white">Batal</a>
        </div>

        <form action="{{ route('admin.watches.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4 text-xs">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block mb-1 text-neutral-400">BRAND</label>
                    <input type="text" name="brand" placeholder="Contoh: SEIKO" required class="w-full bg-[#121212] border border-neutral-800 rounded p-3 text-white focus:outline-none focus:border-[#CBB299]">
                </div>
                <div>
                    <label class="block mb-1 text-neutral-400">NAMA MODEL</label>
                    <input type="text" name="model_name" placeholder="Contoh: Prospex Speedtimer" required class="w-full bg-[#121212] border border-neutral-800 rounded p-3 text-white focus:outline-none focus:border-[#CBB299]">
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block mb-1 text-neutral-400">NOMOR REFERENSI</label>
                    <input type="text" name="reference_number" placeholder="Contoh: SSC813" class="w-full bg-[#121212] border border-neutral-800 rounded p-3 text-white focus:outline-none focus:border-[#CBB299]">
                </div>
                <div>
                    <label class="block mb-1 text-neutral-400">TAHUN</label>
                    <input type="number" name="year" placeholder="2024" class="w-full bg-[#121212] border border-neutral-800 rounded p-3 text-white focus:outline-none focus:border-[#CBB299]">
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4">
                <div>
                    <label class="block mb-1 text-neutral-400">HARGA (RP)</label>
                    <input type="number" name="price" placeholder="3850000" required class="w-full bg-[#121212] border border-neutral-800 rounded p-3 text-white focus:outline-none focus:border-[#CBB299]">
                </div>
                <div>
                    <label class="block mb-1 text-neutral-400">KONDISI</label>
                    <select name="condition" class="w-full bg-[#121212] border border-neutral-800 rounded p-3 text-white focus:outline-none">
                        <option value="UNWORN">UNWORN</option>
                        <option value="EXCELLENT">EXCELLENT</option>
                        <option value="VERY GOOD">VERY GOOD</option>
                    </select>
                </div>
                <div>
                    <label class="block mb-1 text-neutral-400">BADGE</label>
                    <select name="badge" class="w-full bg-[#121212] border border-neutral-800 rounded p-3 text-white focus:outline-none">
                        <option value="VERIFIED">VERIFIED</option>
                        <option value="FEATURED">FEATURED</option>
                        <option value="TRENDING">TRENDING</option>
                        <option value="NEW">NEW</option>
                    </select>
                </div>
            </div>

<div class="grid grid-cols-2 gap-4">
    <div>
        <label class="block mb-1 text-neutral-400">UKURAN CASE</label>
        <input type="text" name="case_size" placeholder="Contoh: 38 mm / 40 mm" class="w-full bg-[#121212] border border-neutral-800 rounded p-3 text-white focus:outline-none focus:border-[#CBB299]">
    </div>
    <div>
        <label class="block mb-1 text-neutral-400">MOVEMENT / MESIN</label>
        <input type="text" name="movement" placeholder="Contoh: Automatic 6R35 / Quartz" class="w-full bg-[#121212] border border-neutral-800 rounded p-3 text-white focus:outline-none focus:border-[#CBB299]">
    </div>
</div>

<div class="grid grid-cols-2 gap-4">
    <div>
        <label class="block mb-1 text-neutral-400">JENIS KACA</label>
        <input type="text" name="glass" placeholder="Contoh: Sapphire Crystal / Hardlex" class="w-full bg-[#121212] border border-neutral-800 rounded p-3 text-white focus:outline-none focus:border-[#CBB299]">
    </div>
    <div>
        <label class="block mb-1 text-neutral-400">KELENGKAPAN</label>
        <input type="text" name="completeness" placeholder="Contoh: Full Set (Box & Papers) / Watch Only" class="w-full bg-[#121212] border border-neutral-800 rounded p-3 text-white focus:outline-none focus:border-[#CBB299]">
    </div>
</div>
            <div>
                <label class="block mb-1 text-neutral-400">FOTO PRODUK</label>
                <input type="file" name="image" required class="w-full bg-[#121212] border border-neutral-800 rounded p-3 text-neutral-400 focus:outline-none">
            </div>

            <button type="submit" class="w-full py-3.5 bg-[#CBB299] text-black font-bold uppercase tracking-wider rounded-full hover:bg-[#d8c3ad] transition mt-4">Simpan Jam Tangan</button>
        </form>
    </div>
</body>
</html>