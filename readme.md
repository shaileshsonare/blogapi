## Blog API Case Study

This is a case study where we need to build a REST API for a blog web application. We
need to implement an endpoint where it will provide/update us a set of data based on
the endpoint that we call.
1. Create a database name api_db that will contain the following tables below.
a. users
columns:
user_id
firstname
lastname

b. posts
columns:
post_id
post_user_id – foreign key to users table
title
body
c. comments
columns:
comment_id
comment_post_id – foreign key to posts table
comment_user_id – foreign key to users table
message

2. Create some endpoints where it will provide CRUD (create, retrieve, update, delete)
operation for users table.
a. http://localhost/users - create a single user <br/>
b. http://localhost/users - retrieve all users
c. http://localhost/users/1 - retrieve a single user based on user id
d. http://localhost/users/1 - delete a single user based on user id
e. http://localhost/users/1 - update a single user based on user id
f. http://localhost/users/1/posts - retrieve all the posts based on the user id

3. Create an endpoint where it will provide CRUD (create, retrieve, update, delete)
operation for posts table.
a. http://localhost/posts - create a single post
b. http://localhost/posts - retrieve all posts
c. http://localhost/posts/1 - retrieve a single post based on post id

d. http://localhost/posts/1 - delete a single post based on post id
e. http://localhost/posts/1 - update a single post based on post id
f. http://localhost/posts/1/comments - retrieve all the comments based on the post
id

4. Create some endpoints where it will provide CRUD (create, retrieve, update, delete)
operation for comments table.
g. http://localhost/comments - create a single comment
h. http://localhost/comments - retrieve all comments
i. http://localhost/comments/1 - retrieve a single user based on user id
j. http://localhost/comments/1 - delete a single user based on user id
k. http://localhost/comments/1 - update a single user based on user id

Note: You can use any PHP framework you like but use MySQL for the
database.
