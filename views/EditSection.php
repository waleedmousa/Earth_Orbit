<!-- Edit  Section-->
    
    <!-- Sections: 
    Section id
    section name
    section status
    session locational
    section desc
    section date
    username -->
    

    
<form class="MainSettingsFrom Add"action="" method="post">
    <h1>Edit Sections</h1>

   
    <label>New Section:</label>
    <input type="text" name="section_name" placeholder="Section Title" value="<?php echo $recSecData['section_name']; ?>">
    
     <p>
    <label>Section Status:</label>
    <select name="section_status">
        <?php
        if($recSecData['section_status'] == "Active"){
            echo ' <option value="Active">Active</option>
                <option value="inActive">Inactive</option>';
        }  else {
            echo ' <option value="inActive">Inactive</option>
                <option value="Active">Active</option>';
        }
        ?>
       
    </select>
    </p>
    
    <p>
    <label>Section Location:</label>
     <select name="section_location">
            <?php
        if($recSecData['section_location'] == "Side"){
            echo ' <option value="Side">Side</option>
        <option value="Body">Body</option>';
        }  else {
            echo ' <<option value="Body">Body</option>
                option value="Side">Side</option>';
        }
        ?>
        
    </select>
    </p>
    <label>Section Description:</label>
    <textarea name="section_desc" placeholder="Section Description"><?php echo $recSecData['section_desc']; ?></textarea>
    
    <input class="btn-primary" type="submit" name="submit" value="Edit">
    
    
    
</form>

