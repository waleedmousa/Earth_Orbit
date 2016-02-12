<!-- Add New Section-->
    
    <!-- Sections: 
    Section id
    section name
    section status
    session locational
    section desc
    section date
    username -->
    

    
<form class="MainSettingsFrom Add"action="" method="post">
    <h1>Add New Section</h1>

   
    <label>New Section:</label>
    <input type="text" name="section_name" placeholder="Section Title">
    
     <p>
    <label>Section Status:</label>
    <select name="section_status">
        <option value="Active">Active</option>
        <option value="inActive">Inactive</option>
    </select>
    </p>
    
    <p>
    <label>Section Location:</label>
     <select name="section_location">
        <option value="Side">Side</option>
        <option value="Body">Body</option>
    </select>
    </p>
    <label>Section Description:</label>
    <textarea name="section_desc" placeholder="Section Description"></textarea>
    
    <input class="btn-primary" type="submit" name="submit" value="Add">
    
    
    
</form>

