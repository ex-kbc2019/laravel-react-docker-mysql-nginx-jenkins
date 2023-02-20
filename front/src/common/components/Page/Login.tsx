import { Typography } from '@mui/material'
import { GoogleLoginButton } from '../../../components/GoogleLoginButton'

export const Login = () => {
  return (
    <>
      <Typography component="h1" variant="h1">
        Login Page だよ。
      </Typography>
      <GoogleLoginButton />
    </>
  )
}
