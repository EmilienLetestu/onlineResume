
<div id="adminSkillList">
    <?php foreach ($data['skillList'] as $skill): ?>
    <div class="skill">
        <p id="skillName-<?php echo $skill->getId();?>">
            <?php echo $skill->getName();?>
        </p>
        <p id="skillLevel-<?php echo $skill->getId();?>">
            <?php echo $skill->getLevel();?>
        </p>
        <a href="<?php echo HOST.'delete-skill/'.$skill->getId();?>">delete</a>
        <button value="<?php echo $skill->getId()?>" id="triggerMod-<?php echo $skill->getId();?>" onclick="modifyForm(this.value)">modify skill</button>
    </div>
<?php endforeach; ?>
</div>

<button id="addSkill" onclick="addSkillForm()">add skill</button>

<div id="adminProjectList">
    <?php foreach ($data['projectList'] as $project): ?>
    <div class="project">
        <p>
           <?php echo $project->getName();?>
        </p>
        <p>
            <?php $project->getPictRef();?>
        </p>
        <p>
            <?php $project->getTech();?>
        </p>
        <a href="<?php echo HOST.'delete-project/'.$project->getName();?>">delete</a>
        <a href="<?php echo HOST.'edit-project/'.$project->getId();?>">overview</a>
    </div>
    <?php endforeach;?>
</div>

<button id="addProject" onclick="showForm('modalProjectForm')">add project</button>


<div id="modalSkillForm">
    <span class="close" onclick="closeForm('modalSkillForm')">x</span>
    <form action="" method="post" id="skillForm">
        <input type="text" name="skillName" id="skillName"/>
        <input type="number" name="skillLevel" id="skillLevel"/>
        <button type="submit">Ajouter</button>
    </form>
</div>

<div id="modalProjectForm">
    <form method="post" action="<?php echo HOST.'add-project';?>" enctype="multipart/form-data">
        <span class="close" onclick="closeForm('modalProjectForm')">x</span>
        <input type="text" name="projectName" id="projectName">
        <input type="hidden" name="originalName" value="">
        <input type="text" name="projectTech" id="projectTech">
        <textarea name="projectPitch" rows="10" cols="40" id="projectPitch"></textarea>
        <input type="url" name="projectUrl" id="projectUrl">
        <input type="file" name="projectPict" id="projectPict">
        <button type="submit">Ajouter</button>
    </form>
</div>