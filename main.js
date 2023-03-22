const { createApp } = Vue;

createApp({
  data() {
    return {
      title: 'ToDo List JSON',

      todoList: [],

      newText: ''
    }
  },

  methods: {

    // Metodo per fare chiamata al Server (PHP) e recuperare i data della risposta
    fetchTodoList() {
      axios.get('./server.php')
        .then((res) => {
          this.todoList = res.data;
          console.log(this.todoList);
        })
        .catch((error) => {
          console.log(error);
          this.todoList = [];
        })
    },

    // Metodo per aggiungere un nuovo Task
    saveNewTask() {

      //1 - Aggiungere nuovo Task nella versione Client Side
      // const newTask = {
      //   text: this.newText,
      //   done: false
      // }
      // this.todoList.push(newTask);

      //2 - Aggiungere nuovo Task nella versione Server Side
      const newTask = {
        text: this.newText,
        done: false
      }

      // Invio Dati (newTask) al Server tramite metodo "post", configurando l'Header della Richiesta
      axios.post('./server.php', newTask, {
        headers: {
          'Content-Type': 'multipart/form-data',
        }
      })
        .then((res) => {
          this.todoList = res.data;
          this.newText = '';
        })
        .catch((error) => {
          console.log(error);
          this.todoList = [];
        })
    }

  },

  mounted() {
    this.fetchTodoList();
  }


}).mount('#app')