<?php 
/*����� �������*/
define("DB_HOST", "localhost");
/*����� ��� ���������� � �����*/
define("DB_LOGIN", "root");
/*������ ��� ���������� � �����*/
define("DB_PASSWORD", "");
/*��� ���� ������*/
define("DB_NAME", "PK");
/*��� ����� � ������� ������� �������������*/
define("ORDERS_LOG", "orders.log");
 
/*���������� ������� � ������� ������������. ���������� ����*/
$count = 0;
 
/*������������� ���������� � �������� ���� ������*/
mysql_connect(DB_HOST, DB_LOGIN, DB_PASSWORD) or die("�� ���� ����������� � �������� ���� ������!");
/*�������� ���� ������*/
mysql_select_db(DB_NAME) or die(mysql_error());
/*��� ���������� ������� � �������, ������� $count ����� ��������, �� ���� ����� �������� ���������� ������� � �������*/
$sql = "SELECT count(*) FROM basket WHERE customer='".session_id()."'";
$resultat = mysql_query($sql) or die(mysql_error());
$count = mysql_result($resultat, 0, "count(*)");
?>
