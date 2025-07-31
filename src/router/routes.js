const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      {path: '', component: () => import('components/forms/Forms.vue')},
      {path: 'rating', component: () => import('components/charts/GuageChart.vue')},
    ]
  },
]

export default routes
