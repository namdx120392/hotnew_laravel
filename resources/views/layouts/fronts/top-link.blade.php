<div class="header">
    {!! Html::script('Scripts/common/login.js') !!}
    <section class="header-content clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-12 col-sm-12 header-left text-center">
                    <div class="logo">
                        <a href="/" title="">
                            <img src="{{asset('images/Uploads/images/logo/logo-manhtien.png')}}">
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
                                        <?php if (!empty($providerCategoriesParent)) {
                                            foreach ($providerCategoriesParent as $k => $category) {
                                                echo '<option value="' . $k . '">' . $category . '</option>';
                                            }
                                        } ?>
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
 @include('layouts/fronts/menu-main')