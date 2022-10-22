const createNav = () => {
    let nav = document.querySelector('.navbar');

    nav.innerHTML = `
        <div class="nav">
            <a class="test" href="index.php">
            <img src="img/light-logo.png" class="brand-logo" alt=""></a>
            <div class="nav-items">


            <div class="search-box">
            <input type="text" autocomplete="off" placeholder="Search if we have a book">
            <div class="result"></div>
            </div>

                    <div class="dropdown">
                    <button class="dropbtn"><a href="#"><img src="img/user.png" alt=""></a></button>
                    <div class="dropdown-content">
                        <a href="logout.php">Log off</a>
                    </div>
                    </div>
            </div>
        </div>
        <ul class="links-container">
            <li class="Link-item"><a href="uploadAuthor.php" class="link">Upload Author</a> </li>
            <li class="Link-item"><a href="worker.php" class="link">Book List</a> </li>
            <li class="Link-item"><a href="listOfUsers.php" class="link">List of users</a> </li>
            <li class="Link-item"><a href="forumPremium.php" class="link">Forum</a> </li>
        </ul>

    `;
}

createNav();