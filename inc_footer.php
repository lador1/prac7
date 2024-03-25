<footer>
    <p class="copyright">&copy; Supercar Hire Townsville</p>
    <p class="user">
        <?php
        // echo $_SESSION['blah']; // demo undefined variable
        if (isset($_SESSION['username'])) {
            echo "Hello " . $_SESSION['username'];
            echo " - <a href=\"logout.php?page=$name\">Logout</a>";
        } else {
            echo "(Not logged in)";
        }
        ?>
        </p>
            <p class="contact-info">
                    Email: info@supercarhiretownsville.com<br>
                    Phone: +123-456-7890
                </p>
            </div>
        </div>
    </div>
</footer>
    </p>
</footer>

<?php if (isset($dbh)) {
    $dbh = null;
} ?>
