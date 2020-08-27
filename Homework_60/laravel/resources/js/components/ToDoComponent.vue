<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            {{ header }}
            <button
              class="btn btn-primary float-right"
              v-if="visible === 'hide'"
              @click="toggleInput('show')"
            >New Task</button>
            <button
              class="btn btn-warning float-right"
              v-if="visible === 'show'"
              @click="toggleInput('hide')"
            >Cancel</button>
          </div>
          <div class="card-body">
            <div class="row" v-if="visible === 'show'">
              <div class="col-md-8">
                <input
                  type="text"
                  class="w-100"
                  v-model="newTask"
                  id="newTask"
                  placeholder="Enter ToDo Task"
                />
                <p>{{ newTask }}</p>
              </div>
              <div class="col-md-4">
                <button class="btn btn-success" @click="saveTask">Save Task</button>
              </div>
            </div>

            <div class="row">
              <ul>
                <li v-for="task in tasks">
                  {{ task.id }}. {{ task.label }}
                  <button
                    class="btn btn-danger btn-sm"
                    @click="deleteTask(task)"
                  >Delete</button>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "todo-component",
  data() {
    return {
      header: "ToDo List",
      visible: "hide",
      newTask: "",
      tasks: [
        {
          id: 1,
          label: "Task 1",
        },
        {
          id: 2,
          label: "Task 2",
        },
        {
          id: 3,
          label: "Task 3",
        },
      ],
    };
  },
  methods: {
    toggleInput: function (state) {
      this.visible = state;
    },

    saveTask: function () {
      let input = this.newTask;
      var newId = Object.keys(this.tasks).length;
      this.tasks.push({
        id: newId + 1,
        label: input,
      });
      this.newTask = "";
    },

    deleteTask(task) {
      const taskIndex = this.tasks.indexOf(task);
      this.tasks.splice(taskIndex, 1);
    },
  },
};
</script>