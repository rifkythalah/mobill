<!-- Tambahkan link Bootstrap di bagian <head> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="shadow-sm card">
        <div class="text-white card-header bg-primary">
            <h4 class="mb-0">Form Tambah Kendaraan</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('kendaraan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                </div>
                <div class="mb-3">
                    <label for="merk_kendaraan" class="form-label">Merk Kendaraan</label>
                    <input type="text" class="form-control" id="merk_kendaraan" name="merk_kendaraan" required>
                </div>
                <div class="mb-3">
                    <label for="nomor_plat" class="form-label">Nomor Plat</label>
                    <input type="text" class="form-control" id="nomor_plat" name="nomor_plat" required>
                </div>
                <div class="mb-3">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi" required>
                </div>
                <div class="mb-3">
                    <label for="warna" class="form-label">Warna</label>
                    <input type="text" class="form-control" id="warna" name="warna" required>
                </div>
                <div class="mb-3">
                    <label for="bahan_bakar" class="form-label">Bahan Bakar</label>
                    <select class="form-select" id="bahan_bakar" name="bahan_bakar" required>
                        <option value="" disabled selected>Pilih Bahan Bakar</option>
                        <option value="Pertamax">Pertamax</option>
                        <option value="Pertalite">Pertalite</option>
                        <option value="Listrik">Listrik</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="Tersedia">Tersedia</option>
                        <option value="Tidak Tersedia">Tidak Tersedia</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga (Rp)</label>
                    <input type="number" class="form-control" id="harga" name="harga" step="0.01" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar Kendaraan</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </form>
        </div>
    </div>
</div>
