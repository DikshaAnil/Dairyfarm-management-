
<!DOCTYPE html>
<html>
<head>
    <title>Dairy Farm Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #main {
            width: 80%;
            margin: 0 auto;
        }
        #headersection {
            text-align: center;
            margin-bottom: 20px;
        }
        #headersection button {
            float: right;
            margin-left: 10px;
        }
        #Profile {
            text-align: center;
            margin-bottom: 20px;
        }
        #Profile img {
            border-radius: 50%;
        }
        #Group {
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="main">
        <div id="headersection"> 
            <button id="backbtn" onclick="window.history.back()">Back</button>
            <button id="logoutbtn" onclick="window.location.href='logout.php'">Logout</button>
            <h1>Dairy Farm Shop</h1>
            <hr>
        </div> 
        <div id="Profile">
            <img src="https://www.shutterstock.com/image-vector/dairy-products-cheese-yoghurt-kid-260nw-1350450362.jpg" width="300px" height="300px" alt="Profile Picture">
            <br>
             </div>
        <div id="Group">
            <!-- Additional content can be added here -->
             
        </div>
            <div class="a2">
              <select class="cat"id="Category" name="📓Category"required>
               <option>Category</option>
               <option>Whole milk(3.25)</option>
               <option>Reduced fat milk(2%)</option>
               <option>Low fat milk(1%)</option>
               <option>Fat free milk</option>
               <option>Others</option>
              </select>

               <select class="bd"id="Category" name="Brand"required>
                <option>Brand</option>
                <option>Amul</option>
                <option>Mother Dairy</option>
                <option>Kwality Limited</option>
                <option>Verka </option>
                <option>Mr Dairy</option>
                <option>Others</option>
               </select>
            </div>   
    </div>    
</body>
</html>
