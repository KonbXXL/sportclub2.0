<?php
require_once __DIR__ .'/../../classes/DB.php';
$db=new DB;
$r=mysql_query ("select * from servises");
$r2=mysql_query("select * from client");
$r3=mysql_query("select * from sotrudniki");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>АИС СПОРТИВНЫЙ КЛУБ</title>
    <link rel="stylesheet" href="../css/abonement.css" media="screen" type="text/css" />
</head>

<body>
<div class="vladmaxi-top">
    <a href="http://localhost/SportClub2.0/">АИС СпортивныйКлуб</a>
        <span class="right">
        <a href="http://localhost/SportClub2.0/">
            <strong>Вернуться к списку</strong>
        </a>
        </span>
    <div class="clr"></div>
</div>
<div id="login">
    <div class="flip">
        <div class="form-signup">
            <h1>Новый абонемент</h1>
            <br/>
            <fieldset>
                <p class="login-msg"></p>
                <form action="add_card.php" method="post">
                    <div class="hd">
                    <div id="photo">
                        <img src="http://localhost/sportclub2.0/avatars/full/blank-avatar.jpg" class="profile-photo" id="foto-img">
                    </div>
                    <h2>Бассейн "ТЕМП"</h2><br/><br/>
                   <p >АБОНЕМЕНТ №<input  name="form[Nomer]" type="abonement" required />
                       <br/>(без права передачи)</p>
                    </div>
                    <div class="content">
                        <div class="c1">
                    <p >Ф.И.О
                    <select name="form[Client_ID]" >
                        <option value="">Клиент</option>
                        <?php while ($row=mysql_fetch_array($r2)){
                            echo
                                '<option value="'.$row["ClientID"].'">'.$row["LastName"].' '.$row["Name"].' '.$row["FastName"].'</option>';
                        };?></select></p>
                    <p>Услуга
                    <select name="form[Servises]" >
                        <option value="">Выбирете услугу</option>
                        <?php while ($row=mysql_fetch_array($r)){
                            echo
                                '<option value="'.$row["ServisesID"].'">'.$row["Nazvanies"].'</option>';
                        };?></select></p></div>
                        <div class="c2">
                    <label>Дни и часы занятий</label>
                    <table border="1" cellspacing="0" >
                        <thead>
                        <tr>
                            <th>Пн.</th>
                            <th>Вт.</th>
                            <th>Ср.</th>
                            <th>Чт.</th>
                            <th>Пт.</th>
                            <th>Сб.</th>
                            <th>Вс.</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input name="form[Pn]" type="time"/></td>
                            <td><input name="form[Vt]" type="time"/></td>
                            <td><input name="form[Sr]" type="time"/></td>
                            <td><input name="form[Ch]" type="time"/></td>
                            <td><input name="form[Pt]" type="time"/></td>
                            <td><input name="form[Su]" type="time"/></td>
                            <td><input name="form[Vs]" type="time"/></td>
                        </tr>
                        </tbody>
                    </table>
                            </div>
                        <div class="c3">
                    <p>ФИО тренера
                        <select name="form[Sotrudnik]" >
                            <option value="">........</option>
                            <?php while ($row=mysql_fetch_array($r3)){
                                echo
                                    '<option value="'.$row["SotrudnikID"].'">'.$row["LastName"].' '.$row["Name"].' '.$row["FastName"].'</option>';
                            };?></select>
                    </p>
                    <p>Виза врача
                    <input  name="form[Vrach]" type="vrach" placeholder="ФИО"  />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="form[VrachData]" type="data" placeholder="Год-Месяц-День"  /> </p>
                    <p>Действителен с <?php echo " <input name='form[Data]' type='data' value='".date("Y-m-d")."'/>";?>
                        по <input name="form[DataEnd]" type="data" placeholder="Год-Месяц-День"  />
                    </p></div>
                        <div class="c4">
                    <label>отметка о посещение занятий</label>
                    <table border="1" cellspacing="0">
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                            <td>11</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>14</td>
                            <td>15</td>
                            <td>16</td>
                            <td>17</td>
                            <td>18</td>
                            <td>19</td>
                            <td>20</td>
                            <td>21</td>
                            <td>22</td>
                            <td>23</td>
                            <td>24</td>
                        </tr>
                        </tbody>
                    </table>
                        </div>
            </fieldset>
            <input type="submit" value="Добавить" />
            </form>
        </div>
    </div>
</div>
</body>
</html>
