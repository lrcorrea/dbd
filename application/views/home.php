<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?= $titulo; ?></title>
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>style/fonts.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>style/style.css">
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	
</head>
<body>
    <div class="bg_top">
        <div class="center">
            <div class="phone">
                <img src="<?php echo base_url();?>style/img/phone.png">
                <p><span>54</span> 3027.4508</p>
            </div>
            <div class="process">
                <a href="http://www.tjrs.jus.br/busca/?tb=proc" target="_blank" class="link_process">ACOMPANHE SEU PROCESSO</a>
                <img src="<?php echo base_url();?>style/img/lupa.png" alt="">    
            </div>
            
            <!-- <a href="" class="process">
                <p>ACOMPANHE SEU PROCESSO</p>
                <input class="process_input" type="text" placeholder="ACOMPANHE SEU PROCESSO">
                <button class="glass"></button>
            </a> -->
            <div class="logo">
                <img class="logo1" src="<?php echo base_url();?>style/img/logo1.png" alt="">
                <div style="clear: both;"></div>
                <img src="<?php echo base_url();?>style/img/logo2.png" alt="">
                <div style="clear: both;"></div>
                <img src="<?php echo base_url();?>style/img/logo3.png" alt="">
            </div>
        </div>
        <button class="down"></button>
        <img class="arrow_down" src="<?php echo base_url();?>style/img/arrow_down.png" alt="">
    </div>
    <section class="works">
        <div class="center">
            <h1>ÁREAS DE ATUAÇÃO</h1>
            <p>Atuamos nos seguintes ramos do direito:</p>
            <div class="box">
                <div class="img">
                    <img src="<?php echo base_url();?>style/img/box_1.png" alt="">
                </div>
                <p>DIREITO CIVIL</p>
            </div>
            <div class="box">
                <div class="img">
                    <img class="img_left" src="<?php echo base_url();?>style/img/box_2.png" alt="">
                </div>
                <p>DIREITO DA FAMÍLIA</p>
            </div>
            <div class="box">
                <div class="img">
                    <img src="<?php echo base_url();?>style/img/box_3.png" alt="">
                </div>
                <p>DIREITO DO CONSUMIDOR</p>
            </div>
            <div class="box">
                <div class="img">
                    <img src="<?php echo base_url();?>style/img/box_4.png" alt="">
                </div>
                <p>COBRANÇAS</p>
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="contact_full">
            <h1 class="title_links">LINKS ÚTEIS</h1>
            <div class="links">
                <div class="link1">
                    <img src="<?php echo base_url();?>style/img/tjrs.png" alt="">
                    <a target="_blank" href="http://www.tjrs.jus.br/site/">TJRS - Justiça estadual</a>
                </div>
                <div class="link2">
                    <img src="<?php echo base_url();?>style/img/trf4.png" alt="">
                    <a target="_blank" href="http://www2.trf4.jus.br/trf4/">TRF4 - Justiça Federal</a>
                </div>
                <div class="link3">
                    <img src="<?php echo base_url();?>style/img/detran.png" alt="">
                    <a target="_blank" href="http://www.detran.rs.gov.br/">Detran RS</a>
                </div>
            </div>
            <h1 class="title_contact">ENTRE EM CONTATO</h1>
            <p>Preencha o formulário e envie-nos uma mensagem</p>
            <div class="center">
                <form method="post" action="<?php echo base_url();?>home/send" class="form_contact">
                    <input class="name" name="name" type="text" placeholder="Nome">
                    <input class="email" name="email" type="text" placeholder="E-mail">
                    <input class="phone_in" name="phone" type="text" id="phone_in" maxlength="15" placeholder="Telefone">
                    <textarea name="msg" class="msg" placeholder="Mensagem"></textarea>
                    <button type="submit" class="submit">Enviar Mensagem</button>
                </form>
            <?php if($enviou){ ?><p id="status">Mensagem enviada com sucesso</p><?php }?>
            <?php if($enviou){ echo $teste; }?>
            </div> 
            <div class="footer">
                <div class="center">
                    <div class="addres">
                        <img src="<?php echo base_url();?>style/img/contact_map.png" alt="">
                        <p>Av. Júlio de Castilhos, 1511, Centro Comercial Dona Adelaida, S</p>
                    </div>
                    <div class="cel_phone">
                        <img src="<?php echo base_url();?>style/img/contact_phone.png" alt="">
                        <p>54 3027.4508</p>
                    </div>
                    <div class="email_footer">
                        <img src="<?php echo base_url();?>style/img/contact_email.png" alt="">
                        <p>contato@dbdadvocacia.com.br</p>
                    </div>
                    <a target="_blank" href="http://www.witcode.com.br"><img class="wit" src="<?php echo base_url();?>style/img/witcode.png" alt=""></a>
                </div>
                <div class="maps">
                    <div id="map_canvas" class="mapa" style="width:100%; height:435px;float:left; margin-top:30px;"></div>
                </div>
            </div>
        </div>
    </section>

<script src="<?= base_url()?>js/jquery.js"></script>
<script src="<?= base_url()?>js/js.js"></script>
</body>
</html>