<template>
  <q-layout view="lHh Lpr lFf">
    <q-page-container>
      <q-page class="q-pa-sm">
        <div class="row q-col-gutter-sm  q-py-sm">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <q-card class="no-shadow" bordered>
              <q-tabs v-model="tab" dense class="text-grey" active-color="primary" indicator-color="primary"
                align="justify">
                <q-tab name="home" :class="tab == 'home' ? 'text-blue' : ''" icon="home" label="Home" />
                <q-tab name="message" :class="tab == 'message' ? 'text-blue' : ''" icon="comment" label="Message">
                  <q-badge color="red" floating>{{ messages.length }}</q-badge>
                </q-tab>
                <q-tab name="notification" :class="tab == 'notification' ? 'text-blue' : ''" icon="notifications"
                  label="Notification">
                  <q-badge color="red" floating>4</q-badge>
                </q-tab>
              </q-tabs>
              <q-separator />
              <q-tab-panels v-model="tab" animated>
                <q-tab-panel name="home" class="q-pa-sm">
                  <div class="col-lg-8 q-pl-xs col-md-8 col-sm-12 col-xs-12">
                    <q-card class="no-shadow" bordered :style="{ 'height': size['height'] - 24 + 'px !important' }">
                      <q-toolbar class="text-black ">
                        <q-btn round flat class="q-pa-sm">
                          <q-avatar size="80px">
                            <img src="https://avatars2.githubusercontent.com/u/34883558?s=400&v=4">
                          </q-avatar>
                        </q-btn>

                        <q-item class="q-subtitle-1 q-pl-md">
                          <q-item-section>
                            <q-item-label lines="1">Pedro Perez Delgado</q-item-label>
                            <q-item-label caption lines="2">
                              <span class="text-weight-bold">Dentist</span>
                            </q-item-label>
                          </q-item-section>
                        </q-item>
                        <q-space />
                        <q-btn round flat icon="star_outline" color="yellow">
                        </q-btn>
                        <q-btn round flat icon="edit" />
                      </q-toolbar>
                    </q-card>
                    <card-social icon_position="right" />
                    <q-separator />
                    <q-separator />
                    <q-separator />
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                      <q-card class="no-shadow" bordered>
                        <q-img src="https://www.opendental.com/manual243/images/TPprint.png" />
                        <q-separator></q-separator>
                        <q-card-section class="text-h6 text-grey-8 q-pa-md">
                        </q-card-section>
                        <q-separator></q-separator> </q-card>
                      <basic-card class="q-mt-lg"></basic-card>
                      <card-cafe class="q-mt-lg"></card-cafe>
                    </div>
                  </div>
                </q-tab-panel>
                <q-tab-panel name="message" class="q-pa-sm">
                  <q-item v-for="msg in messages" :key="msg.id" clickable v-ripple>
                    <q-item-section avatar>
                      <q-avatar>
                        <img :src="msg.avatar" />
                      </q-avatar>
                    </q-item-section>

                    <q-item-section>
                      <q-item-label>{{ msg.name }}</q-item-label>
                      <q-item-label caption lines="1">{{ msg.msg }}</q-item-label>
                    </q-item-section>

                    <q-item-section side>
                      {{ msg.time }}
                    </q-item-section>
                  </q-item>
                </q-tab-panel>

                <q-tab-panel name="notification" class="q-pa-sm">
                  <q-list>
                    <q-item clickable v-ripple>
                      <q-item-section avatar>
                        <q-avatar color="teal" text-color="white" icon="info" />
                      </q-item-section>

                      <q-item-section>Avatar-type icon</q-item-section>
                    </q-item>
                    <q-item clickable v-ripple>
                      <q-item-section avatar>
                        <q-avatar color="teal" text-color="white" icon="report" />
                      </q-item-section>

                      <q-item-section>Avatar-type icon</q-item-section>
                    </q-item>
                    <q-item clickable v-ripple>
                      <q-item-section avatar>
                        <q-avatar color="teal" text-color="white" icon="remove" />
                      </q-item-section>

                      <q-item-section>Avatar-type icon</q-item-section>
                    </q-item>

                    <q-item clickable v-ripple>
                      <q-item-section avatar>
                        <q-avatar color="teal" text-color="white" icon="remove_circle_outline" />
                      </q-item-section>

                      <q-item-section>Avatar-type icon</q-item-section>
                    </q-item>
                  </q-list>
                </q-tab-panel>
              </q-tab-panels>
            </q-card>
          </div>
        </div>
      </q-page>
    </q-page-container>
  </q-layout>
