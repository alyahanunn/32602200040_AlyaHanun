<?= $this->extend('./layout/index') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="box-name">
        <img src="/assets/image/user.png" alt="">
        <div class="nama">Alya Hanun</div>
        <div class="skills">Web Developer</div>
</div>
<div class="box-detail">
    <h2>Tentang Saya</h2>
    <p>Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Maxime eveniet ut corporis adipisci
        iusto labore, quam, et neque quod, dignissimos temporibus voluptatum. 
        Nam totam eligendi assumenda cum architecto tenetur et</p>
    <div class="detail-profile">
        <h2>Detail Profile</h2>
        <div class="form-detail">
            <table border="0">
                <tr>
                    <td>Nama Lengkap</td>
                    <td>Alya Hanun</td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td>19</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>Mahasiswa</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="medsos">
        <h2>Hubungi Saya</h2>
        <i class="fa-brands fa-Linkedin fa-lg"></i>
        <i class="fa-brands fa-Instagram fa-lg"></i>
        <i class="fa-brands fa-Facebook fa-lg"></i>
        <i class="fa-brands fa-square-Whatsapp fa-lg"></i>
    </div>
</div>
</div>
<?= $this->endSection()?>