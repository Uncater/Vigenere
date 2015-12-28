<!--<div style="margin:10px">
<h1>Шифр Виженера</h1>


<form  method="post" action="index.php">
   <p><b>Введите ключ для шифрования:</b><br>
  <p><input type="text" name = "key" size="20"></p>

   <p><b>Введите строку для шифрования:</b><br>
     <p><textarea rows="10" cols="60" name="text"></textarea></p>
    </p>

   <p ><input style="float:left; margin:5px" type="submit" name="decrypt" value = "Шифровать" /> </p>
   <p><input style="float:left; margin:5px" type="submit" name="encrypt" value = "ифровать" /></p>
  </p>
</form>
</div>
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Вьюха</title>
    <link href="http://88.198.19.85/scripts/Cryptography/css/bootstrap.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script>
        function send(action) {

                if (action == 1){
                   var  url =  '/scripts/Cryptography/index.php/vigenerecipher/getEncrypt/';
                } else {
                   var  url =  '/scripts/Cryptography/index.php/vigenerecipher/getDescrypt/';
                }
                    var key = $('#key').val();
                    var message = $('#message').val();
                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: 'text=' + message + '&key=' + key,
                        beforeSend: function () {
                        },
                        success: function (data) {
                            $('#result').html(data);
                        },
                        error: function (xhr, status, error) {
                            alert(xhr.responseText + '|\n' + status + '|\n' + error);
                        }

                    });

            }
            ;
    </script>
  </head>
  <body>
  <div class="row">
            <div class="form-group col-sm-6">
                <label for="name" class="h4">Введите ключ для шифрования:</label>
                <textarea  id="key" class="form-control" rows="5" placeholder="Введите ключ для шифрования (латинница, большие буквы, без пробелов)" required></textarea>
            </div>
            <div class="form-group col-sm-6">
                <label for="email" class="h4">Введите строку для шифрования:</label>
                <textarea id="message" class="form-control" rows="5" placeholder="Введите строку для шифрования (латинница, большие буквы, без пробелов)" required></textarea>
            </div>
        </div>
        <button type="submit" class="btnbtn-success btn-lg pull-left " style="margin: 0 10px " onclick="send(1)">Шифровать</button>
        <button type="submit" class="btnbtn-success btn-lg pull-left " style="margin: 0 10px" onclick="send(2)"> Расшифровать</button>
        <button type="submit" class="btnbtn-success btn-lg pull-left " style="margin: 0 10px"> Найти длину ключа</button>
        <button type="submit" class="btnbtn-success btn-lg pull-left " style="margin: 0 10px"> Дешифровать</button><input type="text" > Длина ключа

        <br/>
         <br/>

    <div  id="result"></div>

  </body>
</html>
