<style>
p .twilight {
  text-decoration: none;
}
p .twilight {
  background:
    linear-gradient(
      to right,
      rgba(100, 200, 200, 1),
      rgba(100, 200, 200, 1)
    ),
    linear-gradient(
      to right,
      rgba(255, 0, 0, 1),
      rgba(255, 0, 180, 1),
      rgba(0, 100, 200, 1)
  );
  background-size: 100% 3px, 0 3px;
  background-position: 100% 100%, 0 100%;
  background-repeat: no-repeat;
  transition: background-size 400ms;
}
p .twilight:hover {
  background-size: 0 3px, 100% 3px;
}
</style>

<div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="foot-logo" style="margin-right: 2rem;">
                            <a href="<?php echo site_url();?>">
                            <img src="<?php echo base_url().'theme/images/logo-yayasan.png'?>"  class="img-fluid" alt="footer_logo">
                            </a>
                            
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sitemap">
                                <h3>Menu Utama</h3>
                                <ul>
                                    <li><a href="<?php echo site_url();?>">Home</a></li>
                                    <li><a href="<?php echo site_url('tentang');?>">Tentang Yayasan</a></li>
                                    <li><a href="<?php echo site_url('artikel');?>">Artikel </a></li>
                                    <li><a href="<?php echo site_url('galeri');?>">Gallery</a></li>
                                    <li><a href="<?php echo site_url('contact');?>">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                          <div class="sitemap">
                              <h3>Informasi Yayasan</h3>
                              <ul>
                                  <li><a href="<?php echo site_url('pengumuman');?>">Pengumuman</a></li>
                                  <li><a href="<?php echo site_url('agenda');?>">Agenda</a></li>
                              </ul>
                          </div>
                        </div>
                        <div class="col-md-3">
                            <div class="address">
                                <h3>Hubungi Kami</h3>
                                <p><span>Alamat: </span> Jl. Raya KSU/RRI No.24 Cikumpa, Kel. Tirtajaya, Kec. Sukmajaya, Kota Depok</p>
                                <p>Email : alhidayahinsankamil67@gmail.com
                                    <br> Phone : 021-7784 6652 / 0812 1909 8258</p>
                                    <ul class="footer-social-icons">
                                        <li ><a href="https://www.facebook.com/profile.php?id=100089350173137" target="_blank"><i class="fa fa-facebook fa-fb"  aria-hidden="true"></i></a></li>
                                         
                                    </ul>
                                    <ul class="footer-social-icons">
                                        <li style="margin-left: 9rem;"><a href="https://www.instagram.com/alhidayahinsankamil/" target="_blank"><i class="fa fa-facebook fa-instagram" style="font-size:48px;" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="address"  style="margin-top: 2rem;">
                        <p style="text-align: center;"><?php echo date('Y');?> © copyright by Yayasan Al-Hidayah Sukmajaya Depok. <br>All rights reserved.</p></div>
                    </div>
                    <div class="address">
                        <p style="text-align: center;">Website Development & Hosting by <a href="https://www.twilighteams.tech" target="_blank"><span class="twilight">Twilight Teams</span></a></p></div>
                    </div>
                  