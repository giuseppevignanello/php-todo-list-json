const { createApp } = Vue

createApp({
  data() {
    return {
        api_url: "./getTask.php"
    }
  }, 
   mounted() {
    axios 
    .get(this.api_url)
    .then(response => {
        console.log(response);
    })
   }
}).mount('#app')