<?php
/* Smarty version 3.1.30, created on 2017-09-06 14:04:59
  from "C:\Program Files (x86)\Ampps\www\sitoWeb\skin\per tutte le pagine\top_bar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b0008b6e77e5_07452777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cb3d0797f4fd884db373756a8684c31453e9d72' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\sitoWeb\\skin\\per tutte le pagine\\top_bar.tpl',
      1 => 1504706696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b0008b6e77e5_07452777 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<body>
   <header id="masthead" class="site-header affix-top sticky-header header_default header_v1">
                <div id="toolbar" class="toolbar">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="toolbar-container">
                                    <aside id="text-2" class="widget widget_text">
                                        <div class="textwidget">
                                            <div class="thim-have-any-question"> Have any question?
                                                <div class="mobile"><i class="fa fa-phone"></i><a href="tel:00123456789" class="value">(00) 123 456 789</a></div>
                                                <div class="email"><i class="fa fa-envelope"></i><a href="mailto:hello@eduma.com">hello@eduma.com</a></div>
                                            </div>
                                        </div>
                                    </aside>
                                    <aside id="login-popup-2" class="widget widget_login-popup">
                                        <div class="thim-widget-login-popup thim-widget-login-popup-base">
                                            <div class="thim-link-login thim-login-popup"> <a class="register" href="https://educationwp.thimpress.com/demo-3/account/?action=register">Register</a> <a class="login" href="https://educationwp.thimpress.com/demo-3/account/">Login</a></div>
                                            <div id="thim-popup-login" class="has-shortcode">
                                                <div class="thim-login-container" style="top: 94.5px;">
                                                    <?php echo '<script'; ?>
 type="text/javascript">
                                                        function moOpenIdLogin(app_name) {
                                                            window.location.href = 'https://educationwp.thimpress.com/demo-3/events/?option=getmosociallogin&app_name=' + app_name;
                                                        }

                                                    <?php echo '</script'; ?>
>
                                                    <a href="http://miniorange.com/cloud-identity-broker-service" style="display:none;"></a>
                                                    <a href="http://miniorange.com/strong_auth" style="display:none;"></a>
                                                    <a href="http://miniorange.com/single-sign-on-sso" style="display:none;"></a>
                                                    <a href="http://miniorange.com/fraud" style="display:none;"></a>
                                                    <div class="mo-openid-app-icons">
                                                        <p style="color:#000000"> Login with social networks</p>
                                                        <a style="width: 240px !important;padding-top:11px !important;padding-bottom:11px !important;margin-bottom: -1px !important;border-radius: 4px !important;" class="btn btn-block btn-social btn-facebook btn-custom-dec login-button" onclick="moOpenIdLogin(&quot;facebook&quot;);"> <i style="padding-top:5px !important" class="fa fa-facebook"></i> Facebook</a>
                                                        <a style="width: 240px !important;padding-top:11px !important;padding-bottom:11px !important;margin-bottom: -1px !important;border-radius: 4px !important;" class="btn btn-block btn-social btn-google btn-custom-dec login-button" onclick="moOpenIdLogin(&quot;google&quot;);"> <i style="padding-top:5px !important" class="fa fa-google-plus"></i> Google</a>
                                                        <a style="width: 240px !important;padding-top:11px !important;padding-bottom:11px !important;margin-bottom: -1px !important;border-radius: 4px !important;" class="btn btn-block btn-social btn-twitter btn-custom-dec login-button" onclick="moOpenIdLogin(&quot;twitter&quot;);"> <i style="padding-top:5px !important" class="fa fa-twitter"></i> Twitter</a>
                                                        <a style="width: 240px !important;padding-top:11px !important;padding-bottom:11px !important;margin-bottom: -1px !important;border-radius: 4px !important;" class="btn btn-block btn-social btn-linkedin btn-custom-dec login-button" onclick="moOpenIdLogin(&quot;linkedin&quot;);"> <i style="padding-top:5px !important" class="fa fa-linkedin"></i> LinkedIn</a>
                                                    </div>
                                                    <br>
                                                    <!-- login -->
                                                    <div class="thim-login">
                                                        <h2 class="title">Login with your site account</h2>
                                                        <form name="loginform" id="loginform" action="https://educationwp.thimpress.com/demo-3/wp-login.php?wpe-login=thim" method="post">
                                                            <p class="login-username"> <input type="text" name="user_login" placeholder="Username or email" id="thim_login" class="input" value="" size="20"></p>
                                                            <p class="login-password"> <input type="password" name="user_password" placeholder="Password" id="thim_pass" class="input" value="" size="20"><span id="show_pass"><i class="fa fa-eye"></i></span></p> <a class="lost-pass-link" href="https://educationwp.thimpress.com/demo-3/account/?action=lostpassword" title="Lost Password">Lost your password?</a>
                                                            <p class="forgetmenot login-remember"> <label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember Me </label></p>
                                                            <p class="submit login-submit"> <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Login"> <input type="hidden" name="redirect_to" value="http://educationwp.thimpress.com/demo-3/events/"> <input type="hidden" name="testcookie" value="1"></p>
                                                        </form>
                                                        <p class="link-bottom">Not a member yet? <a class="register" href="https://educationwp.thimpress.com/demo-3/account/?action=register">Register now</a></p>
                                                    </div>
                                                    <!-- fine login -->
                                                    <span class="close-popup"><i class="fa fa-times" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="navigation col-sm-12">
                            <div class="tm-table">
                                <div class="width-logo table-cell sm-logo">
                                    <a href="https://educationwp.thimpress.com/demo-3/" title="Education WP - Demo 3 - Education WordPress Theme" rel="home" class="no-sticky-logo">
                                        <img src="https://3ek5k1tux0822q3g83e30fye-wpengine.netdna-ssl.com/demo-3/wp-content/uploads/sites/19/2015/11/logo-sticky.png" alt="Education WP - Demo 3"></a>
                                    <a href="https://educationwp.thimpress.com/demo-3/" rel="home" class="sticky-logo">
                                        <img src="https://3ek5k1tux0822q3g83e30fye-wpengine.netdna-ssl.com/demo-3/wp-content/uploads/sites/19/2015/11/logo-sticky.png" alt="Education WP - Demo 3">
                                    </a>
                                </div>
                                <nav class="width-navigation table-cell table-center" >
                                    <ul class="nav navbar-nav menu-main-menu" style= "text-align: initial;">
                                        
                                        
                                      
                                        <span id="magic-line" style="width: 52px; left: 735px; bottom: 26px;"></span>
                                        <li id="menu-item-5891" class="menu-item menu-item-type-post_type_archive menu-item-object-tp_event current-menu-item menu-item-5891 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default" >
                                            <a href="https://educationwp.thimpress.com/demo-3/events/" class="tc-menu-inner">Events</a>
                                        </li>
                                       
                                       
                                        <li id="menu-item-99" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                                            <a href="https://educationwp.thimpress.com/demo-3/contact/" class="tc-menu-inner">Contact</a>
                                        </li>
                                        
                                        <li class="menu-right" style= "text-align: initial;" >
                                            <ul>
                                                <li id="courses-searching-2" class="widget widget_courses-searching">
                                                    <div class="thim-widget-courses-searching thim-widget-courses-searching-base">
                                                        <div class="thim-course-search-overlay">
                                                            <div class="search-toggle"><i class="fa fa-search"></i></div>
                                                            <div class="courses-searching layout-overlay">
                                                                <div class="search-popup-bg"></div>
                                                                <form method="get" action="https://educationwp.thimpress.com/demo-3/courses/"> <input type="text" value="" name="s" placeholder="Search courses..." class="thim-s form-control courses-search-input" autocomplete="off"> <input type="hidden" value="course" name="ref"> <button type="submit"><i class="fa fa-search"></i></button> <span class="widget-search-close"></span></form>
                                                                <ul class="courses-list-search list-unstyled"></ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="menu-mobile-effect navbar-toggle" data-effect="mobile-effect"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
    
</body>
</html><?php }
}
