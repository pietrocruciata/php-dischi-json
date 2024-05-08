

  const { createApp } = Vue

  createApp({
    data() {
      return {
      disks:[],
      }
    },
    mounted() {
      axios.get('http://localhost/php-dischi-json/script.php')
        .then(response => {
          console.log(response);
          this.disks = response.data
        })
    }
  }).mount('#app')

    