<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
</head>
<body>
    <div class="output"></div>

</body>
    <script>
        const ajax = new XMLHttpRequest();
        const url = "https://jsonplaceholder.typicode.com/todos";
        var output = document.querySelector(".output");
        output.innerHTML = "Loading.........";
        ajax.addEventListener('readystatechange', function(){
            if(ajax.readyState == 4 && ajax.status == 200){
                output.innerHTML = "<pre>" + ajax.responseText;

            }
        });
        ajax.open('get',url,true);
        ajax.send();



    </script>
</html>