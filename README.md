# Blackmail <br>

Blackmail is a website where users can Blackmail their friends for fun and profit.

## Table of Contents <br>

* [Introduction](#Introduction)
* [Features](#Features)
* [How to Install](#Install)
* [Backend Database Information](#DB)
* [Usage](#Useage)
* [Team Members](#Team)
* [Acknowledgements](#Ack)
<br><br>

## Introduction <a name="Introduction"></a> <br>

Blackmail is a website created for the Fall 2020 Front End Wed Development class at CSUF. This project was the first project of the semester. The assignment was to use client-side JavaScript, forms, PHP, and MySQL to build an application from a suggested list. Our team chose to create a Blackmail website. 
<br>
The project was suggested to include a user interface page layout using HTML, CSS and frameworks like Bootstrap, Javascript, and JS frameworks such as jQuery and Bootstrap, PHP to hit post/retreieve data to the database and MYSQL database to store the data. The project scope was to think of the project as a product that would convince our website users that they should tell others about our site and not as a complete project requiring years of work.   
<br>

## Features <a name="Features"></a> <br>
The pages on the Blackmail site were designed to be simple and easy to use. The index page tells users what the website is about and allows them to login or go to the contact page. The login page features a modal pop up window for the signup and forgot password buttons. Upon login, Users can view all of the current blackmail pictures, submit a blackmail, or remove a blackmail. Submitting a blackmail submits the blackmail to the database. Removing a blackmail picture takes the User to a form where they can enter their information to remove the blackmail. On submittal, a modal popup asks for credit card information. There is also a contact form for anyone logged in or not to contact the website admins. The website scales for different window sizes and for mobile devices. 
<br>

A demonstration and explaination of the project by the team members can be found by clicking :
<a href = "https://youtu.be/S5OWSymNpg4">
<img src ="https://img.youtube.com/vi/S5OWSymNpg4/maxresdefault.jpg" style = "width:50px;height:100px;" >
</a>


## How to install <a name="Install"></a> <br>

To Install the backend database for the project: 

First install XAMP: https://www.apachefriends.org/index.html

Place files in “htdocs” folder located in XAMP install directory

Run XAMP Control Panel, start Apache and MySQL server 

Navigate to http://localhost/index.html

## Backend Database Information <a name="DB"></a> <br>

After installing and running XAMP, navigate to http://localhost/phpmyadmin/

You may also use MySQL Workbench

## Usage <a name="Useage"></a> <br>
* index.html - Welcomes users to the site and announces it's purpose. Provides Login buttons
* login.html - Allows users to log into the website, sign up for the website, and reset their password if forgotton
* submit.html - Allows users to submit a blackmail using a form
* remove.html - Allows users to remove a blackmail using a form, and on submittal, pay for blackmail removal
* userportal.php - Allows all logged in users to view blackmail
* contact.html - allows anyone to contact the website admins.

## Team Members <a name="Team"></a> <br>
Team Javascript Sucks
* Jennifer Felton
* Anthony Galustyan (Team Leader) 
* Emilio Lopez
* Gregory Pierot

## Acknowledgements <a name="Ack"></a> <br>

