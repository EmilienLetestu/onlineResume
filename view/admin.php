
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
        <button value="<?php echo $skill->getId()?>" onclick="modifyForm(this.value)">modify</button>
    </div>
<?php endforeach; ?>
</div>

<div>
    <form action="<?php echo HOST.'modify-skill/'?>" method="post" id="modSkillForm">
        <input type="text" name="modSkillName" id="modSkillName">
        <input type="number" name="modSkillLevel" id="modSkillLevel">
        <button type="submit">Ajouter</button>
    </form>
</div>
