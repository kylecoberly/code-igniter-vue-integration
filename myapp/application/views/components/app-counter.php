<script>
  const AppCounter = {
    props: {
      greeting: String,
    },
    data() {
      return {
        counter: 0
      }
    },
    mounted() {
      setInterval(() => {
        this.counter++
      }, 1000)
    },
    template: `
    <div class="app-counter">
      <h2>{{greeting}}</h2>
      <p>Counter: {{counter}}</p>
    </div>
    `
  }
</script>
