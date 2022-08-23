import ApiService from './ApiService';

const UserService = {
  login(data) {
    return ApiService.post('/api/auth/login', data)
  },

  logout() {
    return ApiService.post('/api/auth/logout')
  },
}
export default UserService
