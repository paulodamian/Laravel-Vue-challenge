<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

## Challenge Tasks

[Find them here](https://github.com/paulodamian/Laravel-Vue-challenge/blob/master/Challenge.txt).


## Public endpoints 

- POST /register Params: [name, email, password] -- Register a user
- POST /login Params: [email, password] -- User login
- GET /movies -- List of moview
- GET /movies/{movieId} -- Movie details
- GET /people -- List of people
- GET /people/{personId} -- Person details

## Authenticated endpoints

first you need to obtain an authentication token from the log in and then send the following header on each request:
<p align="center">Authorization: Bearer JWT</p>
JWT is the token obtained at login.

NOTE: if you are using postman or any other REST client, please add the Accept: application/json header to any request.

- GET /me -- Returns the authenticated user
- POST /movies Params: [title, year] -- Creates new movie
- PUT /movies/{movieId} Params: [title, year] -- Edit existing movie
- DELETE /movies/{movieId} -- Delete existing movie
- POST /people Params: [firstName, LastName] -- Creates new person
- PUT /people/{personId} Params: [firstName, LastName] -- Edit existing person
- DELETE /people/{personId} -- Delete existing person
- POST /crew Params: [movieId, personId, rolId] -- Creates a new crew member for a movie
- DELETE /crew/{crewId} -- Delete crew memeber 

## Libraries/Frameworks
Just Laravel as requested by previous comunications.
On monday I will use Vue.js to create a minimal frontend. 