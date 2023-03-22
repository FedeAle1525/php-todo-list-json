<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <title>ToDo List JSON</title>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>

  <div id="app">
    <div class="container">
      <h1 class="text-center py-4"> {{ title }} </h1>
    </div>

    <div class="container d-flex justify-content-center">
      <ul class="list-unstyled border border-success rounded py-2 px-2 w-50">
        <li class="my-2" v-for="task in todoList">
          {{ task.text }}
        </li>
      </ul>

    </div>

    <div class="container d-flex justify-content-center align-items-center">
      <input type="text" class="form-control w-25" placeholder="Inserisci nuovo Task" name="task" v-model="newText">
      <button type="submit" class="btn btn-warning" @click="saveNewTask">Inserisci</button>
    </div>

  </div>

  <script src="./main.js"></script>
</body>

</html>