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
                <h2>Profil SekPim</h2>
                <span class="line-bar">...</span>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 profile text-center">
                <img class="img-responsive img-circle" src="<?= base_url() . 'assets/images/profile/' . $admin['image'] ?>" alt="Profile" width="200">
                <h4><?= $admin['name'] ?></h4>
                <h4><?= $admin['email'] ?></h4>
            </div>
        </div>
    </div>
</section>


<section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content modal-popup">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="modal-title">
                                <h2>Formulir Rencana Penjadwalan Ceramah</h2>
                            </div>

                            <!-- TAB PANES -->
                            <div class="tab-content">
                                <div role="tabpanel" id="form_jadwal" class="tab-pane fade in active">
                                    <form action="<?= base_url('jadwal/insert'); ?>" method="post">
                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                                <label for="nama">Nama Penanggungjawab <span>*</span></label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text" name="nama" class="form-control nama" id="nama">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                                <label for="telp">No. telp & WA <span>*</span></label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="telp" name="telp" class="form-control telp" id="telp">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                                <label for="lembaga">Nama Lembaga <span>*</span></label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text" name="lembaga" class="form-control lembaga">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-5">
                                                <label>Hari dan tanggal <span>*</span></label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input type="text" name="start" readonly class="tgl_mulai form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input type="text" name="end" readonly class="tgl_akhir form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="">Link google calender</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-row waktu">
                                            <div class="form-group col-md-5">
                                                <label>Waktu <span>*</span></label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <select id="waktu" name="waktu" class="form-control">
                                                    <option value="" disabled selected>Pilih...</option>
                                                    <option value="Pagi">Pagi</option>
                                                    <option value="Siang">Siang</option>
                                                    <option value="Sore">Sore</option>
                                                    <option value="Malam">Malam</option>
                                                </select>
                                                <a href="">Link google calender</a>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                                <label for="lembaga">Lokasi <span>*</span></label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text" name="jalan" class="form-control" id="jalan" placeholder="Jalan">
                                                <a href="">Link google maps</a>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input type="text" name="rt_rw" class="form-control" id="rt_rw" placeholder="RT / RW" width="50">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input type="text" name="kel" class="form-control" id="kel" placeholder="Kel / Desa">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input type="text" name="kec" class="form-control" id="kec" placeholder="Kec">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group col-md-3">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input type="text" name="kota" class="form-control" id="kota" placeholder="Kota / Kab">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input type="text" name="prov" class="form-control" id="prov" placeholder="Provinsi">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input type="text" name="negara" class="form-control" id="negara" placeholder="Negara">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                                <label for="jenis2">Jenis Acara <span>*</span></label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <select id="jenis" class="form-control" name="jenis">
                                                    <option value="" disabled selected>Pilih...</option>
                                                    <option value="Pengajian Umum">Pengajian Umum</option>
                                                    <option value="Seminar">Seminar</option>
                                                    <option value="Acara Keluarga">Acara Keluarga</option>
                                                    <option value="Lainnya">Lainnya...</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <input type="text" name="jenis2" class="form-control" id="jenis2" placeholder="Lainnya">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                                <label for="sifat">Sifat Acara <span>*</span></label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <input type="radio" name="sifat" value="Internal" class="sifat" id="internal">
                                                <label for="internal">Internal</label>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="radio" name="sifat2" value="Terbuka" class="sifat" id="terbuka">
                                                <label for="terbuka">Terbuka untuk umum</label>
                                            </div>
                                        </div>
                                        <br><br>

                                        <div class="form-row jumlah">
                                            <div class="form-group col-md-5">
                                                <br>
                                                <label for="lembaga">Perkiraan jumlah jamaah <span>*</span></label>
                                            </div>
                                            <div class="form-group col-md-7">
                                                <div class="row">
                                                    <div class="col-md-5"><br>
                                                        <label for="pria">dewasa (pria)</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" name="jmlPria" class="form-control" id="pria">
                                                    </div>
                                                    <div class="col-md-3"><br>
                                                        <label>orang</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5"><br>
                                                        <label for="wanita">dewasa (wanita)</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" name="jmlWanita" class="form-control" id="wanita">
                                                    </div>
                                                    <div class="col-md-3"><br>
                                                        <label>orang</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                                <label for="tamu">Tamu tokoh yang diundang</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text" name="tamu" class="form-control" id="tamu">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                                <label for="karakter">Gambaran karakteristik jamaah</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text" name="karakter" class="form-control" id="karakter">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-5 waktu">
                                                <label for="saran">Saran tema/judul materi <span>*</span></label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <select id="tema" class="form-control" name="tema">
                                                    <option value="" disabled selected>Pilih...</option>
                                                    <option value="Cara meraih ketenangan batin">Cara meraih ketenangan batin</option>
                                                    <option value="Kriteria Bahagia dunia dan akhirat">Kriteria Bahagia dunia dan akhirat</option>
                                                    <option value="Cara meraih keberkahan hidup">Cara meraih keberkahan hidup</option>
                                                    <option value="Cara meraih kesucian hati">Cara meraih kesucian hati</option>
                                                    <option value="Cara menggapai ridho Allah">Cara menggapai ridho Allah</option>
                                                    <option value="Cara menggapai iman yang prima">Cara menggapai iman yang prima</option>
                                                    <option value="Cara mendapat hidayah Allah">Cara mendapat hidayah Allah</option>
                                                    <option value="Meraih kematian yang indah">Meraih kematian yang indah</option>
                                                    <option value="Amalan calon penghuni surge">Amalan calon penghuni surge</option>
                                                    <option value="Cara menaklukan jiwa">Cara menaklukan jiwa</option>
                                                    <option value="Memahami strategi syetan">Memahami strategi syetan</option>
                                                    <option value="Ciri keluarga berkah">Ciri keluarga berkah</option>
                                                    <option value="Amalan pelebur dosa">Amalan pelebur dosa</option>
                                                    <option value="Cara mencintai Al-Quran">Cara mencintai Al-Quran</option>
                                                    <option value="Makna sebuah tangisan">Makna sebuah tangisan</option>
                                                    <option value="Musibah dalam perspektif Al-Quran">Musibah dalam perspektif Al-Quran</option>
                                                    <option value="Cara supaya doa mustajab">Cara supaya doa mustajab</option>
                                                    <option value="Waktu dalam perspektif Al-Quran">Waktu dalam perspektif Al-Quran</option>
                                                    <option value="Membangun rumah tangga sakinah">Membangun rumah tangga sakinah</option>
                                                    <option value="Patutkan diri menjadi ahli surge">Patutkan diri menjadi ahli surge</option>
                                                    <option value="Bersatu dalam keberagaman">Bersatu dalam keberagaman</option>
                                                    <option value="Rumus sukses dunia akhirat">Rumus sukses dunia akhirat</option>
                                                    <option value="Lainnya">Lainnya...</option>
                                                </select><br>
                                                <input type="text" name="tema2" class="form-control" id="tema2" placeholder="Lainnya">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <br>
                                                <button id="daftar" type="submit" class="btn btn-primary">Daftar Jadwal</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>