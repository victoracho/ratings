import { ref, reactive, computed, inject } from 'vue'
import { createPinia, defineStore } from 'pinia'
import axios from 'axios'

export const pinia = createPinia()
export const useDentalStore= defineStore('dental', () => {
  const timeline_list= ref([])
  const getHistories = () => {
    timeline_list.value = [
        {
          title: 'Evaluation reserved',
          side: 'left',
          desc: 'The doctor has reserved a follow up appointment for the 25-06-2025',
          color: "blue",
          icon: "watch"
        },
        {
          title: 'Treatment provided',
          side: 'right',
          desc: 'Treatment plan and estimate sent to patient🦷',
          color: "orange",
          icon: "done_all"
        },
        {
          title: 'X-ray uploaded',
          side: 'right',
          desc: 'Panoramic X-ray uploaded',
          color: "orange",
          icon: "done_all"
        },
        {
          title: 'Initial consultation completed',
          side: 'right',
          desc: 'The initial consultation has taken place',
          color: "red",
          icon: "done_all"
        },
      {
          title: 'The doctor Jeff Lynn has placed an initial reservation for the 03-06-2025',
          side: 'right',
          desc: 'The Doctor has placed and appointment to make the first evaluation',
          color: "blue",
          icon: "thumb_up"
        }
    ]
  }

  return {
  timeline_list,
  getHistories
  }
})