</template>

<script>
import { defineComponent, defineAsyncComponent, ref } from 'vue';
import * as echarts from 'echarts';
import ECharts from "vue-echarts";

const messages = [
  {
    id: 5,
    name: "Pratik Patel",
    msg: " -- I'll be in your neighborhood doing errands this\n" + "            weekend. Do you want to grab brunch?",
    avatar: "https://avatars2.githubusercontent.com/u/34883558?s=400&v=4",
    time: "10:42 PM"
  },
  {
    id: 6,
    name: "Winfield Stapforth",
    msg: " -- I'll be in your neighborhood doing errands this\n" + "            weekend. Do you want to grab brunch?",
    avatar: "https://cdn.quasar.dev/img/avatar6.jpg",
    time: "11:17 AM"
  },
  {
    id: 1,
    name: "Boy",
    msg: " -- I'll be in your neighborhood doing errands this\n" + "            weekend. Do you want to grab brunch?",
    avatar: "https://cdn.quasar.dev/img/boy-avatar.png",
    time: "5:17 AM"
  },
  {
    id: 2,
    name: "Jeff Galbraith",
    msg: " -- I'll be in your neighborhood doing errands this\n" + "            weekend. Do you want to grab brunch?",
    avatar: "https://cdn.quasar.dev/team/jeff_galbraith.jpg",
    time: "5:17 AM"
  },
  {
    id: 3,
    name: "Razvan Stoenescu",
    msg: " -- I'll be in your neighborhood doing errands this\n" + "            weekend. Do you want to grab brunch?",
    avatar: "https://cdn.quasar.dev/team/razvan_stoenescu.jpeg",
    time: "5:17 AM"
  }
];
const contacts = [
  {
    name: "Pratik Patel",
    position: "Developer",
    avatar: "https://avatars2.githubusercontent.com/u/34883558?s=400&v=4"
  },
  {
    name: "Razvan Stoenescu",
    position: "Developer",
    avatar: "https://cdn.quasar.dev/team/razvan_stoenescu.jpeg"
  },
  {
    name: "Jeff Galbraith",
    position: "Developer",
    avatar: "https://cdn.quasar.dev/team/jeff_galbraith.jpg"
  },
  {
    name: "Brunhilde Panswick",
    position: "Administrator",
    avatar: "https://cdn.quasar.dev/img/avatar2.jpg"
  },
  {
    name: "Winfield Stapforth",
    position: "Administrator",
    avatar: "https://cdn.quasar.dev/img/avatar6.jpg"
  }
];
const sales_data = [
  {
    name: "Pratik Patel",
    Progress: 70,
    status: "Canceled",
    stock: "14 / 30",
    date: "23 Oct 2018",
    avatar: "https://avatars3.githubusercontent.com/u/34883558?s=400&u=09455019882ac53dc69b23df570629fd84d37dd1&v=4",
    product_name: "Woman Bag",
    total: "$300,00",
    code: "QWE123",
    prod_img: new URL("../assets/bag.jpg", import.meta.url).href
  },
  {
    name: "Mayank Patel",
    Progress: 60,
    status: "Sent",
    date: "11 Nov 2018",
    stock: "25 / 70",
    avatar: "https://avatars2.githubusercontent.com/u/27857088?s=400&u=a898efbc753d93cf4c2070a7cf3b05544b50deea&v=4",
    product_name: "Laptop",
    total: "$230,00",
    code: "ABC890",
    prod_img: new URL("../assets/laptop.jpg", import.meta.url).href
  },
  {
    name: "Mayur Patel",
    Progress: 30,
    status: "Pending",
    stock: "35 / 50",
    avatar: "https://avatars0.githubusercontent.com/u/55240045?s=400&u=cf9bffc2bd2d8e42ca6e5abf40ddd6c1a03ce2860&v=4",
    product_name: "Pinapple Jam",
    total: "$34,00",
    date: "19 Sept 2020",
    code: "GHI556",
    prod_img: new URL("../assets/jam.jpg", import.meta.url).href
  },
  {
    name: "Jeff Galbraith",
    Progress: 100,
    status: "Paid",
    stock: "18 / 33",
    avatar: "https://avatars1.githubusercontent.com/u/10262924?s=400&u=9f601b344d597ed76581e3a6a10f3c149cb5f6dc&v=4",
    product_name: "Action Figure",
    total: "$208,00",
    date: "19 Sept 2020",
    code: "JKL345",
    prod_img: new URL("../assets/action.jpg", import.meta.url).href
  }
];
const sales_column = [
  {
    name: "Products",
    label: "Products",
    field: "Products",
    sortable: true,
    align: "left"
  },
  { name: "Name", label: "Buyer", field: "name", sortable: true, align: "left" },
  {
    name: "Total",
    label: "Total",
    field: "total",
    sortable: true,
    align: "right",
    classes: "text-bold"
  },
  {
    name: "Status",
    label: "Status",
    field: "status",
    sortable: true,
    align: "left",
    classes: "text-bold"
  },
  { name: "Stock", label: "Stock", field: "task", sortable: true, align: "left" }
];

