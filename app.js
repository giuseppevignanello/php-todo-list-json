const { createApp } = Vue;

createApp({
  data() {
    return {
      api_get_url: "./getTask.php",
      api_post_url: "./postTasks.php",
      api_changeStatus_url: "./changeStatus.php",
      api_deleteTask_url: "./deleteTask.php",
      api_deleteAllTasks_url: "./deleteAllTasks.php",
      tasks: [],
      newTask: "",
    };
  },
  methods: {
    addTask() {
      const data = {
        newTask: this.newTask,
      };

      axios
        .post(this.api_post_url, data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((response) => {
          this.tasks = response.data;
        })
        .catch((error) => {
          console.error(error.message);
        });
      this.newTask = "";
    },
    taskDone(index) {
      //   this.tasks[index].status = !this.tasks[index].status;
      const data = {
        taskIndex: index,
      };
      axios
        .post(this.api_changeStatus_url, data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((response) => {
          this.tasks = response.data;
        })
        .catch((error) => {
          console.error(error.message);
        });
    },
    deleteTask(index) {
      const data = {
        deletedTask: index,
      };

      axios
        .post(this.api_deleteTask_url, data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((response) => {
          this.tasks = response.data;
        })
        .catch((error) => {
          console.error(error.message);
        });
    },
    deleteAllTasks() {
      // this.tasks = [];
      //delete all tasks frontend
      axios
        .get(this.api_deleteAllTasks_url)
        .then((response) => {
          this.tasks = response.data;
        })
        .catch((error) => {
          console.error(error.message);
        });
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
