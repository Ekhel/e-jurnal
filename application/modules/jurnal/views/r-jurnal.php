<div class="hero-section app-hero">
    <div class="container">
        <div class="hero-content app-hero-content text-center">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Buku Kerja
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="flex-features" id="features">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-md-12">
              <?php echo $this->session->flashdata('create');?>
              <?php echo $this->session->flashdata('error');?>
                <div class="card table-card">
                    <a href="<?php echo base_url()?>jurnal/create" class="ui button teal"><i class="fa fa-plus-circle"></i></a>
                    <div class="card-header">
                        <h5>TABLE BUKU KERJA</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div>
