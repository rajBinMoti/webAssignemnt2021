<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <style>
        img{
            width: 80vw;
        }
    </style>
</head>

<body>
    <?php require_once './header.php' ?>

    <div class="container">


        <h1 id="bloghost-and-todo-web-assignment">BlogHost and Todo Web Assignment</h1>
        <h2 id="implementations">Implementations</h2>
        <ol>
            <li>Like and Dislike functions.<ul>
                    <li>On .../post.php page registered users can like and dislike the post.</li>
                </ul>
            </li>
            <li>Add New or Edit Posts.<ul>
                    <li>Registered user can post new articles and can edit as well.</li>
                </ul>
            </li>
            <li>Enable and disable public visibility.<ul>
                    <li>Users can control the visibility of their post.</li>
                </ul>
            </li>
            <li>Read Posts.<ul>
                    <li>Read count will be updated by +1 when unique user reads post first time only.</li>
                </ul>
            </li>
            <li>Comments.<ul>
                    <li>New comments on post.</li>
                    <li>Comments read section on post page.</li>
                </ul>
            </li>
            <li>User Profile.<ul>
                    <li>Shows totall likes.</li>
                    <li>Shows totall Comments.</li>
                    <li>Shows totall Posts Count.</li>
                </ul>
            </li>
            <li>Registration.<ul>
                    <li>User can register with unique name only.</li>
                </ul>
            </li>
            <li>Todo Session based with following features<ul>
                    <li>Categorised Tasks</li>
                    <li>Custom Prioritised Tasks</li>
                    <li>Checkbox to mark completion.</li>
                    <li>Delete Button to remove task.</li>
                </ul>
            </li>
        </ol>
        <h2 id="how-to-setup-and-run-the-code">How to setup and run the code</h2>
        <p>Clone this repo using git clone <a href="https://github.com/rajBinMoti/webAssignemnt2021">https://github.com/rajBinMoti/webAssignemnt2021</a> in htdoc. There is a file dbSetup.php in root directory, which will generate a dummy database with some record to test the blog side of application. Run it on localhost using <a href="http://localhost/blog-host/install.php">http://localhost/blog-host/install.php</a> url.</p>
        <p>Note! To safe remove the dummy database: <a href="http://localhost/blog-host/uninstall.php">http://localhost/blog-host/uninstall.php</a></p>
        <h2 id="how-to-run-the-application">How to run the application</h2>
        <p>Open browser and visit <a href="http://localhost/blog-host">http://localhost/blog-host</a> and test it on local server.
            One copy of this code is also deployed on live server at <a href="https://2k18-csm-84.000webhostapp.com/">https://2k18-csm-84.000webhostapp.com/</a></p>
        <h2 id="odds">Odds</h2>
        <ul>
            <li>Some logical fixes are still pending to do...will fix soon.</li>
        </ul>
        <h2 id="glimpse">Glimpse</h2>
        <h3 id="login-steps">Login Steps</h3>
        <p><img src="images\Inkedr2.gif" alt="Login-Home-Logout"></p>
        <h3 id="read-like-and-comment-on-post">Read, Like, and, Comment on Post</h3>
        <p><img src="images\Inkedr1.gif" alt="Read-Like-Comment"></p>
        <h3 id="add-task">Add Task</h3>
        <p><img src="images\AddTask.gif" alt="AddTask"></p>
        <h3 id="update-task">Update Task</h3>
        <p><img src="images\UpdateTask.gif" alt="UpdateTask"></p>
        <h3 id="delete-task">Delete Task</h3>
        <p><img src="images\DeleteTask.gif" alt="DeleteTask"></p>

    </div>
</body>

</html>