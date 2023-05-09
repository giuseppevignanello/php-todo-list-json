<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<title>To Do List</title>
</head>

<body>

    <div id="app">
        <?php include __DIR__ . "/header.php" ?>
        <main>
            <div class="container">
                <div class="card content p-3">
                    <ul>
                        <li v-for="(task, index) in tasks">
                            <div class="d-inline" :class="{'completed': task.status}">
                                {{task.text}}
                            </div>
                            <button class="btn" @click="taskDone(index)">✅</button>
                            <button class="btn" @click="deleteTask(index)"> ❌</button>
                        </li>
                    </ul>
                    <!-- to do list  -->
                    <input class="form-control" type="text" placeholder="Insert a new task" aria-label="default input example" v-model="newTask" @keyup.enter="addTask">
                    <div class="buttons d-flex">
                        <button class="button bg_main  mt-2 w-25 text-white me-2" @click="addTask"> Add
                        </button>
                        <button class="button mt-2 w-25 text-white bg_tertiary" @click="deleteAllTasks"> Delete All
                        </button>
                    </div>

                    <!-- input field  -->
                </div>

            </div>
        </main>
        <?php include __DIR__ . "/footer.php" ?>
    </div>

</body>



<script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
<script src='https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js'></script>
<script src="./app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</html>