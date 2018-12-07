Feature: login
  In order to use the application.
  As a user
  I need to be able to sucessfully logged in.

  Scenario: try login

  Given the "register" page is opened
  And I have filled the "name" field with "Kasim Films"
  And I have filled the "email" field with "kasim.films@yahoo.com"
  And I have filled the "password" field with "123456abc"
  And I have filled the "password_confirmation" field with "123456abc"
  When I click on the "Register" button
  Then I see the text "Your Blog Posts"

  Given the "dashboard" page is opened
  And I click on the navbar
  When I click on the logout
  Then I see the text "Welcome to Webapp!"

  Given the "login" page is opened
  And I have filled the "email" field with "kasim.films@yahoo.com"
  And I have filled the "password" field with "123456abc"
  When I click on the "Login" button
  Then I see the text "Your Blog Posts"

  Given the "create post" page is opened
  And I have filled the "title" field with "My first Vlogging Post"
  And I have filled the "body" field with "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
  When I click on the "Submit" button
  Then I see the text "My TU Chemnitz Post"

  Given the "dashboard" page is opened
  And I see the text "My first Vlogging Post"
  When I click on the "My first Vlogging Post" link
  Then I see the text "My first Vlogging Post"

  Given the "dashboard" page is opened
  And I see the text "My first Vlogging Post"
  And I click on the "My first Vlogging Post" link
  And I see the text "My first Vlogging Post"
  And I click on the "Edit" button
  When I have filled the "title" field with "My first Vlogging Post EDIT POST"
  And I have filled the "body" field with "My first Vlogging Post Body POST"
  And I click on the "Submit" button
  Then I see the text "My first Vlogging Post EDIT POST"

  Given the "dashboard" page is opened
  And I see the text "My first Vlogging Post EDIT POST"
  And I click on the "Delete" button

  Given the "create post" page is opened
  And I have filled the "title" field with "My 2nd Vlogging Post"
  And I have filled the "body" field with "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
  When I click on the "Submit" button
  Then I see the text "My 2nd Vlogging Post"
