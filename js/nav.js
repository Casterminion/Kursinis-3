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
                        <a href="accountDetails.php">Account details</a>
                        <a href="logout.php">Log off</a>
                    </div>
                    </div>
            </div>
        </div>
        <ul class="links-container">
            <li class="Link-item"><a href="wealth.php" class="link">Wealth</a> </li>
            <li class="Link-item"><a href="sellBooks.php" class="link">SellBooks</a> </li>
            <li class="Link-item"><a href="tradingBooks.php" class="link">tradingBooks</a> </li>
            <li class="Link-item"><a href="discipline.php" class="link">Discipline</a> </li
            <li class="Link-item"><a href="body.php" class="link">Body</a> </li>
            <li class="Link-item"><a href="meditation.php" class="link">Meditation</a> </li>
            <li class="Link-item"><a href="forum.php" class="link">Forum</a> </li>
        </ul>

    `;
}

createNav();