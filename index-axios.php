<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div  id="app">
        <div v-for="element in cd">
                <img :src=element.poster alt="" srcset="">
                <div>{{element.title}}</div>
                <div>{{element.author}}</div>
                <div>{{element.year}}</div>
            
        </div>
        
        

    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="main.js"></script>
</body>
</html>