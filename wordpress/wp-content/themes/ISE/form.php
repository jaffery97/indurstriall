
<meta charset="utf-8">


    
<style>
    
   

/* Style inputs */
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color:darkcyan;
    color: white;
    padding: 30px;
    border: none;
    cursor: pointer;
    height: 33px;
    width: 50px;
}

input[type=submit]:hover {
    background-color: #45a049;
}

/* Style the container/contact section */
.container {
    border-radius: 5px;
    padding: 10px;
    
}

/* Create two columns that float next to eachother */
.column {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
    color: black;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
    
}


@media (max-width: 800px) {
    .column, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }

    h2 {
        font-size: 18px;
    }
}
</style>



<div class="container">
  <div style="text-align:center">
    <h1>Contact Us</h1>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
          <div class="column">
      <form action="send.php" method="post">
        <label for="fname">First Name</label>
          
        <input type="text" id="fname" name="first_name" placeholder="Your first name..">
          
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="last_name" placeholder="Your last name..">
          
        <label for="country">E-mail</label>
        <input type="text" id="country" name="email" placeholder="Your email">
        
          <label for="country">Telephone</label>
        <input type="text" id="country" name="telephone" placeholder="111-111-1111">
         
        <label for="subject">Subject</label>
        <textarea id="subject" name="comments" placeholder="Write something.." style="height:170px"></textarea>
          
        <input type="submit" value="Submit">
          
      </form>
    </div>
      
    <div class="column" style="text-align:left;padding:30px;line-height:53px;">
        Contact Info
      <hr>
        
        <h2>Phone: 111-222-3333 </h2>
        <h2>Email: info@upchat.com</h2>
        <h2>Fax: 444-555-666</h2>
        <h2>Address: 42nd Street New York 11011 </h2>
        
        Social Media
        <hr>
     <?php
           include 'social.php';
        ?>
       <h2>
          
        </h2>
         
        
        
        
    </div>
  
        
  </div>
</div>
    

