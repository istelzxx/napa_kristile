<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <!-- CSS link -->
    <link rel="stylesheet" href="<?=base_url();?>public/style.css">
    <style>
        body {
            background-color: #f5f5dc; /* beige background */
            font-family: Arial, sans-serif;
            display: flex;              /* enable flexbox */
            justify-content: center;    /* center horizontally */
            align-items: center;        /* center vertically */
            min-height: 100vh;          /* occupy full viewport height */
            margin: 0;                  /* remove default margin */
            flex-direction: column;     /* stack h1 and table vertically */
        }

        h1 {
            text-align: center;
            color: #5a4a42; /* darker beige/brown for text */
        }

        table {
            margin: auto;
            border-collapse: collapse;
            width: 70%;
            background-color: #fffaf0; /* light beige for table */
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        th {
            background-color: #deb887; /* burlywood/beige tone */
            color: white;
            padding: 12px;
            text-align: left;
        }

        /* Iba ang kulay ng Action header */
        th.action-header {
            background-color: #deb887; /* sienna/darker brown */
            text-align: center; 
            vertical-align: left; /* para pantay sa Edit/Delete */
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            vertical-align: middle; /* para kapantay din ng header */
        }

        tr:hover {
            background-color: #f0e6d6; /* hover effect beige */
        }

        .action-buttons {
            text-align: center; /* align center yung buttons */
            vertical-align: middle;
        }

        .action-buttons a {
            display: inline-block;
            background-color: #deb887; /* beige buttons */
            color: white;
            padding: 6px 12px;
            margin: 2px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        .action-buttons a:hover {
            background-color: #cdaa7d; /* darker beige on hover */
        }
    </style>
</head>
<body>
    <h1>Welcome to View View</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th class="action-header">Action</th>
            <a href="<?=site_url(url: 'user/create/');?>" id="create"><button>Create User</button></a>
        </tr> 
        <?php foreach(html_escape($users) as $user): ?>
            <tr>
                <td><?=$user['id'];?></td>
                <td><?=$user['username'];?></td>
                <td><?=$user['email'];?></td>
                <td class="action-buttons">
                    <a href="<?=site_url('user/update/'. $user['id']);?>">Edit</a>
                    <a href="<?=site_url('user/delete/'. $user['id']);?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
