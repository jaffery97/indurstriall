<style>
   
input[type=text],
input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
    
    input[type=submit] {
    background-color:darkcyan;
    color: white;
    padding: 10px;
    border: none;
    cursor: pointer;
    height: 33px;
    width: 60px;
}

     

</style>
       

    <form method="post" action="login1.php">
                    <div class="container">
                        <label><b>Email</b></label><br>
                        <input type="text" placeholder="Enter Username" name="email" required>
<br>
                        <label><b>Password</b></label><br>
                        <input type="password" placeholder="Enter Password" name="pw" required>
<br>
                        <input type="submit" name="submit" value="Submit" class="lg">
                        
                        <span class="psw">Forgot <a href="#" style="color: blue">password?</a></span>
                     
                    </div>

                </form>
   


