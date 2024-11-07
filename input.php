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
        <h1>Personal Info and Manuscript</h1>
        <p>Fill out the fields below to add author, manuscript, and contract information.</p>
    </header>

    <form id="dataInputForm" action="author_submitted.php" method="POST">

        <!-- Author Information Section -->
        <div class="input-group">
            <label for="authorName">Author Name</label>
            <input type="text" id="authorName" name="authorName" required placeholder="Enter Author's Full Name">
            <div class="tooltip">Required. Full name of the author submitting the manuscript.</div>
        </div>

        <div class="input-group">
            <label for="authorEmail">Author Email</label>
            <input type="text" id="authorEmail" name="authorEmail" required placeholder="Enter Author's Email">
            <div class="tooltip">Required. Must be a valid email address.</div>
        </div>

        <!-- Manuscript Information Section -->
        <div class="input-group">
            <label for="manuscriptTitle">Manuscript Title</label>
            <input type="text" id="manuscriptTitle" name="manuscriptTitle" required placeholder="Enter Manuscript Title">
            <div class="tooltip">Required. Title of the manuscript being submitted.</div>
        </div>

        <div class="input-group">
            <label for="submissionDate">Submission Date</label>
            <input type="date" id="submissionDate" name="submissionDate" required>
            <div class="tooltip">Required. Date when the manuscript was submitted.</div>
        </div>

        <div class="input-group">
            <label for="manuscriptDescription">Manuscript Description</label>
            <textarea id="manuscriptDescription" name="manuscriptDescription" rows="4" placeholder="Provide a short description of the manuscript"></textarea>
            <div class="tooltip">Optional. Brief description of the manuscript.</div>
        </div>

        <!-- Contract Information Section -->
        <div class="input-group">
            <label for="contractStatus">Contract Status</label>
            <select id="contractStatus" name="contractStatus" required>
                <option value="">Select Status</option>
                <option value="pending">Pending</option>
                <option value="signed">Signed</option>
                <option value="completed">Completed</option>
                <option value="canceled">Canceled</option>
            </select>
            <div class="tooltip">Required. Current status of the manuscript's contract.</div>
        </div>

        <div class="input-group">
            <label for="contractStartDate">Contract Start Date</label>
            <input type="date" id="contractStartDate" name="contractStartDate" required>
            <div class="tooltip">Required. Start date of the contract.</div>
        </div>

        <div class="input-group">
            <label for="contractEndDate">Contract End Date</label>
            <input type="date" id="contractEndDate" name="contractEndDate">
            <div class="tooltip">Optional. End date of the contract if available.</div>
        </div>

        <button type="submit">Submit Data</button>
    </form>

    <!-- Success/Error Message -->
    <div id="message" class="message"></div>
</div>
<!-- 
<script>
    document.getElementById("dataInputForm").addEventListener("submit", function(event) {
        event.preventDefault();
        let form = event.target;
        let allFieldsValid = form.checkValidity();

        // Get message element
        let message = document.getElementById("message");

        if (allFieldsValid) {
            message.textContent = "Successfully Submitted!";
            message.className = "message success";
        } else {
            message.textContent = "Error: Please fill out all required fields correctly.";
            message.className = "message error";
        }
        
        message.style.display = "block";
    });
</script> -->

</body>
</html>
