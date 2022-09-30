    <section class="container">

    <section class="entrance">
        <div class="logo">
            <img class="img_logo" src="/assets/images/illu/Logo.png">
        </div>

        <!-- ****** Création du formulaire **** -->

        <div class="formulaire_container">
            <div class="formulaire">

                <form method="post" action="../controller/LogIn.php">
                    <div class="formulaire_text">
                        <h1>welcome</h1>
                        <p>Sign in to your account</p>
                    </div>

                    <div class="inputGroup">
                        <input class="inputbox" type="text" name="username" id="user" placeholder="Name">
                    </div>


                    <div class="inputGroup">
                        <input class="inputbox" type="password" name="password" id="pswd" placeholder="password">
                    </div>
                    <h4>forgot your password ?</h4>

                    <!------- Bouton-------->
                    <div class="sign_in">
                        <h2>Log in</h2>
                        <input class="btn_log" type="submit" value="">
                    </div>
                    <div class="create">
                        <p>Don't have an account ?<a href="?page=createAccount">Create</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="illustration">
    </section>

    </section>