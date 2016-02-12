

<!-- display all sections -->

<table class="table table-hover table-bordered SectionTable">
    <tr class="alert-danger">
        <th>Id</th>
        <th>Section Name</th>
        <th>Section Status</th>
        <th>Section Location</th>
        <th>Section Description</th>
        <th>Section Date</th>
        <th>UserName</th>
        <th>Actions</th>
        
    </tr>
    <?php
    for ($i = 0; $i < count($SecDataDisplay); $i++)
    
    //`section_id`, `section_name`, `section_status`, `section_location`, `section_desc`, `desction_date`, `username`
    
    {
        echo " <tr>
        
        <td>{$SecDataDisplay[$i]['id']}</td>
        <td>{$SecDataDisplay[$i]['section_name']}</td>
        <td>{$SecDataDisplay[$i]['section_status']}</td>
        <td>{$SecDataDisplay[$i]['section_location']}</td>
        <td>{$SecDataDisplay[$i]['section_desc']}</td>
        <td>{$SecDataDisplay[$i]['desction_date']}</td>
        <td>{$SecDataDisplay[$i]['username']}</td>
        <td>
            <a href='?page=sections&action=Delete&id={$SecDataDisplay[$i]['id']}'><img src='resources/images/delete.png'></a>
             <a href='?page=sections&action=Edit&id={$SecDataDisplay[$i]['id']}'><img src='resources/images/edit.png'></a>
        </td>
    
    </tr>
      ";
        
       
      
        
        
    }
    
    
    
    ?>
    
   
</table>