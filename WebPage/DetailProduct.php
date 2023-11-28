
<?php 
    include '../Assets/ConnectDB.php';
    $id = $_GET['id']; 
    $sql = "SELECT * FROM product Where ProductID = '$id'"; 
    $result = $conn->query($sql); 

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $phone= $_POST['phone'];
        $comment=$_POST['comment'];
        $date = date("Y-m-d h:i:s:A");
        if(isset($name) && isset($phone) && isset($comment) && isset($date)){
            $commentSql = "INSERT INTO comment(Names,Phone,Comments,ProductID,Dates) VALUES('$name','$phone','$comment','$id','$date')";
            $commentQuery = $conn->query($commentSql);
            ?>
                <script>
                    window.location= "/Nhom09_WebBanHang_LoaPolyWebPage/_LayoutWebPage.php?_LayoutWeb=Details&id=<?php echo $id?>"
                </script>
            <?php
           
        }
    }
    $listComment = "SELECT * FROM comment Where ProductID = '$id'";
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
                <?php
                }  
            } 
            ?>
   
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
<div class="details-view-more">
    <ul>
        <li class="item-view-1">Miêu Tả</li>
        <li class="item-view-2">Đánh Giá</li>
        <li class="item-view-3">Thương hiệu</li>
    </ul>
</div>
<div class="main-view-more">
    <ul class="main-view-description">
        <li class="Description-item">
        Loa Bluetooth JBL có thiết kế ấn tượng nhờ sự kết hợp giữa đèn LED đẹp mắt và đèn nhấp nháy. Cùng với đó là chất lượng âm thanh mạnh mẽ với công suất 800W cho âm trầm sâu hơn và rất nhiều tính năng nổi bật khác của loa karaoke mà bạn có thể ghé thăm CellphoneS để tìm hiểu thêm nhé!
       </li>
        <li class="Description-item">Loa Bluetooth JBL PartyBox không chỉ sở hữu phong cách ánh sáng đồng bộ với nhịp điệu âm nhạc khiến mọi thứ trở nên nổi bật mà còn khiến mọi niềm vui bùng nổ với công suất loa 800W.</li>
        <li class="Description-item">Để có thể đồng hành cùng bạn trong mọi bữa tiệc từ trong nhà đến ngoài trời, JBL PartyBox đã sử dụng chất liệu nhựa cao cấp có khả năng chống va đập tốt để hoàn thiện phần vỏ loa, kết hợp với đó. có khả năng chống nước IPX4..</li>
    </ul>
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
              <span style=" font-size: 18px;
               font-weight: bold;"><?php echo $row['Names'] ?></span></br>
              <span style="color:gray"><?php echo $row['Comments'] ?></span></br>  
            </li>

            <?php
                }
            }
           
            ?>
            
        </ul>

        <span class="info-d d-first">Be the first to review “<?php echo $ProductN?>”</span><br>
        <span class="info-d">Your phone will not be published. Required fields are marked *</span>  
        <form id="formComment" method="POST">
            <input type="text" name="name" placeholder="Your name">
            <input type="text" name="phone" placeholder="Your phone">
            <input type="text" name="comment" placeholder="Your comment">
            <input id="sendComment" type="submit" name="submit" value="Comment Now">
        </form> 
    </div>
</div>
