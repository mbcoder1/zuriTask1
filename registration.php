<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="user_data.php" method="POST">
        <div>  <label>Name</label>
            <input type="text" name="name" placeholder="enter your name" >
        </div>

        <div>  <label>Email</label>
            <input type="email" name="email" placeholder="enter your email" >
        </div>

        <div>  <label>Date of Birth</label>
            <input type="date" name="DOB" >
        </div>

        <div>  <label>Gender</label>
            <!-- <select name="gender" id="">
                    </div>
                        <option value="male" name="male" >Male</option>
                <option value="female" name="female">Female</option>
                <option value="others" name="others">Others</option>
            </select> -->
            <input type="radio" name="gender" value='male'>Male
            <input type="radio" name="gender" value='female'>Female
            
        <div>
            <label>Country</label>
             <input type="text" name="country" placeholder="enter your country" >
        </div>

        <button name='submit'>submit</button>
    </form>        

</body>
</html>

