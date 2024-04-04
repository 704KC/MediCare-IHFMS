<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Information Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'topbar.php'; ?>

  <div class="container">
      <h2>Patient Information Form</h2>
      <form action="patientAction.php" method="POST">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>

          <label for="dob">Date of Birth:</label>
          <input type="date" id="dob" name="dob" required>

          <label for="address">Address:</label>
          <textarea id="address" name="address" rows="4" required></textarea>

          <h3>Add Transaction:</h3>
          <label for="transaction_type">Transaction Type:</label>
          <select id="transaction_type" name="transaction_type" required>
              <option value="invoice">Invoice</option>
              <option value="payment">Payment</option>
          </select>

          <label for="amount">Amount:</label>
          <input type="number" id="amount" name="amount" required>

          <label for="transaction_date">Date:</label>
          <input type="date" id="transaction_date" name="transaction_date" required>

          <input type="submit" value="Submit">
      </form>
  </div>
</body>
</html>
