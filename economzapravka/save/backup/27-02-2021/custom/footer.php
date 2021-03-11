<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom
 */
wp_footer();
?>
<!-- FOOTER -->
<footer id="contacts">
    <img src="<?php echo get_template_directory_uri (); ?>/img/spot15.png" alt="" class="blot blot15">
    <img src="<?php echo get_template_directory_uri (); ?>/img/spot16.png" alt="" class="blot blot16">
    <img src="<?php echo get_template_directory_uri (); ?>/img/img3.png" alt="" class="mouse-parallax-bg6 imgpos img8">
    <div class="footer-menu">
        <div class="container">
            <div class="flex">
                <!-- 1 -->
                <div class="item item1">
                    <a href="#" class="logo">
                        <img src="<?php the_field('footer_logo'); ?>" alt="">
                    </a>
                    <p class="address"><?php the_field('footer_address'); ?></p> 
                </div>
                <!-- 2 -->
                <div class="item item2">
                    <div>
                        <img src="<?php echo get_template_directory_uri (); ?>/img/footer-icon1.png" alt="">
                        <p><?php the_field('footer_grafik'); ?></p>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri (); ?>/img/footer-icon2.png" alt="">
                        <p><?php the_field('footer_email'); ?></p>
                    </div>
                </div>
                <div class="item item3">
                    <div>
                        <img src="<?php echo get_template_directory_uri (); ?>/img/tel-icon.png" alt="">
                        <a href="#" class="tel touchnumber"><?php the_field('footer_phone'); ?></a>
                    </div>
                    <a href="#test-popup" class="hinge1 button">Обратная связь</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copy">
        <p>ЭКОНОМ ЗАПРАВКА © 2020</p>
    </div>
    <div class="footer-white"></div>
</footer>
<!-- FOOTER -->
<a href="#" class="scrollToTop"><img src="https://economzapravka.ru/wp-content/themes/custom/img/btnup.png" alt=""></a>
<script type="text/javascript">
        jQuery(document).on("click", 'input[type="submit"]', function() {
            var m = jQuery(this).closest('form');
            var fio = m.find('input[name="person"]').val();
            var phone = m.find('input[name="contact"]').val();
            var comment = m.find('textarea[name="message"]').val();
            var ct_site_id = '24111';
            var sub = 'Заявка';
            var ct_data = {            
            fio: fio,
            phoneNumber: phone,
            comment: comment,
            subject: sub,
            sessionId: window.call_value
            };
            if (!!phone && !!fio){
                jQuery.ajax({ 
                  url: 'https://api-node7.calltouch.ru/calls-service/RestAPI/requests/'+ct_site_id+'/register/',     
                  dataType: 'json',type: 'POST', data: ct_data, async: false
                });
            }
        });
    </script>
    <script type='text/javascript'>
        var _ctreq = function(data, sid = 24111, nid = 7) {
            var request = window.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):new XMLHttpRequest(),
                post_data = Object.keys(data).reduce(function(a, k) {if(!!data[k]){a.push(k + '=' + encodeURIComponent(data[k]));}return a}, []).join('&'),
                url = 'https://api-node'+nid+'.calltouch.ru/calls-service/RestAPI/'+sid+'/requests/orders/register/';
            request.open("POST", url, true); request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); request.send(post_data);
        }
        window.jivo_onIntroduction = function() {  
            var jct_data = {}, jc = jivo_api.getContactInfo();
            jct_data.phoneNumber = jc.phone; jct_data.email = jc.email; jct_data.fio = jc.client_name; jct_data.sessionId = window.call_value; jct_data.subject = 'JivoSite посетитель оставил контакты';
            _ctreq(jct_data)
        }
        window.jivo_onCallStart = function() {
            var jct_data = {}, jc = jivo_api.getContactInfo();
            jct_data.phoneNumber = jc.phone; jct_data.sessionId = window.call_value; jct_data.subject = 'JivoSite обратный звонок';
            _ctreq(jct_data)
        }
        window.jivo_onMessageSent = function() { ct('goal','jivo_ms'); }
    </script>
    <!-- Modal -->  
    <!-- Popup itself -->
    <div id="test-popup" class="white-popup mfp-hide">
        <div class="form">
				<?php the_field('modal_form'); ?>
        </div>
    </div>
</body>
</html>