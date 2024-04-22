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
            arr_Groups.push(obj_group);
        } else if (target.classList.contains('add-to-group')) {
            arr_Groups.forEach(objGroup => {
                if (objGroup.group.classList.contains('rmbt-active-group')) {
                    activeGroup = objGroup.group;
                    return;
                }
            });

            if (!activeGroup) alert('Active group is absent');
            else {
                activeGroup.querySelector('.categories-field').append(activeCategory);
                let but = activeCategory.querySelector('.add-to-group');
                but.classList.remove('add-to-group');
                but.classList.add('remove-from-group');
                but.textContent = '';
            }
        } else if (target.classList.contains('remove-from-group')) {
            wrapDisplayCategories.prepend(activeCategory);
            let but = activeCategory.querySelector('.remove-from-group');
            but.classList.remove('remove-from-group');
            but.classList.add('add-to-group');
            but.textContent = 'add to group';
        } else if (activeGroup) {
            let nl_activeGroups = document.querySelectorAll('.rmbt-active-group');
            if (nl_activeGroups.length > 0) {
                nl_activeGroups.forEach(el => el.classList.remove('rmbt-active-group'));
            }
            if (activeGroup.classList.contains('rmbt-active-group')) {
                activeGroup.classList.remove('rmbt-active-group');
            } else {
                activeGroup.classList.add('rmbt-active-group');
            }

            if (target.classList.contains('publish-group')) {
                /*
                  let group = {
                    id,
                    name,
                    img_id,
                    description,
                    categories: [],
                  };
                */
                let group = {};

                group.name = activeGroup.querySelector('.body-group-input-group-name').value;
                group.description = activeGroup.querySelector('.body-group-input-group-description').value;
                let arr_categories = [...activeGroup.querySelectorAll('.wrap-category')];
                group.categories = arr_categories.map(cat => {
                    return cat.id;
                });

                console.log('group = ', group);

                let response = fetch(ajaxurl + '?action=get_obj_category', {
                    method: 'POST',
                    credentials: 'same-origin', // include, *same-origin, omit
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(group), // body data type must match "Content-Type" header
                });
            }
            if (target.classList.contains('rmbt-add-media')) {



                jQuery(document).ready(function($) {
                    // $('#choose-image-button').click(function(event) {
                    // event.preventDefault();

                    // Открыть медиабиблиотеку WordPress
                    var media_frame = wp.media({
                        title: 'Выберите картинку',
                        multiple: false,
                        library: {
                            type: 'image'
                        }
                    });

                    media_frame.on('select', function() {
                        var attachment = media_frame.state().get('selection').first().toJSON();
                        var imageUrl = attachment.url;

                        $('.body-group-img').attr('src', imageUrl);
                        $('.body-group-img').show();
                    });

                    media_frame.open();
                    // });
                });
            }
        }
    });
};