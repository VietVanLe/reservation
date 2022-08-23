export default [
  {
    path: '/login',
    name: 'login',
    component: () => import('@/pages/auth/Login'),
    meta: {
      isLogin: false,
    },
  },
]
