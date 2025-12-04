<div id="pendaftaran" class="page">
    <div class="header">
        <h2>Pendaftaran Pasien</h2>
    </div>

    <div class="form-container">
        <h3 style="margin-bottom: 20px;">Daftar Pasien Baru</h3>
        <form id="formPasien" onsubmit="tambahPasien(event)">
            <div class="form-row">
                <div class="form-group">
                    <label>Nama Lengkap *</label>
                    <input type="text" id="namaPasien" required>
                </div>
                <div class="form-group">
                    <label>NIK *</label>
                    <input type="text" id="nikPasien" required maxlength="16" pattern="[0-9]{16}" title="NIK harus 16 digit angka">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>No. Telepon *</label>
                    <input type="tel" id="telpPasien" required pattern="[0-9]{10,13}" title="Nomor telepon harus 10-13 digit">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir *</label>
                    <input type="date" id="tglLahirPasien" required>
                </div>
            </div>
            <div class="form-group">
                <label>Alamat *</label>
                <textarea id="alamatPasien" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Daftarkan Pasien</button>
        </form>
    </div>

    <div class="table-container">
        <h3 style="margin-bottom: 15px;">Daftar Pasien Terdaftar</h3>
        <div class="search-box">
            <input type="text" id="searchPasien" placeholder="Cari berdasarkan nama, NIK, atau No. RM..." onkeyup="cariPasien()">
        </div>
        <table>
            <thead>
                <tr>
                    <th>No. RM</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody id="tabelPasien"></tbody>
        </table>
    </div>
</div>