<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><body>
  <div id="app"></div>
  <script src="https://unpkg.com/vue@3"></script>
  <script>
    const App = {
      name: "App",
      data() {
        return {
          heading: "<?php echo $heading; ?>",
          greetings: [
            <?php foreach ($greetings as $greeting): ?>
              "<?php echo $greeting; ?>",
            <?php endforeach; ?>
          ],
        }
      },
      template: `
        <h1>{{heading}}</h1>
        <ul>
          <li v-for="greeting in greetings" :key="greeting">
            <app-counter :greeting="greeting" />
          </li>
        </ul>
      `
    }

    const app = Vue.createApp(App)
    app.component('app-counter', AppCounter)
    app.mount('#app')
  </script>
</body>
