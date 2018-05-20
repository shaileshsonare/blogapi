## Blog API Case Study

This is a case study where we need to build a REST API for a blog web application. We
need to implement an endpoint where it will provide/update us a set of data based on
the endpoint that we call.<br/>
1. Create a database name api_db that will contain the following tables below.<br/>
a. users<br/>
columns:<br/>
**user_id**<br/>
# firstname<br/>
# lastname<br/>

b. posts<br/>
columns:<br/>
# post_id<br/>
# post_user_id – foreign key to users table<br/>
# title<br/>
# body<br/>

c. comments<br/>
columns:<br/>
# comment_id<br/>
# comment_post_id – foreign key to posts table<br/>
# comment_user_id – foreign key to users table<br/>
# message<br/>

2. Create some endpoints where it will provide CRUD (create, retrieve, update, delete)
operation for users table. <br/>
a. http://localhost/users - create a single user <br/>
b. http://localhost/users - retrieve all users <br/>
c. http://localhost/users/1 - retrieve a single user based on user id <br/>
d. http://localhost/users/1 - delete a single user based on user id <br/>
e. http://localhost/users/1 - update a single user based on user id <br/>
f. http://localhost/users/1/posts - retrieve all the posts based on the user id<br/>
<br/>
3. Create an endpoint where it will provide CRUD (create, retrieve, update, delete)<br/>
operation for posts table.<br/>
a. http://localhost/posts - create a single post<br/>
b. http://localhost/posts - retrieve all posts<br/>
c. http://localhost/posts/1 - retrieve a single post based on post id<br/>

d. http://localhost/posts/1 - delete a single post based on post id<br/>
e. http://localhost/posts/1 - update a single post based on post id<br/>
f. http://localhost/posts/1/comments - retrieve all the comments based on the post 
id
<br/>
4. Create some endpoints where it will provide CRUD (create, retrieve, update, delete)
operation for comments table.<br/>
g. http://localhost/comments - create a single comment<br/>
h. http://localhost/comments - retrieve all comments<br/>
i. http://localhost/comments/1 - retrieve a single comment based on comment id<br/>
j. http://localhost/comments/1 - delete a single comment based on comment id<br/>
k. http://localhost/comments/1 - update a single comment based on comment id<br/>

Note: You can use any PHP framework you like but use MySQL for the
database.
