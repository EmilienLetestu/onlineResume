
function modifyForm(skillId){

    const form       = document.getElementById('modSkillForm');
    const skillName  = document.getElementById('modSkillName');
    const skillLevel = document.getElementById('modSkillLevel');

    form.action = form.action + skillId;

    const nameId  = 'skillName-' + skillId;
    const levelId = 'skillLevel-' + skillId;

    skillName.value  = document.getElementById(nameId).innerText;
    skillLevel.value = document.getElementById(levelId).innerText;

}