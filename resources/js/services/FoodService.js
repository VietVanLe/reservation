import ApiService from './ApiService';

const UserService = {
  food(data) {
    return ApiService.post('/api/auth/food', data)
  }
}
export default UserService