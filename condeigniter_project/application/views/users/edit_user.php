<form action="<?php echo base_url('Users/update/'. $edit->id) ?>" method="post">
    <input type="text" name="name" value="<?php echo $edit->name ?>" placeholder="Enter Name"> 
    <input type="text" name="email" value="<?php echo $edit->email ?>" placeholder="Enter Email"> 
    <input type="password" name="password" value="<?php echo $edit->password ?>" placeholder="Enter Password"> 
    <input type="submit" value="Update">
    
</form>
