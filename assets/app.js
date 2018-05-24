/**
 *
 * @param skillId
 */
function modifyForm(skillId){

    const form       = document.getElementById('skillForm');
    const skillName  = document.getElementById('skillName');
    const skillLevel = document.getElementById('skillLevel');

    showForm('modalSkillForm');

    //will have to be updated on prod
    form.action = '/onlineResume/modify-skill/' + skillId;

    const nameId  = 'skillName-' + skillId;
    const levelId = 'skillLevel-' + skillId;

    skillName.value  = document.getElementById(nameId).innerText;
    skillLevel.value = document.getElementById(levelId).innerText;

}

function editProjectForm() {
    var edit     = document.querySelectorAll('*[id^="edit"]');

    for(var i = 0; i < edit.length; i++){

        var inputId = edit[i].id.split('_');
        var hiddenInput = document.getElementById('original_' + inputId[1]);

       if (hiddenInput.value !== null && hiddenInput.id !== 'original_pict'){

           document.getElementById(edit[i].id).value = hiddenInput.value;
       }

    }
}

function addSkillForm(){

    const form       = document.getElementById('skillForm');
    showForm('modalSkillForm');
    form.action = '/onlineResume/add-skill';

}


/**
 * @param modal
 * @returns {string}
 */
function showForm(modal) {

   const modalForm = document.getElementById(modal);

   return modalForm.style.display = "block";
}


/**
 *
 * @param modal
 * @returns {string}
 */
function closeForm(modal){

    const modalForm = document.getElementById(modal);

    return modalForm.style.display = "none";
}
