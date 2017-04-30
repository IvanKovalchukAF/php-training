<form method="post" action="edit.php?id=<?=$id?>">
    <input type="text" placeholder="name" value="<?=$row['name']?>" name="name">
    <br>
    <input type="text" placeholder="name" name="description" value="<?=$row['description']?>">
    <br>
    <input type="date" placeholder="created_at" name="created_at" value="<?=$row['created_at']?>">
    <br>
    <input type="hidden" name="id"  value="<?=$id?>">
    <br>
    <input type="submit" >
</form>