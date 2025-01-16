import { createBrowserRouter } from 'react-router-dom';

export const router = createBrowserRouter([
    {
        path: '/',
        element: '<p>Hi from HomePage</p>'
    },
    {
        path: '/login',
        element: '<p>Hi from Login</p>'
    },
    {
        path: '/register',
        element: '<p>Hi from Register</p>'
    },
    {
        path: 'users',
        element: '<p>Hi from Users</p>'
    },
])
