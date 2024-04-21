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


/*

    при нажатии на кнопку "publish this group" на сервер должен быть отправлен объект вида:
        group = {
            id_group,
            gategories:[
                id_categiry-1,
                id_categiry-2,
            ]
        }

*/


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

    arr_categories.forEach(el => {
        let objCategory = new Category(el);

        let category = objCategory.createCategory();
        category.addEventListener('click', e => {

            objCategory.listenerClick(e)
        })

        wrapDisplayCategories.append(category);
    });

    mainWrapPage.append(wrapGroupsCategories);
    mainWrapPage.append(wrapDisplayCategories);

    /*---------- functionality ----------*/




    document.querySelector('#add_new_group')
        .addEventListener('click', e => {
            let obj_group = new Group();
            let group = obj_group.createGroup();
            wrapGroupsCategories.append(group);
            arr_Groups.push(obj_group)



            arr_Groups.forEach(obj_group => {
                obj_group.group.addEventListener('click', e => {
                    obj_group.listenerClick(e);
                })
            })


        })




};