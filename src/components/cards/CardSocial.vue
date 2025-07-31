<template>
  <!-- modals-->
  <q-dialog v-model="dialog" persistent :maximized="maximizedToggle" transition-show="slide-up"
    transition-hide="slide-down">
    <q-card class="text-white">
      <q-bar>
        <q-space></q-space>
        <q-btn dense flat icon="close" v-close-popup>
          <q-tooltip class="bg-white text-primary">Close</q-tooltip>
        </q-btn>
      </q-bar>
      <q-card-section class="q-pt-none">
        <history v-if="linkItem == 'history'" />
        <forms v-if="linkItem == 'questionnaire'" />
      </q-card-section>
    </q-card>
  </q-dialog>
  <!-- /modals -->
  <q-card class="bg-transparent no-shadow no-border" bordered>
    <q-card-section class="q-pa-none">
      <div class="row q-col-gutter-sm ">
        <div v-for="(item, index) in items" :key="index" class="col-md-3 col-sm-3 col-xs-3">
          <q-item :style="`background-color: ${item.color1}`" class="q-pa-none" clickable
            @click="modalClicked(item.link)">
            <q-item-section v-if="icon_position === 'left'" side :style="`background-color: ${item.color2}`"
              class=" q-pa-lg q-mr-none text-white">
              <q-icon :name="item.icon" color="white" size="24px"></q-icon>
            </q-item-section>
            <q-item-section class=" q-pa-md q-ml-none  text-white">
              <q-item-label class="text-white text-h6 text-weight-bolder">{{ item.value }}</q-item-label>
              <q-item-label class="text-black">{{ item.title }}</q-item-label>
            </q-item-section>
            <q-item-section v-if="icon_position === 'right'" side class="q-mr-md text-black">
              <q-icon :name="item.icon" color="black" size="44px"></q-icon>
            </q-item-section>
          </q-item>
        </div>
      </div>
    </q-card-section>
  </q-card>
</template>
<script>

import { defineComponent, defineAsyncComponent, ref } from 'vue';

export default defineComponent({
  name: "CardSocial",
  components: {
    History: defineAsyncComponent(() => import('components/timelines/History.vue')),
    Forms: defineAsyncComponent(() => import('components/forms/Forms.vue'))
  },

  props: {
    icon_position: {
      required: false,
      default: "left"
    }
  },
  computed: {
    items: function () {
      return this.icon_position === "left"
        ? [
          {
            title: "My Account",
            icon: "person",
            value: "200",
            color1: "#5064b5",
            color2: "#3e51b5",
          },
          {
            title: "Followers",
            icon: "fab fa-twitter",
            value: "500",
            color1: "#f37169",
            color2: "#f34636"
          },
          {
            title: "Connections",
            icon: "fab fa-google",
            value: "50",
            color1: "#ea6a7f",
            color2: "#ea4b64"
          },
          {
            title: "Website Visits",
            icon: "bar_chart",
            value: "1020",
            color1: "#a270b1",
            color2: "#9f52b1"
          }
        ]
        : [
          {
            title: "Clinical History",
            icon: "fas fa-tooth",
            value: "",
            link: "history",
            color1: "#E4D33C",
            color2: "#E4D33C"
          },
          {
            title: "Questionnaire",
            icon: "fas fa-file-invoice",
            value: "",
            link: "questionnaire",
            color1: "#E4D33C",
            color2: "#E4D33C"
          },
          {
            title: "Documentation",
            icon: "fas fa-folder-open",
            value: "",
            link: "documentation",
            color1: "#E4D33C",
            color2: "#E4D33C"
          },
          {
            title: "Profile",
            icon: "person",
            value: "",
            link: "profile",
            color1: "#E4D33C",
            color2: "#E4D33C"
          },
          {
            title: "Scheduling",
            icon: "fas fa-calendar",
            link: "scheduling",
            value: "",
            color1: "#E4D33C",
            color2: "#E4D33C"
          },
          {
            title: "Care follow up",
            icon: "fas fa-notes-medical",
            link: "follow",
            value: "",
            color1: "#E4D33C",
            color2: "#E4D33C"
          },
          {
            title: "Services",
            icon: "fas fa-list",
            link: "services",
            value: "",
            color1: "#E4D33C",
            color2: "#E4D33C"
          },
          {
            title: "Contact",
            icon: "fas fa-address-book",
            link: "contact",
            value: "",
            color1: "#E4D33C",
            color2: "#E4D33C"
          },

        ];
    }
  },
  setup() {
    const linkItem = ref()
    const dialog = ref(false)
    const modalClicked = (link) => {
      linkItem.value = link
      dialog.value = true
    }
    return {
      dialog,
      linkItem: linkItem,
      maximizedToggle: ref(true),
      modalClicked: modalClicked
    }
  }

})
</script>
