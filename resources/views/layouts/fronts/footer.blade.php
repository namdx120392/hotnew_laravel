
<div class="footer">
            <div class="footer-content clearfix">
                <div class="footer-top hidden-sm hidden-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="footer-box col-md-3 hotline col-sm-12 col-xs-12">HOTLINE: <a href="tel:0909050006">090 905 0006</a></div>
                            <div class="footer-box box-social col-md-3 col-sm-12 col-xs-12">
                                
                            </div>
                            <div class="footer-box col-md-3 button-contact">
                                <a class="btn" href="tel:0909050006">Hợp tác với chúng tôi</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="footer-box box-address col-md-3 col-sm-12 col-xs-12">
                            <div class="item">
                                <div class="clearfix">
                                    <a href="/">
                                        <img src="{{asset('images/Uploads/images/logo/logo-manhtien.png')}}" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="box-address-content">
                                    <b>Thang máy Mạnh Tiến</b>
                                    <p><i class="fa fa-map-marker"></i>Địa Chỉ: 26 Đường 3D, KDC Vĩnh Lộc, Khu phố 4, Bình Hưng Hòa B, Quận Bình Tân, TP Hồ Chí Minh</p>
                                    <p>
                                        <i class="fa fa-envelope"></i>
                                        <a href="mailto:thangmaymanhtien@gmail.com">thangmaymanhtien@gmail.com</a>
                                    </p>
                                    <p>
                                        <i class="fa fa-phone"></i>
                                        <a href="tel:0909050006">090 905 0006</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="footer-box col-md-3 col-sm-12 col-xs-12">
                            <div class="item">
                                <h3>
                                    <span>Về chúng tôi</span>
                                </h3>
                            </div>
                            <ul>
                                <li>
                                    <a href="/gioi-thieu.html">Giới thiệu
                                    </a>
                                </li>                                
                                <li>
                                    <a href="/lien-he.html">Liên hệ
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-box col-md-3 col-sm-12 col-xs-12">
                            <div class="item">
                                <h3>
                                    <span>Lĩnh vực kinh doanh</span>
                                </h3>
                            </div>
                            <ul>
                                <li>
                                    <a href="/">Cung cấp và lắp đặt
                                    </a>
                                </li>
                                <li>
                                    <a href="/">Bảo trì và sửa chữa
                                    </a>
                                </li>
                                <li>
                                    <a href="/">Trung và đại tu thang máy
                                    </a>
                                </li>
                                <li>
                                    <a href="/">Tư vấn và thiết kế
                                    </a>
                                </li> 
                            </ul>
                        </div>
                        <div class="footer-box box-social col-md-3 col-sm-12 col-xs-12">
                            <div class="item">
                                <h3><a href="tel:0909050006" style="color:FFFFFF">Zalo: 090 905 0006</a>
                                </h3>
                                <div class="fb-like-box" data-href="tel:0909050006" data-width="289"
                                    data-height="190" data-colorscheme="dark" data-show-faces="true" data-header="false"
                                    data-stream="false" data-show-border="false">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom clearfix">
                    <div class="container">
                        <div class="row">
                            © 2017 ManhTien Company. All Rights Reserved. Designed by <a href="" target="_blank">MANH TIEN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div style="display: none;" id="loading-mask">
        <div id="loading_mask_loader" class="loader">
            <img alt="Loading..." src="images/ajax-loader-main.gif" />
            <div>
                Please wait...
            </div>
        </div>
    </div>
    <a class="back-to-top" href="#" style="display: inline;">
        <i class="fa fa-angle-up"></i>
    </a>
</body>
</html>
<script type="text/javascript">
    $(".header-content").css({ "background": '' });
    $("html").addClass('');
    $(document).ready(function () {
        $("img.lazy-img").each(function () {
            //$(this).attr("data-original", $(this).attr("src"));
            //$(this).attr("src", "/Images/blank.gif");
        });
        $("img.lazy-img").lazyload({
            effect: "fadeIn",
            threshold: 200
        });
    });
</script>