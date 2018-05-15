
<div id="adminSkillList">
    <?php foreach ($data['skillList'] as $skill): ?>
    <div class="skill">
        <p>
            <?php echo $skill->getName();?>
        </p>
        <p>
            <?php echo $skill->getLevel();?>
        </p>
        <a href="<?php echo HOST.'delete-skill/'.$skill->getId();?>">delete</a>
    </div>
<?php endforeach; ?>
</div>
