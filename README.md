<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

## Challenge Tasks

[Find them here](https://github.com/paulodamian/Laravel-Vue-challenge/blob/master/Challenge.txt).


## Public endpoints 

- POST /api/register Params: [name, email, password] -- Register a user
- POST /api/login Params: [email, password] -- User login
- GET /api/movies -- List of moview
- GET /api/movies/{movieId} -- Movie details
- GET /api/people -- List of people
- GET /api/people/{personId} -- Person details

## Authenticated endpoints

first you need to obtain an authentication token from the log in and then send the following header on each request:
<p align="center">Authorization: Bearer JWT</p>
JWT is the token obtained at login.

NOTE: if you are using postman or any other REST client, please add the Accept: application/json header to any request.

- GET /api/me -- Returns the authenticated user
- POST /api/movies Params: [title, year] -- Creates new movie
- PUT /api/movies/{movieId} Params: [title, year] -- Edit existing movie
- DELETE /api/movies/{movieId} -- Delete existing movie
- POST /api/people Params: [firstName, LastName] -- Creates new person
- PUT /api/people/{personId} Params: [firstName, LastName] -- Edit existing person
- DELETE /api/people/{personId} -- Delete existing person
- POST /api/crew Params: [movieId, personId, rolId] -- Creates a new crew member for a movie
- DELETE /api/crew/{crewId} -- Delete crew memeber 

## Libraries/Frameworks
Just Laravel as requested by previous comunications.
On monday I will use Vue.js to create a minimal frontend. 