<div class="container">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-9 ">                   
                    <div class="flexslider slideshow-content ng-scope" id="bannerheader" ng-controller="moduleController" ng-init="initSlideshowController('Slideshows')">
                        
                    <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1200%; transition-duration: 0.7s; transform: translate3d(-3432px, 0px, 0px);"><li ng-repeat="item in Slideshows" class="ng-scope clone" aria-hidden="true" style="width: 858px; float: left; display: block;">
                                <a title="4" href="">
                                    <img alt="4" ng-src="images/Uploads/images/banner1/slide-top/4.jpg" height="380" src="images/Uploads/images/banner1/4.jpg" draggable="false">
                                </a>
                            </li>
                            <!-- ngRepeat: item in Slideshows --><li ng-repeat="item in Slideshows" class="ng-scope" style="width: 858px; float: left; display: block;">
                                <a title="1" href="">
                                    <img alt="1" ng-src="images/Uploads/images/banner1/slide-top/1.jpg" height="380" src="images/Uploads/images/banner1/1.jpg" draggable="false">
                                </a>
                            </li><!-- end ngRepeat: item in Slideshows --><li ng-repeat="item in Slideshows" class="ng-scope" style="width: 858px; float: left; display: block;">
                                <a title="2" href="">
                                    <img alt="2" ng-src="images/Uploads/images/banner1/slide-top/2.jpg" height="380" src="images/Uploads/images/banner1/2.jpg" draggable="false">
                                </a>
                            </li><!-- end ngRepeat: item in Slideshows --><li ng-repeat="item in Slideshows" class="ng-scope" style="width: 858px; float: left; display: block;">
                                <a title="3" href="">
                                    <img alt="3" ng-src="images/Uploads/images/banner1/slide-top/3.jpg" height="380" src="images/Uploads/images/banner1/3.jpg" draggable="false">
                                </a>
                            </li><!-- end ngRepeat: item in Slideshows --><li ng-repeat="item in Slideshows" class="ng-scope flex-active-slide" style="width: 858px; float: left; display: block;">
                                <a title="4" href="">
                                    <img alt="4" ng-src="images/Uploads/images/banner1/slide-top/4.jpg" height="380" src="images/Uploads/images/banner1/4.jpg" draggable="false">
                                </a>
                            </li><!-- end ngRepeat: item in Slideshows -->
                            <li ng-repeat="item in Slideshows" class="ng-scope clone" style="width: 858px; float: left; display: block;" aria-hidden="true">
                                <a title="1" href="">
                                    <img alt="1" ng-src="images/Uploads/images/banner1/slide-top/5.jpg" height="380" src="images/Uploads/images/banner1/1.jpg" draggable="false">
                                </a>
                            </li></ul></div><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>
 
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#bannerheader').flexslider({
                                directionNav: true,
                                controlNav: false,
                                animation: "slide",
                                itemHeigh: 270,
                                itemMargin: 0,
                                animationSpeed: 700,
                                slideshowSpeed: 3000
                            });
                        });
                    </script>
                    <!--End-->
                    <script type="text/javascript">
                        window.Slideshows = [{ "Id": 18317, "ShopId": 11960, "Name": "1", "Image": "images/Uploads/images/banner1/1.jpg", "Link": "", "Index": 1, "Inactive": false, "Timestamp": "AAAAAAAxvJk=" }];
                    </script>
                </div>
            </div>
        </div>
        @include('layouts/fronts/sidebar')