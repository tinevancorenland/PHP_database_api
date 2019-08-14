# PHP_database_api

## The Mission
Make an API that can save notes and if you have time add a web interface for it.
You are not allowed to do any frontend work until you have finished the API.

### Must-have features
[x] Creating notes for example: HOST/addnote/TITLE
[x] Notes are accessed by TITLE for creation, showing, editing and deleting
[x] Updating notes
[x] Getting a list of all the notes
[ ] Getting the text of one note
[x] Deleting a note
[ ] Use a HTTP(S) GET to retreive data, POST request for adding, POST requests for updating, DELETE requests for deleting ....
[x] Save the notes in an SQL database
[x] You only return JSON data, so no forms/html/... this should be a pure API

### Nice to have features (DO NOT MAKE THIS BEFORE THE API IS 100% COMPLETE)
- Add an install.php script that asks the user for the DB host, user and database + runs the SQL code to create the structure
- Frontend interface 
- Implement it using both SQL and a NoSQL database
- Implement some kind of user system