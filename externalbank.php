<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styleNew.css">
</head>
<body>
    <img class="bg" src="../photo-2.png" alt="MIT ADT UNIVERSITY" >
    <div class="container">
        <h1>MIT ADT UNIVERSITY</h1>
        <p>Bank Details</p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Name Of Your Bank">
            <input type="text" name="accountHolderName" id="accountHolderName" placeholder="Enter Your Account Holder Name:(as per bank record)">

            <select id="inputaccounttype" class="form-control">
                <option value="Account Type ">Select Account Type</option>
                <option value="B.tech">Savings</option>
                <option value="M.tech">Current</option>
                </select>



            <input type="text" name="branch" id="branch" placeholder="Enter Account Number:">
            <input type="text" name="division" id="branch" placeholder="Enter Name Of Branch">
            <input type="text" name="subjectCode" id="branch" placeholder="Enter City:">
            <input type="text" name="SubjectName" id="branch" placeholder="Enter IFSC Code:">
            <input type="text" name="totalNumberOfCandidates" id="branch" placeholder="PAN Card No:">
            <input type="text" name="totalNumberOfSessions" id="branch" placeholder="Mobile No:">

            <br>

       <a href="../localallowanceNew.html" style="color: white;
       background: black;
       padding: 8px 12px;
       font-size: 20px;
       border:2px solid white;
       border-radius: 14px;
       cursor: pointer;">SUBMIT
       </a>




        </form>
    </div>

</body>
</html>
