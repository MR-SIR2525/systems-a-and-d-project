<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Data Input - Manuscript and Contract Management</title>
    <style>
        /* Basic Reset */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* Body Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        /* Container */
        .container {
            width: 90%;
            max-width: 800px;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Header Styling */
        header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #e8491d;
            margin-bottom: 20px;
        }

        header h1 {
            font-size: 24px;
            color: #35424a;
        }

        /* Form Styling */
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="date"], textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        /* Button Styling */
        button {
            width: 100%;
            padding: 15px;
            background-color: #e8491d;
            color: #ffffff;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background-color: #d44116;
        }

        /* Tooltip */
        .tooltip {
            color: #999;
            font-size: 14px;
            margin-top: 5px;
        }

        /* Message Styling */
        .message {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            font-weight: bold;
            border-radius: 5px;
            display: none;
        }

        .message.success {
            color: #155724;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
        }

        .message.error {
            color: #721c24;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>

<div class="container">
    <header>
        <h1>Data Input - Manuscript & Contract Management</h1>
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
</script>

</body>
</html>
