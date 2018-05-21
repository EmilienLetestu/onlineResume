

<div>
    <h1 class="pageTitle"><?php echo $data['title'] ;?></h1>
</div>

<div id="projectForm">
    <form method="post" action="<?php echo HOST.'add-project';?>" enctype="multipart/form-data">
        <input type="text" name="projectName" id="projectName">
        <input type="text" name="projectTech" id="projectTech">
        <textarea name="projectPitch" rows="10" cols="40" id="projectPitch"></textarea>
        <input type="url" name="projectUrl" id="projectUrl">
        <input type="file" name="projectPict" id="projectPict">
        <button type="submit">Ajouter</button>
    </form>
</div>
