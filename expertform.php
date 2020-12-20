<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styleNew.css">
</head>
<body>
    <img class="bg" src="../photo-2.png" alt="MIT ADT UNIVERSITY" >
    <div class="container">
        <h1>MIT ADT UNIVERSITY</h1>
        <p>Claim To Be Filled By The Examiner</p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Name Of Your College">
            <input type="text" name="mobile Number" id="mobileNumber" placeholder="Enter Your Mobile Number">
            <textarea name="address" id="address" cols="30" rows="5" placeholder="Address"></textarea>


            <select id="inputclaim" class="form-control">
            <option value="Claim Remeuneration For The Examination ">Select Claim Remeuneration For The Examination </option>
            <option value="B.tech">B.Tech</option>
            <option value="M.tech">M.Tech</option>
            </select>

            <select id="inputyear" class="form-control">
                <option value="year">Select Year </option>
                <option value="fy">First Year</option>
                <option value="sy">Second Year</option>
                <option value="ty">Third Year</option>
                    <option value="fy">Fourth Year</option>
            </select>

            <input type="text" name="branch" id="branch" placeholder="Enter Branch">
            <input type="text" name="division" id="branch" placeholder="Enter Division">
            <input type="text" name="subjectCode" id="branch" placeholder="Enter Subject Code">
            <input type="text" name="SubjectName" id="branch" placeholder="Enter Subject Name">

            <input type="text" name="totalNumberOfSessions" id="branch" placeholder="Total Number Of Sessions">
            <input type="text" name="days" id="branch" placeholder="Enter Days">

            <br>






    <table width="80%" border="0">
      <tr>
        <th>Total Number Of Candidates</th>
        <th>Enter Amount Per Student</th>
        <th>Amount To Be Paid</th>
      </tr>
      <tr>
        <td><input id="box1" type="text" oninput="calculate();" /></td>
        <td><input id="box2" type="text" oninput="calculate();" /></td>
        <td><input id="result" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <script>


        function calculate() {
            var myBox1 = document.getElementById('box1').value;
            var myBox2 = document.getElementById('box2').value;
            var result = document.getElementById('result');
            var myResult = myBox1 * myBox2;
              document.getElementById('result').value = myResult;

        }
    </script>


    <a href="../bank/expertbank.php"  style="color: white;
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
