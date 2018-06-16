<?php
    if(isset($_POST["upload"]))
    {
        if(isset($_FILE["file"]) && !$_FILE["file"]["error"])
        more_uploaded_file($_FILE["file"]["tmp_name"],'./media/'.$_FILES["file"][""]);
        echo "thanh cong";
    }else
        echo "error";
?>

<html>
    <body>
        <form medthod="post" action="" enctype="multpart/form_data">
            <input type="file" name="file">
            <input type="submit" name="upload" value="Upload">      
        </form>
    </body>
</html>
