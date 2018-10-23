<style type="text/css">
    .child-menu{
        text-transform: none !important;
     }
</style>
<div class="header">
        <section class="header-content clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-12 col-sm-12 header-left text-center">
                        <div class="logo">
                            <a href="/" title="">
                                <img alt="" src="{{asset('images/Uploads/images/logo/logo-manhtien.png')}}" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9 col-xs-12 col-sm-12 header-right">
                        <div class="sale-policy clearfix hidden-sm hidden-xs">
                            <ul class="clearfix">
                                <li class="shipping">
                                    <i class="fa fa-truck"></i><span>
                                        Lắp đặt nhanh chóng
                                    </span>
                                </li>
                                <li class="payment">
                                    <i class="fa fa-money"></i><span>
                                        Thanh toán linh hoạt
                                    </span>
                                </li>
                                <li class="return">
                                    <i class="fa fa-refresh"></i><span>
                                        Bảo hành - Bảo dưỡng 24/7
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="search hidden-sm hidden-xs">
                        <div class="input-cat form-search clearfix">
                            <div class="form-search-controls">
                                <input type="text" name="search" id="txtsearch" onblur="if(this.value=='')this.value='Tìm kiếm...'"
                                    onfocus="if(this.value=='Tìm kiếm...')this.value=''" value="T&#236;m kiếm..." />
                                <div class="select-categories">
                                    <select name="lbgroup" id="lbgroup" onchange="getval(this);">
                                        <option value="0" selected="selected">Tất cả</option>
                                        @if(!empty($providerCategoriesParent))
                                            @foreach($providerCategoriesParent as $k => $category)
                                                <option value="{{$k}}">{{$category}}</option>
                                            @endforeach
                                        @endif                                        
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-search" title="Search" type="button" id="btnsearch" value="Search">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                       </div>
                        <div class="social-group">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript">
            $("#btnsearch").click(function () {
                SearchProduct();
            });
            $("#txtsearch").keydown(function (event) {
                if (event.keyCode == 13) {
                    SearchProduct();
                }
            });
            function SearchProduct() {
                var key = $('#txtsearch').val();
                if (key == '' || key == 'Tìm kiếm...') {
                    $('#txtsearch').focus();
                    return;
                }
                var group = $('#lbgroup').val();
                window.location = '/san-pham?category=' + group + '&key=' + key;
            }
            function getval(sel)
            {
                var a = $("#lbgroup option:selected").text();
                $("#txtsearch").val(a);
            }
        </script>
    <section class="navigation-menu">
        <div class="container">
            <div class="menu-top">
                <div class="row">
                    <div class="col-md-3">
                        <div class="menu-cate">
                            <div class="menu-cate-title">
                                <span><a href="javascript:void(0)">Danh mục sản phẩm</a></span>
                            </div>
                            <ul class="menu-cate-content" style="display: none;">
                                @if(!empty($providerCategories))
                                    @foreach($providerCategories as $k => $category) 
                                    <li>
                                        <a href="/san-pham?category={{$k}}">
                                        <i class="icon-menu fa fa-play-circle-o"></i>{{$category['name']}}<span class="arrow-menu"><i class="fa fa-chevron-right "></i></span>
                                        </a>
                                        @if(isset($category['child']) && !empty($category['child']))
                                            <div class="sub-menu hidden-xs">
                                                 <ul class="colum0" style="display: none;">
                                                    @foreach($category['child'] as $kChild => $vChild)
                                                     <li><a class="child-menu" href="/san-pham?category={{$kChild}}">{{$vChild['name']}}</a></li>
                                                    @endforeach                                                   
                                                 <ul>
                                            </div>
                                        @endif                                        
                                    </li> 
                                    @endforeach
                                @endif
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
                        <ul class="menu nav navbar-nav">
                            <li class="level0"><a class="" href="/"><span>Trang chủ</span></a></li>
                            <li class="level0"><a class="" href="/gioi-thieu.html"><span>Giới thiệu</span></a></li>
                            <li class="level0"><a class="" href="{{route('san-pham-all')}}"><span>Sản phẩm</span></a></li>
                            <!-- <li class="level0"><a class="" href="/tin-tuc.html"><span>Tin tức</span></a></li> -->
                            <li class="level0"><a class="" href="/lien-he.html"><span>Liên hệ</span></a></li>
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
 