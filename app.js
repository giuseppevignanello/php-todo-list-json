const { createApp } = Vue

createApp({
  data() {
    return {
        api_url: "./getTask.php",
        tasks: [], 
        newTask: ""
    }
  }, 
  methods: {
    addTask() {
        this.tasks.push(this.newTask)
    }
  },
   mounted() {
    //call the API
    axios 
    .get(this.api_url)
    .then(response => {
        console.log(response);
        this.tasks = response.data
    })
    .catch(error => {
        console.error(error.message);
      })
   }
}).mount('#app')