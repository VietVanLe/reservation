<template>
  <div>
    <Header />
    <Container :timett="timett" v-on:getDay="timeApi" />
    <Footer />
  </div>
</template>

<script>
import axios from 'axios';
import Header from '@/components/header/Header'
import Container from '@/components/container/Container'
import Footer from '@/components/footer/Footer'
import moment from 'moment';
export default {
  components: {Footer, Header, Container },
  name: "Home",
  data() {
    return {
      timett: []
    }
  },
  created() {
    this.timeApi();
  },
  methods: {
    timeApi(getday) {
      const params = {
        date: moment(getday).format('YYYY-MM-DD')
      };
      console.log(params);
      axios.get('http://127.0.0.1:8000/api/auth/time',params).then(response => {
        let timeSetting = [];
        for (let i = 0; i < response.data.length; i++) {
          let data = response.data[i].time_setting;
          let arr = JSON.parse(data);
          console.log(arr);
          for (let j = 0; j < arr.length; j++) {
            timeSetting.push(
              response.data[i].date + ' ' + arr[j])
          }
        }
        this.timett = timeSetting;
        console.log(this.timett);
      });
    }
  }
}
</script>
<style scoped>
</style>
