<template>
  <div class="event-card -shadow">
    <span class="eyebrow">@{{ event.time }} on {{ event.date }}</span>
    <h4 class="title">{{ event.title }}</h4>
    <p>Description: {{ event.description }}</p>
    <p>Category: {{ event.category }}</p>
    <p>Location: {{ event.location }}</p>
    <p>Organizer: {{ event.organizer }}</p>
    <BaseIcon name="users">{{ event.attendees.length }} attending</BaseIcon>
  </div>
</template>
<script>
import api from '@/api/AppApi'

export default {
  props: ['id'],
  data() {
    return {
      event: {}
    }
  },
  created() {
    api
      .getEvent(this.id)
      .then(request => {
        this.event = request.data
      })
      .catch(error => {
        console.log('Some error occurred' + error)
      })
  }
}
</script>

<style scoped>
.location {
  margin-bottom: 0;
}
.location > .icon {
  margin-left: 10px;
}
.event-header > .title {
  margin: 0;
}
.list-group {
  margin: 0;
  padding: 0;
  list-style: none;
}
.list-group > .list-item {
  padding: 1em 0;
  border-bottom: solid 1px #e5e5e5;
}
</style>
