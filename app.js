const { createApp } = Vue

createApp({
  data() {
    return {
        api_url: "./getTask.php",
        tasks: []
    }
  }, 
   mounted() {
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