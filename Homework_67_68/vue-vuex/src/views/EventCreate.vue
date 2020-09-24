<template>
  <div>
    <h2>Create new event:</h2>
    <div>
      <label for="title">Title:</label>
      <input type="text" name="title" v-model="title" />
      <label for="description">Description:</label>
      <textarea
        name="description"
        cols="30"
        rows="10"
        v-model="description"
      ></textarea>
      <label for="location">Location:</label>
      <input type="text" name="location" v-model="location" />
      <label for="date">Date:</label>
      <datepicker :format="customFormatter" v-model="date"></datepicker>
      <label for="time">Time:</label>
      <vue-timepicker
        close-on-complete
        v-model="time"
        manual-input
      ></vue-timepicker>
      <br />
      <br />
      <button type="submit" @click="createEvent">Create event</button>
    </div>
  </div>
</template>
<script>
import { mapState, mapGetters } from 'vuex'
import Datepicker from 'vuejs-datepicker'
import VueTimepicker from 'vue2-timepicker'
import moment from 'moment'
export default {
  data() {
    return {
      title: '',
      description: '',
      location: '',
      date: '',
      time: '',
      event: []
    }
  },
  components: {
    Datepicker,
    VueTimepicker
  },
  computed: {
    ...mapGetters(['categoryLength', 'eventsLength', 'getEventById']),
    ...mapState(['user', 'categories'])
  },
  methods: {
    createEvent() {
      this.event.push({
        title: this.title,
        description: this.description,
        location: this.location,
        date: this.date,
        time: this.time
      })
    },
    customFormatter(date) {
      return moment(date).format('MMM d YYYY')
    }
  }
  // computed: mapState({
  //   userName: state => state.user.name,
  //   userId: state => state.user.id
  // })
  // computed: {
  //   userName() {
  //     return this.$store.state.user.name
  //   },
  //   userId() {
  //     return this.$store.state.user.id
  //   }
  // }
}
</script>
