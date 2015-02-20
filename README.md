# JOB SEARCH PORTAL
## Search Job with following facilities
 - Job Categories
 - Job Types
 - User Reigstration
 - User Previllege

## It uses following technologies
 - Cake PHP
 - Kickstart

## It has following classes

### Models
 - AppModel : Default model of CakePHP
 - Job : Validating jobs and other functions
 - User : Validating and other functions of users 

### Controller
 - AppController : Default application wide controller
 - JobsController : With functions index, browse, details, add, edit and delete job
 - UserController : with functions to register, login and logout

### Views
 - Each controller function with view of same name inside the view folder except logout
 - Layout file with kickstart framework