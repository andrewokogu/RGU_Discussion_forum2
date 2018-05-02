<?php require("header.php");

?>

    <script type="text/javascript">
        document.getElementById("auhome").className="active";
    </script>

    <div class="art-contentLayout">
        <div class="art-content">
            <div class="art-Post">
                <div class="art-Post-tl"></div>
                <div class="art-Post-tr"></div>
                <div class="art-Post-bl"></div>
                <div class="art-Post-br"></div>
                <div class="art-Post-tc"></div>
                <div class="art-Post-bc"></div>
                <div class="art-Post-cl"></div>
                <div class="art-Post-cr"></div>
                <div class="art-Post-cc"></div>
                <div class="art-Post-body">
                    <div class="art-Post-inner">
                        `                            <h2 class="art-PostHeaderIcon-wrapper">
                            <img src="res/images/welcome.jpg" width="9" height="9" alt="PostHeaderIcon" />
                            <span class="art-PostHeader">Welcome</span>
                        </h2>
                        <div class="art-PostContent">


                            <p align="justify"><b>RGU Student Discussion Forum</b>è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo.</p>

                            </p>
                            <p>
                                	<span class="art-button-wrapper">
                                		<span class="l"> </span>
                                		<span class="r"> </span>
                                		<a class="art-button" href="javascript:void(0)">Read more...</a>
                                	</span>
                            </p>


                        </div>
                        <div class="cleared"></div>
                    </div>

                </div>
            </div>
            <div class="art-Post">
                <div class="art-Post-tl"></div>
                <div class="art-Post-tr"></div>
                <div class="art-Post-bl"></div>
                <div class="art-Post-br"></div>
                <div class="art-Post-tc"></div>
                <div class="art-Post-bc"></div>
                <div class="art-Post-cl"></div>
                <div class="art-Post-cr"></div>
                <div class="art-Post-cc"></div>
                <div class="art-Post-body">
                    <div class="art-Post-inner">
                        <h2 class="art-PostHeaderIcon-wrapper">
                            <img src="res/images/welcome.jpg" width="9" height="9" alt="PostHeaderIcon" />
                            <span class="art-PostHeader">Who uses our website?</span>
                        </h2>
                        <div class="art-PostContent">



                            <p align="justify">È universalmente riconosciuto che un lettore che osserva il layout di una pagina viene distratto dal contenuto testuale se questo è leggibile
                            </p>


                            <p>
                                		<span class="art-button-wrapper">
                                			<span class="l"> </span>
                                			<span class="r"> </span>
                                			<a class="art-button" href="javascript:void(0)">Join&nbsp;Now!</a>
                                		</span>
                            </p>

                        </div>
                        <div class="cleared"></div>
                    </div>

                </div>
            </div>
        </div>
        <div class="art-sidebar1">
            <div class="art-Block">
                <div class="art-Block-body">
                    <div class="art-BlockHeader">
                        <div class="l"></div>
                        <div class="r"></div>
                        <!--<div class="art-header-tag-icon">
                            <div class="t">Newsletter</div>
                        </div>-->
                    </div><div class="art-BlockContent">
                        <div class="art-BlockContent-tl"></div>
                        <div class="art-BlockContent-tr"></div>
                        <div class="art-BlockContent-bl"></div>
                        <div class="art-BlockContent-br"></div>
                        <div class="art-BlockContent-tc"></div>
                        <div class="art-BlockContent-bc"></div>
                        <div class="art-BlockContent-cl"></div>
                        <div class="art-BlockContent-cr"></div>
                        <div class="art-BlockContent-cc"></div>
                        <div class="art-BlockContent-body">

                        </div>
                    </div>
                </div>
            </div>
            <div class="art-Block">
                <div class="art-Block-body">
                    <div class="art-BlockHeader">
                        <div class="l"></div>
                        <div class="r"></div>
                        <div class="art-header-tag-icon">
                            <div class="t">Log In</div>
                        </div>
                    </div><div class="art-BlockContent">
                        <div class="art-BlockContent-tl"></div>
                        <div class="art-BlockContent-tr"></div>
                        <div class="art-BlockContent-bl"></div>
                        <div class="art-BlockContent-br"></div>
                        <div class="art-BlockContent-tc"></div>
                        <div class="art-BlockContent-bc"></div>
                        <div class="art-BlockContent-cl"></div>
                        <div class="art-BlockContent-cr"></div>
                        <div class="art-BlockContent-cc"></div>
                        <div class="art-BlockContent-body">
                            <div>


                                <script type="text/javascript">
                                    function check(f)
                                    {
                                        if(f.uid.value=="")
                                        {
                                            document.getElementById("spuid").innerHTML="Please,Enter the user id ";
                                            //alert("Please,Enter Your User Id")
                                            f.uid.focus()
                                            return false;
                                        }
                                        else if(f.pwd.value=="")
                                        {
                                            document.getElementById("a").innerHTML="Please,Enter the password";
                                            //alert("Please,Enter Your Password")
                                            f.pwd.focus()
                                            return false;

                                        }

                                        else
                                            return true;
                                    }


                                </script>
                                <form action="loginH.php" method="POST" onsubmit="return check(this)">
                                    <table>
                                        <tr><td>User Id:</td></tr><tr><td><input type="text" name="uid"><span id='spuid' style="color: red;"></span></td></tr>
                                        <tr><td>Password:</td></tr><tr><td><input type="password" name="pwd"><span id='spuid' style="color: red;"></span></td></tr>
                                        <tr><td><input type="submit" value="login"><input type="reset" value="cancel"></td></tr>
                                        <tr><td><a href="register.php"><input type="button" value="Sign Up"></a></td></tr>
                                    </table>

                                    <?php
                                    if (isset ($_GET["act"]))
                                        if ($_GET["act"] == "invalid")
                                            echo "Invalid User Id / password";

                                    ?>

                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cleared"></div><div class="art-Footer">

<?php require("footer.php")?>