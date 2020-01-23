<section id="artikel-header" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-6 col-sm-12">
                <h2>Portal Sekertaris Pimpinan</h2>
            </div>
        </div>
    </div>
</section>

<section id="artikel-detail" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row margintop40 admin">
            <div class="col-md-12">
                <h2>Notifikasi</h2>
                <span class="line-bar">...</span>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 profile text-center">
                <table class="table table-responsive">
                    <thead>
                        <tr class="info">
                            <th>#</th>
                            <th>Nama Lembaga</th>
                            <th>Jenis Acara</th>
                            <th>Telepon</th>
                            <th>File CL</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($notif as $n) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $n['nama_lembaga']; ?></td>
                                <td><?= $n['jenis_acara']; ?></td>
                                <td><?= $n['telp']; ?></td>
                                <td><a href="<?= base_url() . 'assets/docs/' . $n['file_cl']; ?>">Link CL</a></td>
                                <td>
                                    <?php if ($n['status_jadwal'] == "Belum dikonfirmasi") : ?>
                                        <span class="badge" style="background-color: red"><?= $n['status_jadwal']; ?></span>
                                    <?php else : ?>
                                        <span class="badge" style="background-color: green"><?= $n['status_jadwal']; ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/update/') . $n['id'] ?>" class="badge" style="background-color: blue">Konfirmasi Jadwal</a><br>
                                    <a href="https://wa.me/<?= $n['telp'] ?>?text=AAM%20Amiruddin%20Official%0A%0AAssalamu%27alaikum%20wr%20wb%0AHalo%2C%20<?= $n['nama'] ?>%0A%0ASaya%20dari%20Sekertaris%20Pimpinan%0Aakan%20mengirimkan%20surat%20konfirmasi%20kesediaan%0Ayang%20ada%20pada%20link%20dibawah%20ini%20%3A%0A%0Ahttps%3A%2F%2Fdrive.google.com%2Ffile%2Fd%2F1N86E90ffK3_89vNJTHf31l8dLl22EzlZ%2Fview%0A%0AHarap%20diisi%20surat%20secepatnya%0AWaktu%20pengiriman%20maksimal%203%20hari%20setelah%20rencana%20penjadwalan%20dibuat%0AKonfirmasi%20yang%20melebihi%20batas%20waktu%20yang%20ditentukan%2C%20%0Adiharuskan%20mengisi%20ulang%20formulir%20rencana%20penjadwalan%20baru.%0A%0Ajika%20sudah%20mengisi%20suratnya%20harap%20kirimkan%20pdfnya%20ke%20nomer%20ini.%0Auntuk%20dilakukan%20konfiramasi%0A%0AWassalamu%27alaikum%20wr%20wb" target="_blank" class="badge" style="background-color: blue">Kirim Surat Konfirmasi Kesediaan via WhatsApp</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>