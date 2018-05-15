<h1 id="test"><?php echo $data['title']?></h1>

<h2><?php echo $data['subtitle']?></h2>

<div id="skillList">
    <?php foreach ($data['skillList'] as $skill): ?>
        <div class="skill">
            <p>
                <?php echo $skill->getName();?>
            </p>
            <p>
                <?php echo $skill->getLevel();?>
            </p>
        </div>
    <?php endforeach; ?>
</div>