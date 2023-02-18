import { BrowserRouter } from 'react-router-dom'
import { Router } from '../common/router/Router'

export const App = () => {
  return (
    <BrowserRouter>
      <Router />
    </BrowserRouter>
  )
}
