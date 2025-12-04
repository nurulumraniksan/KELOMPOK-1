<div id="antrian" class="page">
    <div class="header">
        <h2>Antrian Pasien</h2>
    </div>

    <div class="form-container">
        <h3 style="margin-bottom: 20px;">Buat Antrian Baru</h3>
        <form id="formAntrian" onsubmit="buatAntrian(event)">
            <div class="form-row">
                <div class="form-group">
                    <label>Pilih Pasien *</label>
                    <select id="pilihPasien" required>
                        <option value="">-- Pilih Pasien --</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Poli *</label>
                    <select id="pilihPoli" required onchange="filterDokter()">
                        <option value="">-- Pilih Poli --</option>
                        <option value="Umum">Poli Umum</option>
                        <option value="Gigi">Poli Gigi</option>
                        <option value="Anak">Poli Anak</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Dokter *</label>
                    <select id="pilihDokter" required>
                        <option value="">-- Pilih Dokter --</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Buat Antrian</button>
        </form>
    </div>

    <div class="table-container">
        <h3 style="margin-bottom: 15px;">Daftar Antrian Hari Ini</h3>
        <table>
            <thead>
                <tr>
                    <th>No. Antrian</th>
                    <th>Nama Pasien</th>
                    <th>Poli</th>
                    <th>Dokter</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="tabelAntrian"></tbody>
        </table>
    </div>
</div>