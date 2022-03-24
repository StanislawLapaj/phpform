<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Dane Użytkownika</h4>
    <form action="../scripts/form_data.php" method="post">
        <table>
            <tr><td>*Company:</td><td><input type="text" name="company"></td></tr>
            <tr><td>*First Name:</td><td><input type="text" name="fname"></td></tr>
            <tr><td>*Last Name:</td><td><input type="text" name="lname"></td></tr>
            <tr><td>*E-mail Address:</td><td><input type="text" name="mail"></td></tr>
            <tr><td>*Title:</td><td><input type="text" name="title"></td></tr>
            <tr><td>*Phone:</td><td><input type="text" name="phone"></td></tr>
            <tr><td>Cancel Registration</td><td><input type="checkbox" name="cancel"></td></tr>
            <tr><td>*252 Training Session</td></tr>
            <tr><td><select name="session">
                <option value="1">30.03.2022</option>
                <option value="2">15.04.2022</option>
            </select></td></tr>
            <tr><td>*Job Function:</td></tr>
            <tr><td rowspan="5"></td><td><input type="radio" name="function" value="Campain Management">Campain Management</td></tr>
            <tr><td><input type="radio" name="function" value="CRM Administrator">CRM Administrator</td></tr>
            <tr><td><input type="radio" name="function" value="Email Deployment">Email Deployment</td></tr>
            <tr><td><input type="radio" name="function" value="Partner">Partner</td></tr>
            <tr><td><input type="radio" name="function" value="Employee">Employee</td></tr>
            <tr><td>Dietary Requirements(write none if none):</td><td><input type="text" name="diet"></td></tr>
            <tr><td>*Expectations:</td><td><textarea name="exp" rows="5" cols="39"></textarea></td></tr>
            <tr><td><input type="reset" value="Reset"></td>
            <td><input type="submit" value="Submit"></td></tr>
        </table>
    </form>
</body>
</html>