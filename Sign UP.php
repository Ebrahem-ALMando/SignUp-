<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Sign up.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">

            <div class="square" id="square1" style="--i:0"></div>
            <div class="square" id="square2" style="--i:1"></div>
            <div class="square" id="square3" style="--i:2"></div>
            <div class="square" id="square4" style="--i:3"></div>

            <div class="con ">
                <div class="form ">
                    <h2 style="top: -20px;">Login Form</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
                        <!-- Username => input  -->
                        <div class="input ">
                            <input type="text" class="text1  inb" placeholder="Username " name="Username"value="<?php echo "ssaa";?>">
                        </div>
                        <!-- Email => input  -->
                        <div class="input ">
                            <input type="text" class="text1  inb" placeholder="Email ">
                        </div>
                        <!-- Password => input  -->
                        <div class="input ">
                            <input type="password" class="password1 inb" placeholder="password ">
                        </div>
                        <!-- Gender => radio -->
                        <div class="input_radio ">
                            <p class="Gender">Gender</p>
                            <label for=""> Male</label>
                            <input type="radio" name="Gender" class="radio_gend">
                            <label for=""> Female</label>
                            <input type="radio" name="Gender" class="radio_gend">
                            <label for=""> Other</label>
                            <input type="radio" name="Gender" class="radio_gend">
                        </div>
                        <!-- Skills => Checkbox -->
                        <div class="input_radio ">
                            <p class="skills">Skills</p>
                            <label for=""> PHP</label>
                            <input type="checkbox" name="Gender" class="checkbox">
                            <label for=""> JS</label>
                            <input type="checkbox" name="Gender" class="checkbox">
                            <label for=""> Python</label>
                            <input type="checkbox" name="Gender" class="checkbox">
                        </div>
                        <!-- file => input -->
                        <div class="input ">
                            <input type="file" id="file" class="file_C">
                            <label for="file">
                                <i class="material-icons file_Clable">
                                    <pre> Dawnload CV </pre> 
                                </i>&nbsp;
                             
                            </label>
                        </div>

                        <!-- submit => input  -->
                        <div class="input ">
                            <input type="submit" class="sent1 " value="Login ">
                        </div>
                        <!-- Clear => input -->
                        <div class="input ">
                            <input type="reset" class="reset " value="Clear All ">
                        </div>




                    </form>
                    <p class="p " id="twasl">Designed by: <b>
                        <span>Ebrahem</span>
                         <span>&ensp;AL</span>
                          <span>&ensp;Mando</span>
                         </b>
                    </p>

                    <div class="twasl">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/abo.mohamad.902604 " target="_blank "> <i class="fa fa-facebook-square "></i></a>
                            </li>
                            <li>
                                <a href="https://t.me/Ebrahem_a_adnan " target="_blank "><i class="fa fa-telegram " aria-hidden="true "></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://wa.me/qr/WKQGLFXGRZRTP1 " target="_blank "><i class="fa fa-whatsapp " id="w1" aria-hidden="true "></i></a>
                            </li>
                            <li>
                                <a href="https://instagram.com/ibrahim_aladnan?utm_medium=copy_link " target="_blank "><i class="fa fa-instagram " aria-hidden="true "></i></a>
                            </li>
                            <li>
                                <a href="mailto:ebrahemalmando2001@gmai.com " target="_blank "><i class="fa fa-envelope " aria-hidden="true "></i></a>
                            </li>
                        </ul>

                    </div>


                </div>
            </div>
        </div>
    </section>
<!-- Code the PHP  -->
    <?php
       if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name=$_POST['Username']  ;
    echo "<h1>.$name.</h1>";
    }

    ?>
</body>