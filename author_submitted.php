<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Data Input - Manuscript and Contract Management</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <header>
        <h1>Manuscript Successfully Submitted</h1>
        <p>You'll hear from us soon!</p>
    </header>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Assuming you're posting these fields from the form
        $authorName = $_POST['authorName'];
        $authorEmail = $_POST['authorEmail'];
        $manuscriptTitle = $_POST['manuscriptTitle'];
        $submissionDate = $_POST['submissionDate'];
        $manuscriptDescription = isset($_POST['manuscriptDescription']) ? $_POST['manuscriptDescription'] : '';
        $contractStatus = $_POST['contractStatus'];
        $contractStartDate = $_POST['contractStartDate'];
        $contractEndDate = isset($_POST['contractEndDate']) ? $_POST['contractEndDate'] : '';

        // You can now use these variables to store data in a database, or perform other actions.
        
        // Simple output to show what was submitted
        echo "Author Name: " . $authorName . "<br>";
        echo "Author Email: " . $authorEmail . "<br>";
        echo "Manuscript Title: " . $manuscriptTitle . "<br>";
        echo "Submission Date: " . $submissionDate . "<br>";
        echo "Manuscript ID: " . rand(1000000000, 9999999999) . "<br>";
        echo "Contract Status: " . $contractStatus . "<br>";
        echo "Contract Start Date: " . $contractStartDate . "<br>";
        echo "Contract End Date: " . $contractEndDate . "<br>";
    } else {
        echo "No data submitted.";
    }
    ?>


</div>

</body>
</html>
