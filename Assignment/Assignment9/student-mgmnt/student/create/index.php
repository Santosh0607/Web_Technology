<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .form-group{
        margin-top: 10px;
    }
</style>
<body>
<form action="../save/" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name" >Name</label>
            <input type="text" id="name" placeholder="Santosh Regmi" name="name">

        </div>
        <div class="form-group">
            <label for="Email" >Email</label>
            <input type="Email" id="Email" placeholder="SantoshRegmi1001@gmail.com" name="email">
            
        </div>
        <div class="form-group">
            <label for="Password" >Password</label>
            <input type="Password" id="Password" placeholder="***************" name="password">
            
        </div>
        <div class="form-group">
            <label for="dob" >D.O.B</label>
            <input type="date" id="dob"  name="dob" >
            
        </div>
        <div class="form-group">
            <label for="Color" >Color</label>
            <input type="Color" id="Color" name="color" >
            
        </div>
        <div class="form-group">
            <label for="Weight" >Weight(kg)</label>
            <input type="number" id="Weight" name="weight">
            
        </div>
        <div class="form-group">
            <label >Gender</label>
            <div>
                <label for="male" >Male</label>
                <input type="radio" id="male" value="Male" name="gender">
                <label for="Female" >Female</label>
                <input type="radio" id="female" value="Female" name="gender">
                <label for="Other" >Other</label>
                <input type="radio" id="Other" value="other" name="gender">
            </div>
            
        </div>
        <div class="form-group">
            <label >Hobbies</label>
            <input type="checkbox" id="travelling" value="travelling" name="hobbies[]"/>
            <label for="travelling">travelling</label>
            <input type="checkbox" id="dancing" value="dancing" name="hobbies[]"/>
            <label for="dancing" >dancing</label>
            <input type="checkbox" id="singing" value="singing" name="hobbies[]">
            <label for="singing" >singing</label>



        </div>
        <div class="form-group">
            <label for="nationality" >Nationality</label>
            <select name="nationality">
                <option value="NP" >Nepal</option>
                <option value="ID" >india</option>
                <option value="Pk" >pakistan</option>
                <option value="CH" >china</option>
                <option value="SA" >South Africa</option>
            </select>
        </div>
        <div class="form group">
            <label for="profile">Profile</label>
            <input type="file" id="profile"/>

        </div>
        <div class="form-group">
            <input type="submit" value="Create"/>
            <input type="reset" value="Cancel">
        </div>
    </form>

    

</body>
</html>