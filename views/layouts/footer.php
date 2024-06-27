<?php
/**
 * Created by PhpStorm.
 * User: MinhDuc
 * Date: 4/22/2017
 * Time: 10:15 AM
 */
use yii\helpers\Url;
?>

<!--====== FOOTER PART START ======-->
<footer id="footer" class="footer-area pt-100">
    <div class="container">
<!--        <section class="map-section map-style-9">-->
<!--            <div class="map-container">-->
<!--                <object style="border:0; height: 500px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d489.9258479977355!2d106.6873031!3d10.7801239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f2fdd6d0577%3A0xe64d8da73ee1d5e5!2zVHJ1bmcgdMOibSDhu6huZyBk4bulbmcgR0lTIFRQLkhDTQ!5e0!3m2!1svi!2sus!4v1714703285594!5m2!1svi!2sus"></object>-->
<!--            </div>-->
<!---->
<!--        </section>-->
        <!-- subscribe area -->
        <div class="footer-widget pb-30 mt-200">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <a class="logo" href="javascript:void(0)">
                            <img src="resources/images/logo/logo.png" alt="logo" />
                        </a>
                        <p class="text">
                            Ho Chi Minh City Geographic Information System Applycation Center (HCMGIS) focuses on consulting, developing, training and transferring GIS solutions and applications in urban management, natural resources and environment, and economic-cultural-social development.
                        </p>
                        <ul class="social">
                            <li>
                                <a href="https://www.facebook.com/hcmgis/">
                                    <i class="lni lni-facebook-filled"> </i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/hcmgis/">
                                    <i class="lni lni-linkedin-original"> </i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="lni lni-twitter-filled"> </i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="lni lni-instagram-filled"> </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- footer about -->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="footer-link d-flex mt-50 justify-content-sm-between">
<!--                        <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">-->
<!--                            <div class="footer-title">-->
<!--                                <h4 class="title">Quick Link</h4>-->
<!--                            </div>-->
<!--                            <ul class="link">-->
<!--                                <li><a href="javascript:void(0)">Road Map</a></li>-->
<!--                                <li><a href="javascript:void(0)">Privacy Policy</a></li>-->
<!--                                <li><a href="javascript:void(0)">Refund Policy</a></li>-->
<!--                                <li><a href="javascript:void(0)">Terms of Service</a></li>-->
<!--                                <li><a href="javascript:void(0)">Pricing</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
                        <!-- footer wrapper -->
                        <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="footer-title">
                                <h4 class="title">Liên kết</h4>
                            </div>
                            <ul class="link">
                                <li><a href="<?= Yii::$app->getHomeUrl() ?>">Trang chủ</a></li>
                                <li><a href="<?= Url::to(['/san-pham']) ?>">Sản phẩm</a></li>
                                <li><a href="<?= Url::to(['/tin-tuc']) ?>">Tin tức</a></li>
                                <li><a href="<?= Url::to(['/tu-lieu']) ?>">Tư liệu</a></li>
                            </ul>
                        </div>
                        <!-- footer wrapper -->
                    </div>
                    <!-- footer link -->
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div
                            class="footer-contact mt-50 wow fadeIn"
                            data-wow-duration="1s"
                            data-wow-delay="0.8s"
                    >
                        <div class="footer-title">
                            <h4 class="title">Liên hệ</h4>
                        </div>
                        <ul class="contact">
                            <li><b>Trung tâm Ứng dụng Hệ thống Thông tin Địa lý Thành phố Hồ Chí Minh</b></li>
                            <li><a href="tel:02839320963">(028) 3932 0963</a> – Fax: (028) 3932 0963</li>
                            <li><a href="mailto:contact@hcmgis.vn">contact@hcmgis.vn</a></li>
                            <li>https://hcmgis.vn</li>
                            <li>
                                244 Điện Biên Phủ, Phường Võ Thị Sáu,
                                Quận 3, Thành phố Hồ Chí Minh
                            </li>
                        </ul>
                    </div>
                    <!-- footer contact -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- footer widget -->
        <div class="footer-copyright">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright d-sm-flex justify-content-between">
                        <div class="copyright-content">
                            <p>© 2023 - <?php echo date('Y');?> <strong>HCMGIS</strong></p>
                        </div>
                        <!-- copyright content -->
                    </div>
                    <!-- copyright -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- footer copyright -->
    </div>
    <!-- container -->
    <div id="particles-footer"></div>
</footer>
<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TOP TOP PART START ======-->
<a href="#" class="back-to-top"> <i class="lni lni-chevron-up"> </i> </a>
<!--====== BACK TOP TOP PART ENDS ======-->

<script>

</script>