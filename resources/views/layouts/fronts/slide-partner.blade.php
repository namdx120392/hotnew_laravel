<div class="partner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--Begin-->
                <div class="partner-content owl-carousel" ng-controller="moduleController" ng-init="initPartnerController('Partners')">
                    <div class="partner-block">
                      <div class="partner-item" ng-repeat="item in Partners">                            
                            <img src="{{asset('images/Uploads/images/dt/5.png')}}">                           
                        </div>
                        <div class="partner-item" ng-repeat="item in Partners">                            
                            <img src="{{asset('images/Uploads/images/dt/5.png')}}">                           
                        </div>
                        <div class="partner-item" ng-repeat="item in Partners">                            
                            <img src="{{asset('images/Uploads/images/dt/5.png')}}">                           
                        </div>
                        <div class="partner-item" ng-repeat="item in Partners">                            
                            <img src="{{asset('images/Uploads/images/dt/5.png')}}">                           
                        </div>
                        <div class="partner-item" ng-repeat="item in Partners">                            
                            <img src="{{asset('images/Uploads/images/dt/5.png')}}">                           
                        </div>
                        <div class="partner-item" ng-repeat="item in Partners">                            
                            <img src="{{asset('images/Uploads/images/dt/5.png')}}">                           
                        </div>
                    </div>
                    <div class="controls boxprevnext">
                        <a class="prev prevlogo"><i class="fa fa-angle-left"></i></a>
                        <a class="next nextlogo"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <script type="text/javascript">
                    $(document).ready(function () {
                        var owl = $(".partner-block");
                        owl.owlCarousel({
                            autoPlay: true,
                            autoPlay: 5000,
                            items: 5,
                            slideSpeed: 1000,
                            pagination: false,
                            itemsDesktop: [1200, 6],
                            itemsDesktopSmall: [980, 5],
                            itemsTablet: [767, 4],
                            itemsMobile: [480, 2]
                        });
                        $(".partner-content .nextlogo").click(function () {
                            owl.trigger('owl.next');
                        });
                        $(".partner-content .prevlogo").click(function () {
                            owl.trigger('owl.prev');
                        });
                    });
                </script>
                <!--End-->
                <script type="text/javascript">
                    window.Partners = [{ "Id": 21694, "ShopId": 11960, "Name": "1", "Link": "", "Logo": "image/Uploads/images/dt/1.png", "Index": 1, "Inactive": false }, { "Id": 21695, "ShopId": 11960, "Name": "2", "Link": "", "Logo": "image/Uploads/images/dt/2.jpg", "Index": 2, "Inactive": false }, { "Id": 21696, "ShopId": 11960, "Name": "3", "Link": "", "Logo": "image/Uploads/images/dt/3.png", "Index": 3, "Inactive": false }, { "Id": 21697, "ShopId": 11960, "Name": "4", "Link": "", "Logo": "image/Uploads/images/dt/4.png", "Index": 4, "Inactive": false }, { "Id": 21698, "ShopId": 11960, "Name": "5", "Link": "", "Logo": "image/Uploads/images/dt/5.png", "Index": 5, "Inactive": false }, { "Id": 21699, "ShopId": 11960, "Name": "6", "Link": "", "Logo": "image/Uploads/images/dt/6.png", "Index": 6, "Inactive": false }];
                </script>
            </div>
        </div>
    </div>
</div>