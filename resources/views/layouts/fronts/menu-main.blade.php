<style type="text/css">
    .child-menu{
        text-transform: none !important;
     }
</style>
<section class="navigation-menu clearfix">
    <div class="container">
        <div class="menu-top">
            <div class="row">
                <div class="col-md-3">
                    <div class="menu-cate menu-quick-select">
                        <div class="menu-cate-title">
                            <span><a href="javascript:void(0);">Danh mục sản phẩm</a></span>
                        </div>
                        <ul class="menu-cate-content">
                        <?php if (!empty($providerCategories)) {
                            $limit = 0;
                            foreach ($providerCategories as $k => $category) {
                                $limit++;
                                if ($limit > 8) break;
                                echo '<li><a href="/san-pham?category=' . $k . '"><i class="icon-menu fa fa-play-circle-o"></i>' . $category['name'] . '<span class="arrow-menu"><i class="fa fa-chevron-right "></i></span></a>';
                                if (isset($category['child']) && !empty($category['child'])) {
                                    echo '<div class="sub-menu hidden-xs"><ul class="colum0">';
                                    foreach ($category['child'] as $kChild => $vChild) {
                                        echo '<li><a class="child-menu" href="/san-pham?category=' . $kChild . '">' . $vChild['name'] . '</a></li>';
                                    }
                                    echo '</ul></div>';
                                }
                                echo '<li>';
                            }
                        } ?>
                        </ul>
                    </div>
                </div>

            <div class="col-md-9 ">
                <nav class="navbar nav-menu">
                    <div class="navbar-header">
                        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <nav id="mobile-menu" class="mobile-menu collapse navbar-collapse">
                        <ul class='menu nav navbar-nav'>
                            <li class="level0"><a class='' href='/'><span>Trang chủ</span></a></li>
                            <li class="level0"><a class='' href='/gioi-thieu.html'><span>Giới thiệu</span></a></li>
                            <li class="level0"><a class='' href="{{route('san-pham-all')}}"><span>Sản phẩm</span></a></li>
                            <li class="level0"><a class='' href="{{route('lien-he')}}"><span>Liên hệ</span></a></li>
                        </ul>
                    </nav>
                </nav>
            </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function () {
        var str = location.href.toLowerCase();
        $("ul.menu li a").each(function () {
            if (str.indexOf(this.href.toLowerCase()) >= 0) {
                $("ul.menu li").removeClass("active");
                $(this).parent().addClass("active");
            }
        });
    });
</script>
</div>

<?php if(\Request::route()->getName() ==  'site-home') { ?>
@include('layouts/fronts/container-slide-top')
<?php } ?>