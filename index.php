<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todolist php</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--Vue-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!--Axios-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!--Fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-column align-items-center">
                    <h1 class="mb-5">Todo List</h1>
                    <div class="content">
                        <ul class="ps-0">
                            <li v-for="(item, index) in todoList" class="d-flex justify-content-between border-bottom">
                                <span :class="item.done ? 'done' : ''">{{item.text}}</span>
                                <div>
                                    <i class="fa-solid fa-circle-check mx-3 green" @click="checkTodo(index)"></i></span>
                                    <i class="fa-solid fa-trash-can red" @click="removeTodo(index)"></i>
                                </div>
                            </li>
                        </ul>
                        <div class="d-flex align-items-center">
                            <input type="text" v-model="newTodo" class="p-1">
                            <button class="btn blue-button" @click="addTodo">Aggiungi un todo</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <script src="./script.js"></script>

    
</body>
</html>