<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/php/models/HateModel.php';

class WriteHate extends HateModel
{
  public function addHate()
  {

    // Collect POST data
    $hateMessage = $_POST['answer'];
    $haterName = $_POST['name'];
    $haterEmail = $_POST['email'];

    // Validate required fields
    if (!$hateMessage || !$haterName || !$haterEmail) {
      $errorMessage = "You haven't filled in all the details!";
      header("Location: /ihatehenry.php?error=" . urlencode($errorMessage));
      exit();
    }

    // Insert the hate
    $result = $this->insertHateMessage(
      $hateMessage,
      $haterName,
      $haterEmail
    );

    // Check if insert was successful
    if (is_array($result) && !$result['success']) {
      $errorMessage = "Database error: " . $result['message'];
      header("Location: /ihatehenry.php?error=" . urlencode($errorMessage));
      exit();
    }

    // Redirect back with success
    header("Location: /congratulations.php");
    exit();
  }
}
