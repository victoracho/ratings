<template>
  <div>
    <q-card class="no-shadow" bordered>
      <q-card-section class="text-h6">
       Ratings
        <q-btn icon="fa fa-download" class="float-right" @click="SaveImage" flat dense>
          <q-tooltip>Download PNG</q-tooltip>
        </q-btn>
      </q-card-section>
      <q-card-section>
        <ECharts :option="options"
                 class="q-mt-md"
                 :resizable="true"
                 autoresize style="height: 285px;"
                 ref="guagechart"
        />
      </q-card-section>
    </q-card>
  </div>
</template>

<script>
import * as echarts from 'echarts'
import ECharts from 'vue-echarts';
import {defineComponent, ref, onMounted, computed } from "vue";
import {useQuasar} from 'quasar'
import axios from 'axios'


export default defineComponent({
  name: "GuageChart",
  data() {
    const $q = useQuasar()
    const rating = ref('0')
    onMounted(() => {
      axios
        .post('https://daso.dasoddscolor.com/questions.php', {
          'method': 'rating'
        },
        {
          headers: { 'Content-Type': 'application/json' },
        })
      .then(response => {
        rating.value = response.data.data
        $q.notify({
          message: response.data.message,
          color: response.data.color,
          position: 'top',
          icon: response.data.icon
        })
      })
    })
    return {
      rating,
      options: {
        tooltip: {
          formatter: '{a} <br/>{b} : {c}%'
        },
        series: [{
          name: 'Pressure',
          type: 'gauge',
          progress: {
            show: true
          },
          detail: {
            valueAnimation: true,
            formatter: '{value}'
          },
          data: [{
            value: rating,
            name: 'RATING'
          }]
        }]
      }
    }
  },
  components:{
    ECharts
  },
  methods: {
    SaveImage() {
      const linkSource = this.$refs.guagechart.getDataURL();
      const downloadLink = document.createElement('a');
      document.body.appendChild(downloadLink);
      downloadLink.href = linkSource;
      downloadLink.target = '_self';
      downloadLink.download = 'GuageChart.png';
      downloadLink.click();
    }
  }
})
</script>

<style scoped>
</style>
