<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.7/axios.min.js" integrity="sha512-DdX/YwF5e41Ok+AI81HI8f5/5UsoxCVT9GKYZRIzpLxb8Twz4ZwPPX+jQMwMhNQ9b5+zDEefc+dcvQoPWGNZ3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>PHP ToDoList</title>
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-12 bg-info mb-5">
                    <h1 class="text-secondary-emphasis p-3">ToDo List</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="list-group">
                        <li class="list-group-item bg-info d-flex align-items-center text-secondary-emphasis" v-for="(todo, index) in todoList" :key="index">
                            <div class="col-4 align-items-center">
                                <span>{{ todo.name }}</span>
                            </div>
                            <div class="col-4 text-center">
                                <span v-if="todo.done" class="badge text-bg-success me-2">Done</span>
                                <span v-else class="badge text-bg-warning me-2">ToDo</span>
                            </div>
                            <div class="col-4 text-end">
                                <button type="button" class="btn btn-success me-2"><i class="fa-solid fa-check"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                            </div>
                        </li>
                    </ul>
                    <div class=" d-flex mt-3">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="inserisci ToDo">
                        <button class="btn btn-primary ms-3 px-3 fs-4">+</button>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>