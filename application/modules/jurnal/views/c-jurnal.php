<div class="hero-section app-hero">
    <div class="container">
        <div class="hero-content app-hero-content text-center">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        INPUT BUKU KERJA
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="flex-features" id="features">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-md-8 ui container">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>FORM INPUT BUKU KERJA</h5>
                    </div>
                    <div class="card-block">
                        <form class="ui form" method="post" action="<?php echo base_url()?>jurnal/create_buku_kerja">
                            <div class="field">
                                <label>Title</label>
                                <input type="hidden" value="<?php echo $this->session->userdata('nama_lengkap') ?>" name="nama" />
                                <input type="text" name="title" autocomplete="off" placeholder="Title / Judul" />
                            </div>
                            <div class="field">
                                <label>Deskripsi Pekerjaan</label>
                                <textarea name="deskripsi" rows="2"></textarea>
                                <input type="hidden" value="<?php echo date('y-m-d') ?>" name="date" />
                            </div>
                            <button class="ui button" type="submit">KIRIM</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div>
