<div class="adv">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--Begin-->
                <div class="adv-content row" ng-controller="moduleController" ng-init="initAdvSlideController('AdvSlides')">
                    <div class="owl-carousel">
                        <ul id="adv-content" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                            <li ng-repeat="item in AdvSlides" class="ng-scope">
                                <a href="">
                                    <img ng-src="images/Uploads/images/qc1/14.jpg" alt="" class="img-responsive" />
                                </a>
                            </li>
                             <li ng-repeat="item in AdvSlides" class="ng-scope">
                                <a href="">
                                    <img ng-src="images/Uploads/images/qc1/11.jpg" alt="" class="img-responsive" />
                                </a>
                            </li>
                             <li ng-repeat="item in AdvSlides" class="ng-scope">
                                <a href="">
                                    <img ng-src="images/Uploads/images/qc1/12.jpg" alt="" class="img-responsive" />
                                </a>
                            </li>
                             <li ng-repeat="item in AdvSlides" class="ng-scope">
                                <a href="">
                                    <img ng-src="images/Uploads/images/qc1/13.jpg" alt="" class="img-responsive" />
                                </a>
                            </li>
                             <li ng-repeat="item in AdvSlides" class="ng-scope">
                                <a href="">
                                    <img ng-src="images/Uploads/images/qc1/15.jpg" alt="" class="img-responsive" />
                                </a>
                            </li>                                      
                        </ul>
                        <div class="controls boxprevnext">
                            <a class="prev prevlogo"><i class="fa fa-angle-left"></i></a>
                            <a class="next nextlogo"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(document).ready(function () {
                        var owladv = $(".adv-content ul");
                        owladv.owlCarousel({
                            autoPlay: true,
                            items: 3,
                            slideSpeed: 1000,
                            pagination: false,
                            itemsDesktop: [1200, 3],
                            itemsDesktopSmall: [980, 3],
                            itemsTablet: [767, 1],
                            itemsMobile: [480, 1]
                        });
                        $(".adv-content .nextlogo").click(function () {
                            owladv.trigger('owl.next');
                        })
                        $(".adv-content .prevlogo").click(function () {
                            owladv.trigger('owl.prev');
                        })
                    });
                </script>
                <!--End-->
                <script type="text/javascript">
                    window.AdvSlides = [{ "Id": 17743, "ShopId": 11960, "AdvType": 2, "AdvTypeName": "Chạy ngang", "Name": "1", "Image": "image/Uploads/images/qc1/15.jpg", "ImageThumbnai": "image/Uploads/images/qc1/15.jpg", "Link": "", "IsVideo": false, "Index": 1, "Inactive": false, "Timestamp": "AAAAAAAxvBY=" }];
                </script>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
.ul li{
  display: inline;
}
</style>