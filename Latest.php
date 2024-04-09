<?php
// Include TCPDF library
//phpinfo();
require_once('tcpdf/tcpdf.php');

// Establish database connection (replace database credentials with actual values)
$servername = "localhost";
$username = "root";
$password = "Chel@123";
$database = "ihfms";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $invoice_number = $_POST["invoice_number"];
    $amount = $_POST["amount"];
    $id = $_POST["id"];
    $Name = $_POST["patient_name"];
    $Service = $_POST["services"];
    $Payment = $_POST["payment_method"];

    // Insert data into database (replace table_name with your actual table name)
    $sql = "INSERT INTO invoice (id, invoice_number, amount, Patient_Name, Services, Payment_Mode) VALUES ('$id', '$invoice_number', '$amount', '$Name', '$Service', '$Payment')";

    if ($conn->query($sql) === TRUE) {
        // Generate PDF invoice
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('Invoice');
        $pdf->SetSubject('Invoice');
        $pdf->SetKeywords('Invoice, Healthcare, MediCare Uganda');

        // Add a page
        $pdf->AddPage();

        // Set font
        $pdf->SetFont('dejavusans', '', 12);

        // Add content to the PDF
        $html = "
            <h1>Invoice</h1>
            <p>ID: $id</p>
            <p>Invoice Number: $invoice_number</p>
            <p>Patient Name: $Name</p>
            <p>Services: $Service</p>
            <p>Amount: $amount</p>
            <p>Payment Method: $Payment</p>
        ";

        $pdf->writeHTML($html, true, false, true, false, '');

        // Output PDF as inline display
        $pdf->Output('invoice.pdf', 'I');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
