<template>
  <q-page class="q-pa-sm bg-white">
    <div class="row q-col-gutter-sm">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <q-stepper v-model="step" header-nav ref="stepper" color="primary" class="no-shadow" bordered animated>
          <q-step :name="1" title="Preguntas" icon="shopping_cart" :done="step > 1" :header-nav="step > 1">
            <div class="row">
              <div class="col-12">
                <div class="text-h5">
                  ¿Cómo calificaría su comodidad general durante la estancia?
                </div>
                <q-item>
                  <div class="q-gutter-md">
                    <q-radio v-model="questions.question1" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="10" label="1*" />
                    <q-radio v-model="questions.question1" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="20" label="2*" />
                    <q-radio v-model="questions.question1" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="30" label="3*" />
                    <q-radio v-model="questions.question1" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="40" label="4*" />
                    <q-radio v-model="questions.question1" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="50" label="5*" />
                    <q-radio v-model="questions.question1" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="60" label="6*" />
                    <q-radio v-model="questions.question1" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="70" label="7*" />
                    <q-radio v-model="questions.question1" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="80" label="8*" />
                    <q-radio v-model="questions.question1" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="90" label="9*" />
                    <q-radio v-model="questions.question1" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="100" label="10*" />
                  </div>
                </q-item>
              </div>
              <div class="col-12">
                <div class="text-h5">
                  ¿El alojamiento cumplió con sus necesidades postoperatorias?
                </div>
                <q-item>
                  <div class="q-gutter-md">
                    <q-radio v-model="questions.question2" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="10" label="1*" />
                    <q-radio v-model="questions.question2" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="20" label="2*" />
                    <q-radio v-model="questions.question2" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="30" label="3*" />
                    <q-radio v-model="questions.question2" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="40" label="4*" />
                    <q-radio v-model="questions.question2" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="50" label="5*" />
                    <q-radio v-model="questions.question2" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="60" label="6*" />
                    <q-radio v-model="questions.question2" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="70" label="7*" />
                    <q-radio v-model="questions.question2" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="80" label="8*" />
                    <q-radio v-model="questions.question2" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="90" label="9*" />
                    <q-radio v-model="questions.question2" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="100" label="10*" />
                  </div>
                </q-item>
              </div>
              <div class="col-12">
                <div class="text-h5">
                  ¿Qué tan limpio encontró el alojamiento?
                </div>
                <q-item>
                  <div class="q-gutter-md">
                    <q-radio v-model="questions.question3" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="10" label="1*" />
                    <q-radio v-model="questions.question3" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="20" label="2*" />
                    <q-radio v-model="questions.question3" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="30" label="3*" />
                    <q-radio v-model="questions.question3" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="40" label="4*" />
                    <q-radio v-model="questions.question3" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="50" label="5*" />
                    <q-radio v-model="questions.question3" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="60" label="6*" />
                    <q-radio v-model="questions.question3" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="70" label="7*" />
                    <q-radio v-model="questions.question3" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="80" label="8*" />
                    <q-radio v-model="questions.question3" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="90" label="9*" />
                    <q-radio v-model="questions.question3" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="100" label="10*" />
                  </div>
                </q-item>
              </div>
              <div class="col-12">
                <div class="text-h5">
                  ¿El entorno fue tranquilo y adecuado para su recuperación?
                </div>
                <q-item>
                  <q-radio v-model="questions.question4" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                    val="10" label="1*" />
                  <q-radio v-model="questions.question4" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                    val="20" label="2*" />
                  <q-radio v-model="questions.question4" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                    val="30" label="3*" />
                  <q-radio v-model="questions.question4" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                    val="40" label="4*" />
                  <q-radio v-model="questions.question4" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                    val="50" label="5*" />
                  <q-radio v-model="questions.question4" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                    val="60" label="6*" />
                  <q-radio v-model="questions.question4" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                    val="70" label="7*" />
                  <q-radio v-model="questions.question4" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                    val="80" label="8*" />
                  <q-radio v-model="questions.question4" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                    val="90" label="9*" />
                  <q-radio v-model="questions.question4" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                    val="100" label="10*" />
                </q-item>
              </div>
              <div class="col-12">
                <div class="text-h5">
                  ¿Recibió el apoyo que necesitaba del personal del alojamiento?
                </div>
                <q-item>
                  <div class="q-gutter-md">
                    <q-radio v-model="questions.question5" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="10" label="1*" />
                    <q-radio v-model="questions.question5" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="20" label="2*" />
                    <q-radio v-model="questions.question5" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="30" label="3*" />
                    <q-radio v-model="questions.question5" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="40" label="4*" />
                    <q-radio v-model="questions.question5" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="50" label="5*" />
                    <q-radio v-model="questions.question5" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="60" label="6*" />
                    <q-radio v-model="questions.question5" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="70" label="7*" />
                    <q-radio v-model="questions.question5" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="80" label="8*" />
                    <q-radio v-model="questions.question5" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="90" label="9*" />
                    <q-radio v-model="questions.question5" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="100" label="10*" />
                  </div>
                </q-item>
              </div>
              <div class="col-12">
                <div class="text-h5">
                  ¿Cómo calificaría la comunicación con nosotros (claridad, disponibilidad, respuesta a solicitudes)?
                </div>
                <q-item>
                  <div class="q-gutter-md">
                    <q-radio v-model="questions.question6" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="10" label="1*" />
                    <q-radio v-model="questions.question6" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="20" label="2*" />
                    <q-radio v-model="questions.question6" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="30" label="3*" />
                    <q-radio v-model="questions.question6" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="40" label="4*" />
                    <q-radio v-model="questions.question6" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="50" label="5*" />
                    <q-radio v-model="questions.question6" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="60" label="6*" />
                    <q-radio v-model="questions.question6" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="70" label="7*" />
                    <q-radio v-model="questions.question6" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="80" label="8*" />
                    <q-radio v-model="questions.question6" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="90" label="9*" />
                    <q-radio v-model="questions.question6" checked-icon="task_alt" unchecked-icon="panorama_fish_eye"
                      val="100" label="10*" />
                  </div>
                </q-item>
              </div>
              <div class="col-12">
                <div class="text-h5">
                  ¿Le gustaría sugerir algo que pudiéramos mejorar para futuras estancias postoperatorias?
                </div>
                <q-item class="col-12">
                  <q-input v-model="questions.opinion" filled type="textarea" input-style="width: 1000px;" />
                </q-item>
              </div>
            </div>
            <q-stepper-navigation>
              <q-btn rounded @click="() => { done1 = true; step = 2 }" class="float-right q-mr-md q-mb-md" color="blue"
                label="Next" />
            </q-stepper-navigation>
          </q-step>

          <q-step :name="2" :title="averagePercent" icon="percent" :done="step > 2" :header-nav="step > 2">
            <div class="row">
              <div class="col-6">
                <q-item>
                  <q-checkbox dense outlined class="full-width" v-model="questions.checkbox"
                    label="Estás de acuerdo con las respuestas anteriores ?" />
                </q-item>
                  <q-btn rounded @click="submit" class="float-right q-mr-md q-mb-md" color="green"
                    label="Submit" />
              </div>
            </div>
          </q-step>
        </q-stepper>
      </div>
    </div>
  </q-page>
