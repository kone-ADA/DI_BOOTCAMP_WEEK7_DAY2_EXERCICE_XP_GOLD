<!-- Create a form with a post method to submit the values of the two input fields -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <!-- Label and input field for first number -->
  <label for="num1">Number 1:</label>
  <input type="text" id="num1" name="num1">
  
  <!-- Label and input field for second number -->
  <label for="num2">Number 2:</label>
  <input type="text" id="num2" name="num2">
  
  <!-- Submit button -->
  <input type="submit" value="Submit">
</form>

<!-- PHP code to add the two numbers -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the values of the two numbers from the form
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  
  // Add the two numbers
  $result = $num1 + $num2;
}
?>

<!-- Display the result of the addition -->
<h3>Result: <?php echo $result; ?></h3>