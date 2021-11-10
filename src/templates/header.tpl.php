<html>
<header>
        <div class="inner-header">
            <div class="logo-container">
                <?php
                    if (isset($_SESSION['uname']) || $_SESSION['email']) { ?>
                        <a href="?url=dashboard"><h1>School</h1></a>
                    <?php }else{ ?>
                        <a href="?url=home"><h1>School</h1></a>
                        <?php } ?>
            </div>
            <ul class="navigation">
                <?php
                    if (isset($_SESSION['uname']) || $_SESSION['email']) { ?>
                        <a href="?url=profile"><li><?php echo $_SESSION['uname']; ?></li></a>
                        <a href="?url=logout"><li>Logout</li></a>
                    <?php }else{ ?>
                        <a href="?url=login"><li>Login</li></a>
                        <a href="?url=register"><li>Register</li></a>
                    <?php } ?>
            </ul>
        </div>
    </header>