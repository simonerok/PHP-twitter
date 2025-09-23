<?php 
require_once __DIR__."/x.php";
// _noCache();
session_start();

if(!isset($_SESSION["user"])){
    header("location: /");
    exit();
}


require __DIR__."/db.php";

// Fetch posts for main feed
$q = "SELECT * FROM posts ORDER BY RAND() LIMIT 10";
$stmt = $_db->prepare($q);
$stmt->execute();
$posts = $stmt->fetchAll();

// Fetch all users for 'who to follow'
$logged_user_id = $_SESSION["user"]["user_pk"];
$q = "SELECT * FROM users WHERE user_pk != :logged_user_id ORDER BY RAND() LIMIT 10";
$stmt = $_db->prepare( $q );
$stmt->bindValue(":logged_user_id", $logged_user_id);
$stmt->execute();
$users_to_follow = $stmt->fetchall();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script src="app.js" defer></script>
    <title>Welcome home <?php echo $_SESSION["user"]["user_first_name"]; ?></title>
</head>

<body>
    <div id="container">
        <button class="burger" aria-label="Menu">
            <i class="fa-solid fa-bars"></i>
            <i class="fa-solid fa-xmark"></i>
        </button>
        <nav>
                <ul>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-house"></i><span>Home</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i><span>Explore</span></a></li>
                    <li><a href="#"><i class="fa-regular fa-bell"></i><span>Notifications</span></a></li>
                    <li><a href="#"><i class="fa-regular fa-envelope"></i><span>Messages</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-atom"></i><span>Grok</span></a></li>
                    <li><a href="#"><i class="fa-regular fa-bookmark"></i><span>Bookmarks</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-briefcase"></i><span>Jobs</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-users"></i><span>Communities</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-star"></i><span>Premium</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-bolt"></i><span>Verified Orgs</span></a></li>
                    <li><a href="#"><i class="fa-regular fa-user"></i><span>Profile</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-ellipsis"></i><span>More</span></a></li>
                    <li><a href="bridge-logout"><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span></a></li>
                </ul>

                <button class="post-btn">Post</button>

                <div id="profile_tag">
                    <img src="https://avatar.iran.liara.run/public/73" alt="Profile">
                    <div>
                        <div class="name">
                            <?php echo $_SESSION["user"]["user_first_name"]; ?>
                        </div>
                        <div class="handle">
                            <?php echo "@".$_SESSION["user"]["user_email"]; ?> 
                        </div>
                    </div>
                    <i class="fa-solid fa-ellipsis option"></i>
                </div>
        </nav>

       
            <main>
             
               <?php
               foreach($posts as $post):
                     require __DIR__."/_tweet.php";
                 endforeach;
                ?>
                 <?php
                  // <span id="tweet_1_like" class="action like-btn"><i class="fa-regular fa-heart"></i> 87</span>
               ?>
              
               
                    
            </main>
            

        
        <aside>
            <form action="">
                <input type="text" placeholder="Search Twitter">
                <button>Search</button>
            </form>
            <div class="happening-now">
                <h2>What's happening now</h2>
                <div class="trending">
                    <div class="trending-item">
                        <div class="trending-info">
                            <span class="item_title">Trending in Denmark</span>
                            <p>Grækenland</p>
                        </div>
                        <span class="option">⋮</span>
                    </div>
                    <div class="trending-item">
                        <div class="trending-info">
                            <span class="item_title">Politics . Trending</span>
                            <p>Syria</p>
                        </div>
                        <span class="option">⋮</span>
                    </div>
                    <div class="trending-item">
                        <div class="trending-info">
                            <span class="item_title">Bussiness . Trending</span>
                            <p>#AlgoTrading</p>
                        </div>
                        <span class="option">⋮</span>
                    </div>
                    <div class="trending-item">
                        <div class="trending-info">
                            <span class="item_title">Trending in Denmark</span>
                            <p>Italien</p>
                        </div>
                        <span class="option">⋮</span>
                    </div>
                    <button class="show-more-btn">Show more</button>
                </div>

            </div>
            <hr>
            <div class="who-to-follow">
                <h2>Who to follow</h2>
                <div class="follow-suggestion">
                   
                    <?php
                    foreach($users_to_follow as $user):
                        require __DIR__."/_who-to-follow.php";
                    endforeach
                    ?>

                    <button class="show-more-btn">Show more</button>
                </div>
                </div>
        </aside>
    </div>
</body>

</html>