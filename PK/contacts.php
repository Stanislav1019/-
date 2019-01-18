<?php
/*подключение библиотек*/
require "shop_db.inc.php";
require "shop_lib.inc.php";
header("Content-Type: text/html; charset=utf-8");

ShowHeader();
ShowMenu('','','','',current);
ShowLeftSidebar();
?>        
    <div class="content_section">    
    <h2>Контакты магазина!</h2>                    
    <p>Юридический адрес, по которому зарегистрировано предприятие:</p>
    <p>Минская ул., 10А, г. Москва.</p>
	<p>Телефон:+7 (473) 233-32-41</p>
	<p><img src="images/map.jpg" border="0" width="400" hspace="20" align="left" alt="Карта проезда до магазина"></p>                   
    </div></div></div></div>    
<?
ShowNews();
ShowFooter();
?>