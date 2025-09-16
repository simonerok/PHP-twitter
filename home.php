<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="app.css">
    <script src="app.js" defer></script>
    <title>HOME</title>
</head>
<body>
    
<div id="container">

<nav id="site-nav">
   <button class="burger-menu" type="button"
          aria-expanded="false"
          aria-label="Open navigation menu"
          aria-controls="primary-navigation">
    <i class="fa-solid fa-bars" aria-hidden="true"></i>
    <i class="fa-solid fa-xmark" aria-hidden="true"></i>
  </button>

  <div id="primary-navigation" class="nav-links">
    <a href=""><i class="fa-solid fa-house"></i> Home</a>
    <a href=""><i class="fa-solid fa-hashtag"></i> Explore</a>
    <a href=""><i class="fa-regular fa-bell"></i> Notifications</a>
    <a href=""><i class="fa-regular fa-envelope"></i> Messages</a>
    <a href=""><i class="fa-solid fa-robot"></i> Grok</a>
    <a href=""><i class="fa-regular fa-bookmark"></i> Bookmarks</a>
    <a href=""><i class="fa-solid fa-briefcase"></i> Jobs</a>
    <a href=""><i class="fa-solid fa-users"></i> Communities</a>
    <a href=""><i class="fa-solid fa-gem"></i> Premium</a>
    <a href=""><i class="fa-solid fa-circle-check"></i> Verified Orgs</a>
    <!-- login -->
    <a href="login"><i class="fa-regular fa-user"></i>Login</a>
    <a href=""><i class="fa-solid fa-ellipsis"></i> More</a>
    <div>
      <button>Post</button>
    </div>
    <div class="profile-nav">
      <img class="avatar" src="images/sofia.JPG" alt="">
      <div class="user_info">
        <p>Sofia S. Rokkedal</p>
        <p>@SofiaRokkedal</p>
      </div>
      <div class="more">...</div>
    </div>
  </div>
</nav>


