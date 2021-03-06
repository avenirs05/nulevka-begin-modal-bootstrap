﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta name="format-detection" content="telephone=no" />
	
	<title>Nulevka.online</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="css/jquery-ui.min.css" rel="stylesheet">
    <link href="css/jquery-ui.theme.css" rel="stylesheet">
    <link href="css/jquery-ui.structure.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="functions-company.js"></script>
    <script src="functions-person.js"></script>
    <script src="functions-general.js"></script>
    <script src="events-company.js"></script>
    <script src="events-person.js"></script>
    <script src="events-general.js"></script>
</head>
<body>

<div class="modal fade" id="modal-free-consult" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Заполните данные ниже и мы вас проконсультируем по этому вопросу.</h4>
            </div>
            <div class="modal-body">
                <div><div>Имя</div><input id="name-envd" type="text" name="name-free-consult" form="form-tax-system"></div>
                <div><div>Телефон</div><input id="phone-envd" type="text" name="phone-free-consult" form="form-tax-system"></div>
                <div><div>Email</div><input id="email-envd" type="text" name="email-free-consult" form="form-tax-system"></div>
                <input type="submit" value="Отправить" name="submit-free-consult" form="form-tax-system">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid header">
    <div class="row">
        <div class="col-md-12 visible-md-block visible-lg-block">
            <a href="index.php"><img src="imgs/logo.png" alt=""></a>
            <div class="right-side">
                <button id="btn-free-consult">Бесплатная консультация</button>
                <div class="cons-phone">
                    <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>&nbsp;
                    <span class="phone-digits">8 800 350 84 70</span> 
                </div>
            </div> 
        </div>
    </div>
</div>

<div class="container-fluid main-screen visible-md-block visible-lg-block">
    <div class="row">
        <div class="col-md-12">
            <h1>Составление и сдача нулевой отчетности в 3 клика!</h1>
        </div> 
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Нулевая отчетность вашей фирмы попадает в налоговую и фонды в течение 24 часов</h3>
        </div> 
    </div>
    <div class="row adv-ipad">
        <div class="col-md-5">
            <ul>
                <li><img src="imgs/bullit-47x67.png" alt=""><span>Все регионы России</span></li>
                <li><img src="imgs/bullit-47x67.png" alt=""><span>Займет не более 120 секунд</span></li>
                <li><img src="imgs/bullit-47x67.png" alt=""><span>Не нужно платить зарплату бухгалтеру</span></li>
                <li><img src="imgs/bullit-47x67.png" alt=""><span>Около 2 000 довольных клиентов</span></li>  
            </ul>            
        </div> 
        <div class="col-md-7">
            <div class="ipad">
                <a href="company.php" target="_blank"><button class="btn-inside-ipad-1">Сделать нулевку для ООО</button></a>
                <a href="person.php" target="_blank"><button class="btn-inside-ipad-1 btn-inside-ipad-2">Сделать нулевку для ИП</button></a>
                <a href="#" target="_blank"><button class="btn-inside-ipad-1 btn-inside-ipad-3">Сделать нулевку для ИП</button>
            </div>         
        </div>
    </div>
</div>











<!-- <script>
	jQuery(function () {

    	var location = window.location.href;		
 		jQuery('.menu a').each(function () {				
        	var link = jQuery(this).attr('href');			
        	if (location == link) { 				
            	jQuery(this).addClass('change-color');      
            }
    	});
			
	});
</script> -->

</body>
</html>