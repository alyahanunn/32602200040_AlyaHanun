<?= $this->extend('/layout/template') ?>

<?= $this->section('content') ?>
<main>
    <div class="title">
        <h1>Data Mahasiswa</h1>
    </div>
    <a href="/crud/tambah"><button class="btn-primary">Tambah Data</button></a>
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="0">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>PRODI</th>
                <th>UNIVERSITAS</th>
                <th>NOMOR_HANDPHONE</th>
                <th>Action</th>
            </tr>
            <?php
            // dd($mahasiswa);
            if (empty($mahasiswa)) { ?>
                <tr>
                    <td colspan="7">Tidak ada data</td>
                </tr>
                <?php } else {
                $i = 1;
                foreach ($mahasiswa as $a) { ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $a['NIM']; ?></td>
                        <td><?= $a['NAMA']; ?></td>
                        <td><?= $a['PRODI']; ?></td>
                        <td><?= $a['UNIVERSITAS']; ?></td>
                        <td><?= $a['NOMOR_HANDPHONE']; ?></td>
                        <td class="action">
                            <a href="crud/hapus/<?= $a['NIM']; ?>"><button class="btn-delete" onclick="return confirm('Are you sure to delete nim <?= $a['NIM'] ?>?')">Delete</button></a>
                            <a href="crud/edit/<?= $a['NIM']; ?>"><button class="btn-update">Update</button></a>
                        </td>
                    </tr>
            <?php }
            } ?>
</main>
<?= $this->endSection() ?>