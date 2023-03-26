<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <nav class="navbar">
        <h1 class="logo">Canada Guide</h1>
        <ul class="nav-links">
            <li class="active"><a href="#"></a>Home</li>
            <li><a href="#"></a>Discussions</li>
            <li><a href="#"></a>About</li>
            <li class="ctn"><a href="#"></a>Contact</li>
        </ul>
        <img src="../images/menu_btn.jpeg" alt="" class="menu-btn">
    </nav>
    <header>
        <div class="head-content">
            <h2>A perfect guide for all new comers to Canada</h2>
            <div class="line"></div>
            <h1>What to do when you arrive for the first time</h1>
            <a href="#" class="ctn">Learn more</a>
        </div>
    </header>
    <!--Information-->
    <section class="info">
        <div class="title">
            <h1>Information</h1>
            <div class="line"></div>
            <br>

        </div>
        <div class="row">
            <div class="column">
                <img src="./images/b1.jpg" alt="">
                <h2>International Students</h2>
                <p>Apply to study in Canada as an international student, extend your study permit and find out about working while you study or after you graduate.</p><br>
                <a href="#" class="ctn">Learn more</a>
            </div>
            <br>
            <div class="column">
                <img src="./images/b2.jpeg" alt="">
                <h2>Migrate on work visa</h2>
                <p>Apply to work in Canada, extend a work permit or hire a foreign worker.</p><br>
                <a href="#" class="ctn">Learn more</a>
            </div>
            <br>
            <div class="column">
                <img src="./images/b1.jpg" alt="">
                <h2>Migrate after Permanent Residence</h2>
                <p>How you can immigrate to Canada, how to protect yourself from fraud and what to expect after you arrive in Canada.</p><br>
                <a href="#" class="ctn">Learn more</a>
            </div>
        </div>
    </section>
    <script>
        const menuBtn=document.querySelector('.menu-btn')
        const navlinks = document.querySelector('.nav-links')

        menuBtn.addEventListener('click',()=>{
            navlinks.classList.toggle('mobile-menu')
        })
    </script>
</body>
</html>
