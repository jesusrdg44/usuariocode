<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $nombre_pagina ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="<?=base_url(RECURSO_USARIO_IMAGE.'/icons/favicon.ico') ?>">

    <link rel="icon" type="image/png" href="<?=base_url(RECURSO_USARIO_IMAGE.'/bg-01.jpg') ?>"> 
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url(RECURSO_USARIO_VENDOR.'/bootstrap/css/bootstrap.min.css') ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url(RECURSO_USARIO_FONTS.'/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url(RECURSO_USARIO_FONTS.'/Linearicons-Free-v1.0.0/icon-font.min.css') ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url(RECURSO_USARIO_VENDOR.'/animate/animate.css') ?>"> 
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?=base_url(RECURSO_USARIO_VENDOR.'/css-hamburgers/hamburgers.min.css') ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url(RECURSO_USARIO_VENDOR.'/animsition/css/animsition.min.css') ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url(RECURSO_USARIO_VENDOR.'/select2/select2.min.css') ?>">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?=base_url(RECURSO_USARIO_VENDOR.'/daterangepicker/daterangepicker.css') ?>">

    <link rel="stylesheet" href="<?= base_url(RECURSO_USARIO_PLUGINS. '/toastr/toastr.min.css')?>">

<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url(RECURSO_USARIO_CSS.'/util.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url(RECURSO_USARIO_CSS.'/main.css') ?>">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
<?php 
if(session()->getFlashdata('msg')):?>
        <div>
    <?= session()->getFlashdata('msg') ?></div>
    <?php 
     endif;
     ?>
    
    <div class="limiter">
        <div class="container-login100">

            <div class="wrap-login100">

                <?= form_open('iniciar_sesion' , [
                    // "action" => "login/authenticate",
                    "method" => "post",
                    "class" => "login100-form validate-form", 
                    "id" => "form-login"
                    ]) 
                ?>
                    <span class="login100-form-title p-b-43">
                        <?= $titulo_pagina ?>
                    </span>
                    
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <?php 
                        $attributes = [
                            "class" => "input100",
                            "type" => "email",
                            "name" => "email",
                        ];
                        echo form_input($attributes);
                        ?>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <?php 
                        $attributes = [
                            "class" => "input100",
                            "type" => "password",
                            "name" => "pass",
                        ];
                        echo form_input($attributes);
                        ?>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>

                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div class="contact100-form-checkbox">
                            <?php 
                            $data = [
                                "name" => "remember-me",
                                "id" => "ckb1",
                                "value" => "accept",
                                'checked' => true,
                                'style' => 'margin:10px',
								
                            ];
                            echo form_checkbox($data);
                            ?>
                            Recordarme
                        </div>

                        <div>
                            <a href="#" class="txt1">
                                Forgot Password?
                            </a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <?php 
                        $attributes = [
                            "class" => "login100-form-btn",
                            "type" => "submit",
                            "name" => "submit",
                        ];
                        echo form_button($attributes, 'Login');
                        ?>
                    </div>
               



                    
                <div class="text-center p-t-46 p-b-20">
                    <span class="txt2">
                        or sign up using
                    </span>
                </div>

                <div class="login100-form-social flex-c-m">
                    <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                        <i class="fa fa-facebook-f" aria-hidden="true"></i>
                    </a>

                    <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </div>
                <?= form_close() ?> 

                <div class="login100-more" style="background-image: url('<?= base_url(RECURSO_USARIO_IMAGE.'/bg-01.jpg') ?>');">

                
            </div>
            </div>
		

        </div>
</div>	
									


									

    
<!--===============================================================================================-->
    <script src="<?=base_url(RECURSO_USARIO_VENDOR.'/jquery/jquery-3.2.1.min.js') ?>"></script>
<!--===============================================================================================-->
    <script src="<?=base_url(RECURSO_USARIO_VENDOR.'/animsition/js/animsition.min.js') ?>"></script>
<!--===============================================================================================-->
    <script src="<?=base_url(RECURSO_USARIO_VENDOR.'/bootstrap/js/popper.js') ?>"></script>
    <script src="<?=base_url(RECURSO_USARIO_VENDOR.'/bootstrap/js/bootstrap.min.js') ?>"></script>
<!--===============================================================================================-->
    <script src="<?=base_url(RECURSO_USARIO_VENDOR.'/select2/select2.min.js') ?>"></script>
<!--===============================================================================================-->
    <script src="<?=base_url(RECURSO_USARIO_VENDOR.'/daterangepicker/moment.min.js') ?>"></script>
    <script src="<?=base_url(RECURSO_USARIO_VENDOR.'/daterangepicker/daterangepicker.js') ?>"></script>
<!--===============================================================================================-->
    <script src="<?=base_url(RECURSO_USARIO_VENDOR.'/countdowntime/countdowntime.js') ?>"></script>

    <!-- Toastr -->
    <script src="<?= base_url(RECURSO_PANEL_PLUGINS. '/toastr/toastr.min.js') ?>"></script>

    <script>
    <?= show_message() ?>
    </script>
<!-- Admin
<!--===============================================================================================-->
    <script src="<?= base_url(RECURSO_USARIO_JS . '/main.js') ?> "></script>

</body>
</html>
