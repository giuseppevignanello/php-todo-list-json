const { createApp } = Vue;

createApp({
  data() {
    return {
      api_get_url: "./getTask.php",
      api_post_url: "./postTasks.php",
      tasks: [],
      newTask: "",
    };
  },
  methods: {
    addTask() {
      this.tasks.push(this.newTask);

      const data = {
        newTask: this.newTask,
      };

      axios
        .post(this.api_post_url, data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((response) => {
          console.log(response);
        })
        .catch((error) => {
          console.error(error.message);
        });
      this.newTask = "";
    },
  },
  mounted() {
    //call the API
    axios
      .get(this.api_get_url)
      .then((response) => {
        console.log(response);
        this.tasks = response.data;
      })
      .catch((error) => {
        console.error(error.message);
      });
  },
}).mount("#app");
