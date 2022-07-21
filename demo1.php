<html>
<head>
    <title>form</title>
</head>
<body>
<form action="" method="post">
    <input type="text" placeholder="name" name="name" maxlength="15" minlength="15" required/>  <br> <br>
    <input type="text" placeholder="email" name="email" maxlength="15" minlength="15" id="email"  required/> <br> <br>
  <select> <option>+91</option><option>+1</option><option>+41</option></select> <input type="tel" placeholder="phone" name="phone" maxlength="10" minlength="10"  required/> <br> <br>
    <input type="text" placeholder="address" name="address" maxlength="25" minlength="15" required/> <br> <br>
    <select>
        <option>select state</option>
        <option>ap</option>
        <option>karnataka</option>
        <option>bangalore</option>
    </select> <br> <br>
    <select>
        <option>select city</option>
        <option>proddatur</option>
        <option>kadapa</option>
        <option>hyderabad</option>
        <option>tirupathi</option>
    </select> <br> <br>
    <input type="submit" value="submit" onclick="email()">
</form>
<script>
    function email(){
        let email=document.getElementById("email").values
        let x=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/

 

        if(email=x){
            document.write("email is valid");
        }
        else{
            document.write("email is invalid")
        }
    }
</script>

 


</body>

 

 

</html>