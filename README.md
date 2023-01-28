

## Login

- http://localhost/holidays/public/login

The user with the email `admin@gmail.com` can login by using this password: `12345`. He is an admin.
The user with the email `employee@gmail.com` can login by using this password: `1234`. He is an simple user.

## Users

- Index: http://localhost/holidays/public/user/index/
- Create form: http://localhost/holidays/public/user/create/
- Edit form: http://localhost/holidays/public/user/edit/{id}
- Delete user endpoint: http://localhost/holidays/public/user/destroy/{id}

The Users section is only accessible by the admin users.
A 403 is thrown for the rest users.

## Holiday 

- Index: http://localhost/holidays/public/holiday
- Create form: http://localhost/holidays/public/holiday/create/

## Logout

- http://localhost/holidays/public/login/logout

## ER diagram
- ER_diagram.png

## Improvements: 
- Validate data on each form (eg. dates).
- Check if dates provided overriding existing requests
- Half day requests
- Password encryption

