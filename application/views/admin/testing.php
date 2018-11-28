<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
    <?php
        echo $this->session->flashdata('msg');
        echo form_open_multipart();
        echo form_upload('file');
        echo form_submit('upload','Upload');
        echo form_close();
    ?>

    <table>
        
        <?php
        if($get_image->num_rows()>0){
            
            foreach($get_image->result() as $data){
                
                echo '<tr>';
                echo '<td>'.img(array('width'=>'120','height'=>'80', 'src'=>'assets/images/uploaded/'.$data->file_name)).'</td>';
                echo '<td>'.anchor('upload/'.$data->file_name, 'View').'|delete</td>';
                echo '</tr>';
            }
        }
        else{
            echo'<tr>';
            echo'<td colspan="2"> images is empty</td>';
            echo'</tr>';
        }
        
        ?>

    </table>

</body>
</html>









