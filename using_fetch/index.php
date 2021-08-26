<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
</head>
<body>
    <button onclick="get_data()">Fetch Data</button>
    <div class="output"></div>

</body>
    <script>
        function get_data(){
            const url = "https://jsonplaceholder.typicode.com/posts/5/comments";
            //in this return a promise about the data returning
            var output = fetch(url);
            //this is run a when data comming
            fetch(url).then(function(response){
                console.log(response.text());
            });
        }

    </script>
</html>