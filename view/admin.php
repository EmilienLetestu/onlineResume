
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

<div id="modalSkillForm">
    <span class="close" onclick="closeForm('modalSkillForm')">x</span>
    <form action="" method="post" id="skillForm">
        <input type="text" name="skillName" id="skillName">
        <input type="number" name="skillLevel" id="skillLevel">
        <button type="submit">Ajouter</button>
    </form>
</div>
