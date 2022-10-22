const createNav = () => {
    let nav = document.querySelector('.navbar');

    nav.innerHTML = `
        <div class="nav">
            <a class="test" href="index.php">
            <img src="img/light-logo.png" class="brand-logo" alt=""></a>
            <div class="nav-items">

                    <div class="dropdown">
                    <button class="dropbtn"><a href="#"><img src="img/user.png" alt=""></a></button>
                    <div class="dropdown-content">
                        <a href="logout.php">Log off</a>
                    </div>
                    </div>
            </div>
        </div>

    `;
}

createNav();