const { createApp } = Vue;

createApp({
  data() {
    return {
      title: 'ToDo List JSON',

      todoList: [],
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
    }

  },

  mounted() {
    this.fetchTodoList();
  }


}).mount('#app')