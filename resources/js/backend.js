const upArrowCategory = document.getElementById('up-arrow-category');
const downArrowCategory = document.getElementById("down-arrow-category");
const tableCategory = document.getElementById("table-category");

downArrowCategory.addEventListener('click', () =>{
    tableCategory.classList.remove('inactive');
    upArrowCategory.classList.remove('inactive');
    downArrowCategory.classList.add('inactive');
});

upArrowCategory.addEventListener('click', () =>{
    tableCategory.classList.add('inactive');
    upArrowCategory.classList.add('inactive');
    downArrowCategory.classList.remove('inactive');
});

const upArrowAnimals = document.getElementById('up-arrow-animals');
const downArrowAnimals = document.getElementById("down-arrow-animals");
const tableAnimals = document.getElementById("table-animals");

downArrowAnimals.addEventListener('click', () =>{
    tableAnimals.classList.remove('inactive');
    upArrowAnimals.classList.remove('inactive');
    downArrowAnimals.classList.add('inactive');
});

upArrowAnimals.addEventListener('click', () =>{
    tableAnimals.classList.add('inactive');
    upArrowAnimals.classList.add('inactive');
    downArrowAnimals.classList.remove('inactive');
});





