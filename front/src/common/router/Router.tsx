import { Route, Routes } from 'react-router-dom'
import { Login } from '../components/Page/Login'

export const Router = () => {
  return (
    <Routes>
      <Route path="/login" element={<Login />} />
    </Routes>
  )
}