export default defineComponent({
  name: "Dashboard2",
  components: {
    CardSocial: defineAsyncComponent(() => import("components/cards/CardSocial.vue")),
    Checkout: defineAsyncComponent(() => import("components/cards/CardSocial.vue")),
    ECharts
  },
  setup() {
    const size = ref({ width: '200px', height: '200px' });
    return {
      size,
      slide: ref(1),
      tab: ref("home"),
      messages,
      contacts,
      sales_data,
      sales_column,
      sales_options: {
        tooltip: {
          trigger: "axis",
          axisPointer: {
            // Coordinate axis indicator, coordinate axis trigger is valid
            type: "shadow" // The default is a straight line, optional:'line' |'shadow'
          }
        },
        grid: {
          left: "2%",
          right: "2%",
          top: "4%",
          bottom: "3%",
          containLabel: true
        },
        xAxis: [
          {
            type: "category",
            data: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
          }
        ],
        yAxis: [
          {
            type: "value",
            splitLine: {
              show: false
            }
          }
        ],
        series: [
          {
            name: "Fashions",
            type: "bar",
            data: [40, 45, 27, 50, 32, 50, 70, 30, 30, 40, 67, 29],
            color: "#546bfa"
          },
          {
            name: "Electronics",
            type: "bar",
            data: [124, 100, 20, 120, 117, 70, 110, 90, 50, 90, 20, 50],
            color: "#3a9688"
          },
          {
            name: "Toys",
            type: "bar",
            data: [17, 2, 0, 29, 20, 10, 23, 0, 8, 20, 11, 30],
            color: "#02a9f4"
          },
          {
            name: "Vouchers",
            type: "bar",
            data: [20, 100, 80, 14, 90, 86, 100, 70, 120, 50, 30, 60],
            color: "#f88c2b"
          }
        ]
      },
      pie_options: {
        tooltip: {
          trigger: "item",
          formatter: "{a} <br/>{b}: {c} ({d}%)"
        },
        legend: {
          bottom: 10,
          left: "center",
          data: ["Fashions", "Electronics", "Toys", "Vouchers"]
        },
        series: [
          {
            name: "Sales",
            type: "pie",
            radius: ["50%", "70%"],
            avoidLabelOverlap: false,
            label: {
              show: false,
              position: "center"
            },
            emphasis: {
              label: {
                show: false,
                fontSize: "30",
                fontWeight: "bold"
              }
            },
            labelLine: {
              show: false
            },
            data: [
              {
                value: 335,
                name: "Fashions",
                itemStyle: {
                  color: "#546bfa"
                }
              },
              {
                value: 310,
                name: "Electronics",
                itemStyle: {
                  color: "#3a9688"
                }
              },
              {
                value: 234,
                name: "Toys",
                itemStyle: {
                  color: "#02a9f4"
                }
              },
              {
                value: 135,
                name: "Vouchers",
                itemStyle: {
                  color: "#f88c2b"
                }
              }
            ]
          }
        ]
      },
      sales_chart: null,
      pie_chart: null,

      getColor(val) {
        if (val > 70 && val <= 100) {
          return "green";
        } else if (val > 50 && val <= 70) {
          return "blue";
        }
        return "red";
      },
      getChipColor(status) {
        if (status == "Canceled") {
          return "negative";
        } else if (status == "Sent") {
          return "positive";
        } else if (status == "Pending") {
          return "warning";
        } else if (status == "Paid") {
          return "info";
        } else {
          return "dark";
        }
      }
    }
  },
})
</script>

<style scoped></style>
