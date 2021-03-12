<?php include_once "header.php"?>
<body>
    <div class="wrapper">
        <section class="form singup">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-text">This is an error message </div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" placeholder="First name">
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" placeholder="Last name">
                    </div>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" placeholder="Enter email address">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" placeholder="Enter new password">
                    <i class="fa fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file">
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Already signup ? <a href="#">Login now</a></div>
        </section>
    </div>
</body>
</html>