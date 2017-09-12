	</div>
	<footer id="footer">
            <div class="footer-top">

                <div class="container">
                    <div class="pull-left">
                        <img src="<?=$ayar['logo']?>">
                    </div>
                    <div class="pull-right">
                        <div class="socials">
                            <a href="https://www.facebook.com/elexbettv" target="_blank"><em class="fa fa-facebook"></em></a>
                            <a href="https://twitter.com/elexbettv" target="_blank"><em class="fa fa-twitter"></em></a>
                            <a href="https://www.instagram.com/elexbet/" target="_blank"><em class="fa fa-instagram"></em></a>
                            <a href="" target="_blank"><em class="fa fa-pinterest"></em></a>
                            <a href="" target="_blank"><em class="fa fa-google-plus"></em></a>
                            <a href="" target="_blank"><em class="fa fa-youtube"></em></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 plus18">
                            <span></span>18 yaşından büyükler üye olabilir
                            <a href="http://www.livescore.in/tr/" title="Livescore.in" target="_blank">Livescore.in</a>
                        </div>
                        <div class="col-md-6 menu">
                            <a href="/">ANASAYFA</a>
                            <a href="/gizlilik">GİZLİLİK</a>
                            <a href="/hakkimizda">HAKKIMIZDA</a>
                        </div>
                        <div class="col-md-3 cr">Copyright © 2017. Tüm hakları saklıdır</div>
                    </div>
                </div>
            </div>
        </footer>
</div>

<?php 
        $jss[] =base_url('assets/bootstrap/js/bootstrap.min.js');
        $jss[] =base_url('assets/theme1/js/iframeResizer.min.js');
        $jss[] =base_url('assets/theme1/js/main.js');
        $jss[] =base_url('assets/theme1/js/jquery.slimscroll.min.js');
        $bi = css_js($jss,'.js','boots_iframe_v1.2');

        $angular[] =base_url('assets/theme1/js/angular/ui-bootstrap-tpls-2.5.0.min.js');
        
       
        $an = css_js($angular,'.js','angular_0.1');

 ?>
<script src="<?=$bi?>"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular.min.js"></script>  
<script src="<?=$an?>"></script>  
<script src="<?=base_url('assets/theme1/js/app.js')?>"></script>
</body>
</html>