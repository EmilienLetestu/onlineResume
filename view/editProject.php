<div>
    <form method="post" action="<?php echo HOST.'update-project/'.$data['project']->getId();?>" enctype="multipart/form-data">
        <input type="text" name="editName" id="edit_name">
        <input type="hidden" name="originalName" id="original_name" value="<?php echo $data['project']->getName();?>">
        <input type="text" name="editTech" id="edit_tech">
        <input type="hidden" name="original_tech" id="original_tech" value="<?php echo $data['project']->getTech();?>">
        <textarea name="editPitch" rows="10" cols="40" id="edit_pitch"></textarea>
        <input type="hidden" name="original_pitch" id="original_pitch" value="<?php echo $data['project']->getPitch();?>">
        <input type="url" name="editUrl" id="edit_url">
        <input type="hidden" name="originalUrl" id="original_url" value="<?php echo $data['project']->getUrl();?>">
        <input type="file" name="editPict" id="edit_pict">
        <input type="hidden" name="originalPict" id="original_pict" value="<?php echo $data['project']->getPictRef();?>">
        <button type="submit">Ajouter</button>
    </form>
</div>

<script type="text/javascript">
    editProjectForm();
</script>