<h1>Users List</h1>
<a href="<?php echo base_url('save-user') ?>">Create User</a>
<table border="1" width="90%">
    <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <?php
    foreach ($list as $k => $v) { ?>
        <tr>
            <td><?php echo ++$i ?></td>
            <td><?php echo $v->name ?></td>
            <td><?php echo $v->email ?></td>
            <td>
                <a href="<?php echo base_url('Users/view/' . $v->id) ?>">View</a>
                <a href="<?php echo base_url('Users/edit/' . $v->id) ?>">Edit</a>
                <a href="<?php echo base_url('Users/delete/' . $v->id) ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>