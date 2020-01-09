<?php

if (empty($_POST["submit"]))
{
  echo "form is not submitted";
  exit;
  // code...
}

if (empty($_POST["Name"]) ||
  empty($_POST["Email"]) ||
    empty($_POST["CompanyName"]) ||
      empty($_POST["Project"]))
{
  echo "please fill this form";
  exit;
  // code...
}

$Name = $_POST["Name"]

$Email = $_POST["Email"]

$CompanyName = $_POST["CompanyName"]

$Project = $_POST["Project"]

mail("maxime2matharel@gmail.com" , "New form submission", "My form submission: Name $Name, Email $Email");

?>
