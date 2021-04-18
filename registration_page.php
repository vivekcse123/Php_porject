<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="registration.css">
    <title>S.M.S | Registration</title>
</head>
<body>
    <div class="register">
        <div class="logo">
            <h1>Student Admission Registration From</h1>
        </div>
        <form action="" method="POST">
        <p id="f_ph">Name of Applicant :</p><br>
        <label>First Name</label><label id='l_name'>Last Name</label>
        <br>
        <input type="text" name='fname' placeholder="Your first name" required>
        <input type="text" name='lname' placeholder="Your last name" required>
        <br>
        <label id="dob">Date Of Birth :</label>
        <select id="day">
            <option>Day</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            <option>29</option>
            <option>30</option>
        </select>
        <select id="month">
            <option>Month</option>
            <option>January</option>
            <option>February</option>
            <option>March</option>
            <option>April</option>
            <option>May</option>
            <option>June</option>
            <option>July</option>
            <option>August</option>
            <option>September</option>
            <option>October</option>
            <option>November</option>
            <option>Decembers</option>
        </select>
        <select id="year">
            <option>Year</option>
            <option>2000</option>
            <option>2001</option>
            <option>2002</option>
            <option>2003</option>
            <option>2004</option>
            <option>2005</option>
            <option>2006</option>
            <option>2007</option>
            <option>2008</option>
            <option>2009</option>
            <option>2010</option>
            <option>2011</option>
            <option>2012</option>
            <option>2013</option>
            <option>2014</option>
            <option>2015</option>
            <option>2016</option>
            <option>2017</option>
            <option>2018</option>
            <option>2019</option>
            <option>2020</option>
        </select>
        <br><br>
        <labeL id="gender">Gender :</labeL>
        <input type="radio" name='gender' value='male'><label id="m">Male</label>
        <input type="radio" name='gender' value='female' id="female"><label id="f">Female</label>
        <br><br>
        <label id="class">Select Class :</label>
        <select id="chose">
            <option>Class</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
        </select>
        <br><br>
        <label id="number">Mobile No :</label>
        <input type="number" name='mobile' placeholder="Your mobile number" required>
        <p id="s_ph">Parents Details :</p>
        <br><br>
        <label id="f_fname">Father First Name</label><label id='f_lname'>Father Last Name</label>
        <br>
        <input type="text" name='fname' placeholder="Father first name" id="father_fn" required>
        <input type="text" name='lname' placeholder="Father last name" id="father_ln" required>
        <br>
        <label id="f_fname">Mother First Name</label><label id='f_lname'>Mother Last Name</label>
        <br>
        <input type="text" name='mfname' placeholder="Mother first name" id="mother_fn" required>
        <input type="text" name='mlname' placeholder="Mother last name" id="mother_ln" required>
        <br>
        <p id="address">Address :</p>
        <textarea id="add_area" placeholder="addresss...." required></textarea>
        <br><br><br><br>
        <label id="f_fname">State</label><label id='d_name'>District</label>
        <br>
        <input type="text" name='State' placeholder="Your state name" id="state_n" required>
        <input type="text" name='dist' placeholder="Your district name" id="dist_n" required>
        <br>
        <input type="checkbox"><span id="statements">I agree with the term and contions. & i read all the information very carefully and i want to do my registraton.</span>
        <br>
        <button type="submit" name='submit' title="register">Register</button>
        <button type="button" name='refresh' title="refresh" id="b_btn">Refresh</button>
        <button type="button" name='back' title="back" id="b_btn" onclick="Back()">Back</button>
        </form>
    </div>
    <script>
        function Back()
        {
            location.replace("school_home.php");
        }
    </script>
</body>
</html>