<main>
        <!-- What's Happening  -->
        <div class="post-something">
            <div class="post-header">
                <img class="avatar" src="images/sofia.JPG" alt="">
                <span class="post-author opacity">What's Happening?</span>
            </div>
            <div class="post-actions">
                <div class="post-actions-icons">
                    <i class="fa-solid fa-image"></i>
                    <i class="fa-solid fa-image"></i>
                    <i class="fa-solid fa-image"></i>
                    <i class="fa-solid fa-image"></i>
                    <i class="fa-solid fa-image"></i>
                </div>
                <button>Post</button>
            </div>
        </div>


    <!-- REPOST  -->
    <div class="post post-repost">
    <div class="post-header">
        <img class="avatar" src="images/Oskar.avif" alt="">
        <span class="post-author">Oskar Star</span>
        <span class="opacity">
            <span class="post-repost-time">@oskar Star</span>
            <span class="post-repost-label">&middot; 2 min ago</span>
        </span>
    </div>
    <div class="post-reaction">
        <p>This looks awesome! I’ve been wanting to try building my own PHP page — thanks for sharing your project and the inspiration!</p>
    </div>

    <!-- ORIGINAL POST -->
    <div class="original-post">
        <div class="original-post-header">
            <img class="avatar" src="images/sofia.JPG" alt="">
            <span class="post-author">Sofia S. Rokkedal</span>
            <span class="post-handle">@SofiaRokkedal</span>
            <span class="post-repost-label opacity">&middot; 7 hours ago</span>
        </div>
        <p>Just finished building my new PHP website! 🚀 Check it out on GitHub! #webdev #php</p>
    </div>

    <!-- REPOST REACTIONS -->
    <div class="post-reactions">
        <div class="post-reactions-icons">
            <span><i class="fa-regular fa-comment"></i> 10k</span>
            <span><i class="fa-solid fa-retweet"></i> 5k</span>
            <span><i class="fa-regular fa-heart"></i> 20k</span>
            <span><i class="fa-solid fa-chart-line"></i> 15k</span>
        </div>
    </div>

    </div>

    <!-- NORMAL POST -->
        <div class="post">
            <div class="post-header">
                <img class="avatar" src="images/Mathilde.avif" alt="">
                <span class="post-author">Mathilde Skov</span>
                <span class="post-handle">@MathildeSkov</span>
                <span class="post-time">· 1h</span>
            </div>
            <div class="post-content">
                Just finished a long run by the lakes! 🏃‍♀️ The weather was perfect and the city looked beautiful. Anyone else enjoying the sunshine today?
            </div>
            <div class="post-image">
                <img src="images/post-1.avif" alt="Copenhagen Lakes">
            </div>
            <div class="post-reactions">
                <div class="post-reactions-icons">
                    <span><i class="fa-regular fa-comment"></i> 320</span>
                    <span><i class="fa-solid fa-retweet"></i> 1.1K</span>
                    <span><i class="fa-regular fa-heart"></i> 5.2K</span>
                    <span><i class="fa-solid fa-chart-line"></i> 12K</span>
                </div>
            </div>
        </div>

         <div class="post">
            <div class="post-header">
                <img class="avatar" src="images/Mathilde.avif" alt="">
                <span class="post-author">Mathilde Skov</span>
                <span class="post-handle">@MathildeSkov</span>
                <span class="post-time">· 1h</span>
            </div>
            <div class="post-content">
                Just finished a long run by the lakes! 🏃‍♀️ The weather was perfect and the city looked beautiful. Anyone else enjoying the sunshine today?
            </div>
            <div class="post-image">
                <img src="images/post-2.avif" alt="Copenhagen Lakes">
            </div>
            <div class="post-reactions">
                <div class="post-reactions-icons">
                    <span><i class="fa-regular fa-comment"></i> 320</span>
                    <span><i class="fa-solid fa-retweet"></i> 1.1K</span>
                    <span><i class="fa-regular fa-heart"></i> 5.2K</span>
                    <span><i class="fa-solid fa-chart-line"></i> 12K</span>
                </div>
            </div>
        </div>

        <div class="post">
            <div class="post-header">
                <img class="avatar" src="images/sofia.JPG" alt="">
                <span class="post-author">Sofia S. Rokkedal</span>
                <span class="post-handle">@SofiaRokkedal</span>
                <span class="post-time">· 1h</span>
            </div>
            <div class="post-content">
                In my spare time, I like to stay creative by trying new hobbies—like sketching, writing short stories, or learning a new coding language. Even a walk outside can spark new ideas. What do you do to keep your creativity flowing?
            </div>
            <div class="post-image">
                <img src="images/post-3.avif" alt="Coding Inspiration">
            </div>
            <div class="post-reactions">
                <div class="post-reactions-icons">
                    <span><i class="fa-regular fa-comment"></i> 320</span>
                    <span><i class="fa-solid fa-retweet"></i> 1.1K</span>
                    <span><i class="fa-regular fa-heart"></i> 5.2K</span>
                    <span><i class="fa-solid fa-chart-line"></i> 12K</span>
                </div>
            </div>
        </div>

    
</main>

<aside>
        <form>
            <input type="text" placeholder="search">
        </form>
        <div class="likes">
            <h2>
                Trending for You
            </h2>
            <div>
                <div class="title">
                    <p>Danish Politics</p>
                    <p>Government presents new climate plan</p>
                </div>
                <div class="more">...</div>
            </div>
            <div>
                <div class="title">
                    <p>Superliga</p>
                    <p>FCK beats Brøndby</p>
                </div>
                <div class="more">...</div>
            </div>
            <div>
                <div class="title">
                    <p>Weather</p>
                    <p>Sunny and 22°C across the country</p>
                </div>
                <div class="more">...</div>
            </div> 
            <a href="">
                Show more
            </a>                       
        </div>
        <div class="trending">
            <h2>
                Who to follow
            </h2>

            <div>
                <img class="avatar" src="images/oskar.avif">            
                <div class="user_info">
                    <p>Oskar Star</p>
                    <p>@OskarStar</p>
                </div> 
                <button>
                    Follow
                </button>               
            </div>

            <div>
                <img class="avatar" src="images/Mathilde.avif">
                <div class="user_info">
                    <p>Mathilde Skov</p>
                    <p>@MathildeSkov</p>
                </div> 
                <button>
                    Follow
                </button>               
            </div>            

            <div>
                <img class="avatar" src="images/sofia.JPG">
                <div class="user_info">
                    <p>Sofia S. Rokkedal</p>
                    <p>@SofiaRokkedal</p>
                </div> 
                <button>
                    Follow
                </button>               
            </div> 

            <a href="">
                Show more
            </a>

        </div>
</aside>

</div>


</body>
</html>