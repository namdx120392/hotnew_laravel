@extends('layouts.front-detail')
@section('content') 
        <div class="main">
        <div class="container">
             <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="+1o+s4-16-1z+89"
     data-ad-client="ca-pub-4641044772779866"
     data-ad-slot="3644532785"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
            <div class="row"> 
                    <div class="col-md-9">

<div class="breadcrumb clearfix">
    <ul>
                    <li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" class="home">
                        <a title="Đến trang chủ" href="/" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                    </li>
                    <li class="icon-li"><strong>Liên hệ</strong> </li>
    </ul>
</div>
<script type="text/javascript">
    $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
</script>
    <div class="contact-content clearfix ng-scope" ng-controller="contactController" ng-init="initController('Shop','Maps')">
        <h1 class="title">
            <span>
                Thông tin liên hệ
            </span>
        </h1>
        <div class="contact-block clearfix">
            <div class="row">
                <div class="col-md-3">
                    <a href="/">
                        <img class="img-responsive" src="{{asset('images/Uploads/images/logo/logo-manhtien.png')}}"
                    </a>
                </div>
                <div class="col-md-9">
                    <div class="contact-info">
                        <div class="docs"><b class="name ng-binding">Mạnh Tiến Company</b></div>
                        <div class="docs ng-binding">
                            <i class="fa fa-map-marker"></i>
                            <b>Địa chỉ:</b> 26 Đường 3D, KDC Vĩnh Lộc, Khu phố 4, Bình Hưng Hòa B, Quận Bình Tân, TP Hồ Chí Minh
                        </div>
                        <div class="docs ng-binding">
                            <i class="fa fa-phone"></i>
                            <b>Hotline:</b> <a href="tel:0909050006">090 905 0006</a>
                        </div>
                          <div class="docs ng-binding">
                            <i class="fa fa-phone"></i>
                            <b>Điện thoại:</b> <a href="tel: 02836208711"> 028 3620 8711</a>
                        </div>
                        <div class="docs ng-binding">
                            <i class="fa fa-fax"></i>
                            <b>Fax:</b> 028 3620 8711
                        </div>
                        <div class="docs">
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:thangmaymanhtien@gmail.com" class="ng-binding">thangmaymanhtien@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="">
            <h3 class="title">Gửi thông tin liên hệ</h3>
            <div class="description">
                Xin vui lòng điền các yêu cầu vào mẫu dưới đây và gửi cho chúng tôi. Chúng tôi
                sẽ trả lời bạn ngay sau khi nhận được. Xin chân thành cảm ơn!
            </div>
            <div class="row">
                <div class="col-md-10 col-sm-12 col-xs-12">
                    <div class="contact-feedback">
                        <form ng-submit="sendContact()" class="ng-pristine ng-invalid ng-invalid-required ng-valid-email">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-user"></i></span>
                                <input type="text" placeholder="Họ tên" ng-model="Name" class="form-control ng-pristine ng-invalid ng-invalid-required ng-touched" required="">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                                <input type="text" placeholder="Địa chỉ" ng-model="Address" class="form-control ng-pristine ng-valid ng-touched">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input type="email" placeholder="Email" ng-model="Email" class="form-control ng-pristine ng-valid-email ng-invalid ng-invalid-required ng-touched" required="">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input type="text" placeholder="Điện thoại" ng-model="Phone" class="form-control ng-pristine ng-invalid ng-invalid-required ng-touched" required="">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" placeholder="Tiêu đề" ng-model="Title" class="form-control ng-pristine ng-invalid ng-invalid-required ng-touched" required="">
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Nội dung" class="form-control ng-pristine ng-invalid ng-invalid-required ng-touched" rows="3" ng-model="Content" required=""></textarea>
                            </div>
                            <button class="btn btn-default" type="submit">Gửi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-3">
    <script type="text/javascript">
        window.Shop = {"Name":"Mạnh Tiến","Email":"namdx@vnpay.vn","Phone":"028 3620 8711","Logo":"/images/Uploads/images/logo-manhtien.png","Fax":"(08) 66 85 85 38","Website":"thangmaymanhtien.com","Hotline":"028 3620 8711","Address":"TPHCM","Fanpage":"https://www.facebook.com","Google":null,"Facebook":"https://www.facebook.com","Youtube":null,"Twitter":null,"IsBanner":false,"IsFixed":false,"BannerImage":null};
        window.SupportOnlines = [{"Id":139,"ShopId":297,"FullName":"Mr.Tiến","Position":"Giám đốc","Yahoo":"tien","Skype":"tien","Viber":null,"Zalo":null,"Facebook":null,"Phone":"02836208711","Phone1":null,"Email":"namdx@vnpay.vn","Address":null,"Avatar":null,"Company":null,"Index":1,"Inactive":false}];
    </script>
</div>
 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="+1o+s4-16-1z+89"
     data-ad-client="ca-pub-4641044772779866"
     data-ad-slot="3644532785"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
@endsection
@section('content_js')
@endsection