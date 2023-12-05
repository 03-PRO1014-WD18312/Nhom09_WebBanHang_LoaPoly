
<?php 
    include '../Assets/ConnectDB.php';
    $id = $_GET['id']; 
    $sql = "SELECT * FROM product Where ProductID = '$id'"; 
    $result = $conn->query($sql); 


   if(isset($_SESSION)) 
   { 
    if(isset($_POST['submit'])){   
        $userId = $_SESSION['ID'];  
        $phone= $_POST['phone'];
        $comment=$_POST['comment'];
        $date = date("Y-m-d h:i:s:A");
        if(isset($userId) == null){
            ?>
            <script>
                alert("You need login to comment");
                window.location="/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb=Login";
            </script>
        <?php   
        }else
        if(isset($phone) && isset($comment) && isset($date) ){
            $commentSql = "INSERT INTO comments(Content,Dates,Phone,ProductID,UserId) VALUES('$comment','$date','$phone','$id','$userId')";
            $commentQuery = $conn->query($commentSql);
            ?>
                <script>
                    window.location = "http://localhost/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb=Details&id=<?php echo $id?>"
                </script>
            <?php
           
        }
    }
}
    $listComment = "SELECT * FROM comments Where ProductID = '$id'";
    $resultListComment = $conn->query($listComment); 
    $conn->close(); 
?>

<div class="details-product">
<?php
            $ProductN = ""; 
            if ($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc()) {
                    $ProductN = $row['ProductName'];
                ?>
 <div class="image-product">
        <img id="image-details" width="480" height="480" src="../Assets/Image/<?php echo $row['ProductImage'] ?>" alt="">
    </div>
    <div class="info-product">
        <div class="header-product-info">
            <span class="name-product-detail"><?php echo $row['ProductName'] ?></span>
            <span class="info-star">
                <li><i class="far fa-star Star-one"></i></li>
                <li><i class="far fa-star Star-two"></i></li>
                <li><i class="far fa-star Star-three"></i></li>
                <li><i class="far fa-star Star-four"></i></li>
                <li><i class="far fa-star Start-five"></i></li>(04)
                <li class="review-info">Add your review</li>
            </span>
            <span class="social-info">
                <div class="info-face">
                    <span><i class="fab fa-facebook-f"></i> Facebook</span>
                </div>
                <div class="info-twitter">
                    <span><i class="fab fa-twitter"></i> Twitter</span>
                </div>
                <div class="info-instagram">
                    <span><i class="fab fa-instagram"></i> Instagram</span>
                </div>
            </span>
        </div>
        <div class="info-description">
            <span style="font-size: 18px;
        position: relative;
        bottom: 10px;"><?php echo $row['ProductDescription'] ?></span>
        </div>
        <div>
            <span class="Availability">Availability : <span class="instock">Instock</span></span><br>
            <span class="info-price">$<?php echo $row['NewPrice'] ?>.00</span>
            <span class="info-add-cart">
              
                <div id="myID-view"><?php echo $row['ProductID'] ?></div>
                <div class="info-add"><a style="color:white" href="/Nhom09_WebBanHang_LoaPoly/WebPage/ProcessCart.php?id=<?php echo $row['ProductID']?>">ADD TO CART</a></div>
                <div class="icon-info">
                    <i class="far fa-heart"></i>
                    <i class="fas fa-retweet"></i>
                </div>
            </span>
        </div>
    </div>

   
</div>
<div class="details-view-more">
    <ul>
        <li class="item-view-1">Describe</li>
        <li class="item-view-2">Comment</li>
        <li class="item-view-3"></li>
    </ul>
</div>
<div class="main-view-more">
    <ul class="main-view-description">
        <li><?php echo $row['DetailedDescription'] ?></li>
    </ul>
    <?php
                }  
            } 
            ?>
    <div class="main-view-review">
        <div class="review-header">
            <div class="d-star">
                <span><span class="span-rate">4.25 <i class="far fa-star"></i></span>  Rating</span>
                <ul class="details-star">
                    <li>5 <i class="far fa-star"></i><div class="details-hr"></div>  <span>0</span> </li>
                    <li>4 <i class="far fa-star"></i><div class="details-hr"></div>  <span>0</span></li>
                    <li>3 <i class="far fa-star"></i><div class="details-hr"></div>  <span>0</span></li>
                    <li>2 <i class="far fa-star"></i><div class="details-hr"></div>  <span>0</span></li>
                    <li>1 <i class="far fa-star"></i><div class="details-hr"></div>  <span>0</span></li>
                </ul>
            </div>
            <div>
                <span class="review-all-in">Reviews for "<?php echo $ProductN ?>"</span><br>
                <span>There are no reviews yet.</span>
            </div>
        </div> 
        <ul class="main-comment">
            <h2 style="color:red">Review*</h2>
            <?php
            if ($resultListComment->num_rows > 0) 
            {
                while($row = $resultListComment->fetch_assoc()) {        
            ?>
            <li>
              <span><?php echo $row['Dates'] ?></span></br>
             
              <span style="color:gray"><?php echo $row['Content'] ?></span></br>  
            </li>

            <?php
                }
            }
           
            ?>
            
        </ul>

        <span class="info-d d-first">Be the first to review “<?php echo $ProductN?>”</span><br>
        <span class="info-d">Your phone will not be published. Required fields are marked *</span>  
        <form id="formComment" method="POST">
            <input type="text" name="phone" placeholder="Your phone">
            <input type="text" name="comment" placeholder="Your comment">
            <input id="sendComment" type="submit" name="submit" value="Comment Now">
        </form> 
    </div>
</div>

<style>
    .main-view-more{
        width: 1200px;
        height:auto;
    }
    #sendComment{
        font-size:20px;
    }

    #sendComment:hover{
        cursor: pointer;
        background-color:olivedrab;
        color:white;
    }
    .main-comment{
        width: 1200px;
        height:auto;
        margin-left:40px;
        position: relative;
        bottom: 30px;
    }
    .main-comment li{
        width: 90%;
        border-top: 1px solid rgba(128, 128, 128, 0.219);
        margin-top:10px;
    }
    #formComment{
        width: 1200px;
        height:300px;
       
        display:flex;
        flex-direction: column;
        margin-left:40px;
        justify-content: space-around;
    }
    #formComment input{
        width: 93%;
        height:40px;
        outline: none;
        padding-left: 20px;
        border: 1px solid rgba(128, 128, 128, 0.219);
    }
</style>
