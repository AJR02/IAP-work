
<?php
// Class to handle user authentication forms
class forms {
    // Display the signup form
    public function signup() {
        ?>
        <form method="post" action="">
            <!-- Username input -->
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br><br>
            <!-- Email input -->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br><br>
            <!-- Password input -->
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br><br>
            <!-- Submit button and link to login page -->
            <input type="submit" value="Sign Up"> <a href="signin.php">Already have an account? Log in</a>
        </form>
        <?php
    }

    // Display the login form
    public function login() {
        ?>
        <form method="post" action="">
            <!-- Username input -->
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br><br>
            <!-- Password input -->
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br><br>
            <!-- Submit button and link to signup page -->
            <input type="submit" value="Log In"> <a href="./">Don't have an account? Sign up</a>
        </form>
        <?php
    }
}
