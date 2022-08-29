import ApiService from './ApiService';


const ReservationService = {
  AddReservation(data) {
    return ApiService.post('api/auth/add-reservation', data)
  },
  getReservation(id) {
    return ApiService.get('/api/auth/chi-tiet-dat-lich/id=' + id)
  },

}
export default ReservationService