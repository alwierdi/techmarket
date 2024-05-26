# User API Spec

## Register User

- Endpoint = POST /api/users

Request Body:

```json
{
  "username": "Azka",
  "password": "rahasia",
  "email": "azka@gmail.com",
  "address_name": "jl.depsos"
}
```

Response Body (success):

```json
{
  "data" : "OK"
}
```

Response Body (Failed):

```json
{
  "errors": "username must not blank, ???"
}
```

## Login User

- Endpoint = POST /api/auth/login

Request Body:

```json
{
  "username": "Azka",
  "password": "rahasia"
}
```

Response Body (success):

```json
{
  "data" : {
    "token" : "TOKEN",
    "expiredAt" : 21312413413 //miliseconds
  }
}
```

Response Body (Failed ,401):

```json
{
  "errors": "username or password wrong, ???"
}
```

## Get User

- Endpoint = Get /api/users/current

  Request Header:

- X-API_TOKEN : Token (Mandatory)

Response Body (success):

```json
{
  "data" : {
    "username": "Azka",
    "email": "azka@gmail.com",
    "address_name": "jl.depsos"
  }
}
```

Response Body (Failed ,401):

```json
{
  "errors": "unauthorized"
}
```

## Update User

- Endpoint = PATCH /api/users/current

Request Header:
- X-API_TOKEN : Token (Mandatory)

Request Body: 
```json
{
  "username": "azka", //put if only want to updatre name
  "password" : "new password" //put if only want to update password
}
```

Response Body (success):

```json
{
  "data" : {
    "username": "Azka",
    "email": "azka@gmail.com",
    "address_name": "jl.depsos"
  }
}
```

Response Body (Failed ,401):

```json
{
  "errors": "unauthorized"
}
```

## Logout User
Endpoint = DELETE /api/auth/logout

Request Header:

- X-API_TOKEN : Token (Mandatory)

Response Body (success):

```json
{
  "data" : "OK"
}
```











