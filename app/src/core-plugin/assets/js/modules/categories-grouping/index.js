import { Category } from './Category.js';
import { Group } from './Group.js';




// let arr_categories = [];

async function getAllCategories() {
    let response = await fetch(ajaxurl + '?action=get_all_categories');
    const result = await response.json();
    if (result.success) {
        return result.data;
    } else {
        // here is the handling of the situation when there are no categories
    }
}

window.onload = async function() {

    let arr_Groups = [];


    /*---------- data ----------*/
    const arr_categories = await getAllCategories();


    /*---------- structure ----------*/

    const mainWrapPage = document.querySelector('.rmbt-categories-grouping-wrap');
    const wrapGroupsCategories = document.createElement('div');
    wrapGroupsCategories.classList.add('wrap-groups-categories');
    const wrapDisplayCategories = document.createElement('div');
    wrapDisplayCategories.classList.add('wrap-display-categories');
    const wrapQuantityCategories = document.createElement('div');
    wrapQuantityCategories.classList.add('wrap-quantity-categories');
    mainWrapPage.prepend(wrapQuantityCategories);
    wrapQuantityCategories.textContent = 'Total categories:  ' + arr_categories.length;

    arr_categories.forEach(objCategory => {
        let currentCat = new Category(objCategory);
        wrapDisplayCategories.append(currentCat);
    });

    mainWrapPage.append(wrapGroupsCategories);
    mainWrapPage.append(wrapDisplayCategories);

    /*---------- functionality ----------*/

    document.addEventListener('click', e => {
        let target = e.target;
        let activeGroup = target.closest('.wrap-group') || false;
        let activeCategory = target.closest('.wrap-category');



        if (target === document.querySelector('#add_new_group')) {
            let obj_group = new Group();
            let group = obj_group.createGroup();
            wrapGroupsCategories.append(group);
            arr_Groups.push(obj_group)

        } else if (target.classList.contains('add-to-group')) {
            arr_Groups.forEach(objGroup => {
                if (objGroup.group.classList.contains('rmbt-active-group')) {
                    activeGroup = objGroup.group;
                    return;
                }
            })

            if (!activeGroup) alert("Active group is absent");
            else {
                activeGroup.querySelector('.categories-field').append(activeCategory);
                let but = activeCategory.querySelector('.add-to-group');
                but.classList.remove('add-to-group')
                but.classList.add('remove-from-group');
                but.textContent = '';
            }
        } else if (target.classList.contains('remove-from-group')) {
            wrapDisplayCategories.prepend(activeCategory);
            let but = activeCategory.querySelector('.remove-from-group');
            but.classList.remove('remove-from-group')
            but.classList.add('add-to-group');
            but.textContent = 'add to group'

        } else if (activeGroup) {
            let nl_activeGpoups = document.querySelectorAll('.rmbt-active-group');
            if (nl_activeGpoups.length > 0) {
                nl_activeGpoups.forEach(el => el.classList.remove('rmbt-active-group'))
            }
            if (activeGroup.classList.contains('rmbt-active-group')) {
                activeGroup.classList.remove('rmbt-active-group');
            } else {
                activeGroup.classList.add('rmbt-active-group');
            }
        }
    })
};