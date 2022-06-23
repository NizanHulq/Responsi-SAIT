<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $value['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close">x</div>
            <form action="update.php?id=<?php echo $value['id'] ?>" method="POST" id="form">
                <div class="container">
                    <center>
                        <h2>Formulir Pemesanan Jasa <?php echo $value['id'] ?></h2>
                    </center>

                    <label for="nama"><b>Nama :</b></label>
                    <input type="text" placeholder="Nama" name="nama" id="nama" value="<?php echo $value['nama'] ?>">

                    <label for="noHp"><b>Nomor Handphone :</b></label>
                    <input type="text" placeholder="Nomor Handphone" name="noHp" id="noHp" value="<?php echo $value['noHp'] ?>">

                    <label for="email"><b>Email :</b></label>
                    <input type="text" placeholder="Email" name="email" id="email" value="<?php echo $value['email'] ?>">

                    <label for="alamat"><b>Alamat :</b></label>
                    <input type="text" placeholder="Alamat Lengkap" name="alamat" id="alamat" value="<?php echo $value['alamat'] ?>">

                    <label for="paket"><b>Pilih Paket :</b></label>
                    <select name="paket" placeholder="paket" class="option" value="<?php echo $value['paket'] ?>">
                        <option selected hidden value="">Pilih Paket</option>
                        <option value="Fast Cleaning">Fast Cleaning</option>
                        <option value="Deep Cleaning">Deep Cleaning</option>
                        <option value="Unyellowing">Unyellowing</option>
                    </select>
                    <button type="submit" class="pesan" name="submit">Pesan</button>
                </div>
            </form>
        </div>
    </div>
</div>