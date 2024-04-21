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


    /*??

        arr_Groups = [
            Group,
        ];

        Group = {
            id: rmbt-gc-1,
        }

    */


    /*---------- data ----------*/
    const arr_categories = await getAllCategories();

    /*---------- structure ----------*/

    const mainWrapPage = document.querySelector('.rmbt-categories-grouping-wrap');
    const wrapGroupsCategories = document.createElement('div');
    wrapGroupsCategories.classList.add('wrap-groups-categories');
    const wrapDisplayCategories = document.createElement('div');
    wrapDisplayCategories.classList.add('wrap-display-categories');


    arr_categories.forEach(objCategory => {
        let currentCat = new Category(objCategory);
        wrapDisplayCategories.append(currentCat);
    });

    mainWrapPage.append(wrapGroupsCategories);
    mainWrapPage.append(wrapDisplayCategories);

    /*---------- functionality ----------*/

    document.addEventListener('click', e => {
        const target = e.target;

        switch (target) {

            case document.querySelector('#add_new_group'):
                let group = new Group();
                wrapGroupsCategories.append(group);
                arr_Groups.push(group);

                break

                // case :
                //     break

                // defoult:

        }
    })







};