</template>

<script>
import { defineComponent, inject  } from 'vue';
import { ref, onMounted, computed } from 'vue';
import {useQuasar} from 'quasar'
import axios from 'axios'

export default defineComponent({
  name: "Forms",
  setup() {
    const $q = useQuasar()
    const questions = ref({})
    // inyecto las variables desde el boot
    // const el = document.getElementById('q-app')
    // const user = el?.dataset.user || ''
    // const deal = el?.dataset.deal || ''
    // const name= el?.dataset.name|| ''
    //
    const averagePercent = computed(() => {
      const values = Object.values(questions.value)
        .map(Number)
        .filter(v => !isNaN(v))
      if (values.length === 0) return 0
      const sum = values.reduce((acc, val) => acc + val, 0)
      return "Rating de " + Math.floor((sum / 600) * 100) + '%'
    })
    onMounted(() => {
        axios
          .post('https://daso.dasoddscolor.com/questions.php', {
            'method': 'get',
            'deal_id' : deal
          },
          {
            headers: { 'Content-Type': 'application/json' },
          })
        .then(response => {
          let data = response.data.data.questions;
          if (typeof data === 'string') {
            try {
              data = JSON.parse(data);
            } catch (e) {
              console.error('El JSON de options es inválido:', data);
              return;
            }
          }
          Object.keys(questions.value).forEach(key => delete questions.value[key]);
          Object.assign(questions.value, data);
          $q.notify({
            message: response.data.message,
            color: response.data.color,
            position: 'top',
            icon: response.data.icon
          })
        })
    })

    return {
      step: ref(1),
      questions,
      averagePercent,
      //deal,
      submit() {
        let qtions= questions.value
        let keys = ['question1', 'question2', 'question3', 'question4', 'question5', 'question6', 'opinion', 'checkbox']
        const checkFields = keys.every(key => qtions.hasOwnProperty(key))
        if(!checkFields){
          $q.notify({
            message: 'You have to fill all the fields first before submition',
            color: 'negative',
            position: 'top',
            icon: 'warning'
          })
          return
        }
        axios
          .post('https://daso.dasoddscolor.com/questions.php', {
            'questions' : qtions,
            'method': 'send',
            'rating': averagePercent.value,
            'deal_id' : deal
          },
          {
            headers: { 'Content-Type': 'application/json' },
          })
        .then(response => (
          $q.notify({
            message: response.data.message,
            color: response.data.color,
            position: 'top',
            icon: response.data.icon
          })
        ))
      }
    }
  }
})
</script>

<style scoped></style>
