 
<table align="center" style="height: 100px;">
        <tr>
            <td></td>
        </tr>
        <form action="login.php" method="post">
            <tr>
                <td>Nom :</td>
                <td><input type="text" name="name"></td>
            </tr>
            <!-- <tr>
                <td>Email :</td>
                <td><input type="email" name="email" id=""></td>
            </tr> -->
            <tr>
                <td>Mot de passe : </td>
                 <td><input type="password" name="password" id=""></td>
            </tr>
            <tr>
                <td> <input type="Text" name="page" value= <?= $_GET['page'];?> hidden>
                <?php if(isset($_GET['id'])){
                    ?>
                    <input type="text" name="id" value= <?=  $_GET['id'] ;?> hidden >
             <?php    }?> 
                 </td>
                <td style="background-color: rgb(11, 27, 241); padding: 10px; border: 25px;"><input type="submit" value="Engister"></td>
            </tr>
        </form>
    </table>    
