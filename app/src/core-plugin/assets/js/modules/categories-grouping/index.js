import { Category } from './Category.js';
import { Group } from './Group.js';

// let arr_categories = [];

async function getData() {
  let response = await fetch(ajaxurl + '?action=get_data_categories');
  const result = await response.json();
  if (result.success) {
    return result.data;
  } else {
    // here is the handling of the situation when there are no categories
  }
}

window.onload = async function () {
  let arr_Groups = [];

  /*---------- data ----------*/
  const Data = await getData();

  console.log('Data = ', Data);

  const arr_categories = Data.categories;
  const arr_groups = Data.groups;

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
    let exit = false;

    Data.groups.forEach(obj_Group => {
      if (exit === true) {
        return exit;
      }

      obj_Group.categories.forEach(idCatInGroup => {
        if (idCatInGroup == objCategory.cat_ID) {
          exit = true;
          return exit;
        } else {
          return;
        }
      });
    });
    if (exit === false) {
      let obj_currentCat = new Category();
      let currentCat = obj_currentCat.createCategory(objCategory);
      wrapDisplayCategories.append(currentCat);
    }
  });

  arr_groups.forEach(objGroup => {
    let obj_currentGroup = new Group();
    let currentGroup = obj_currentGroup.createGroup(objGroup);
    objGroup.categories.forEach(idCat => {
      arr_categories.forEach(obj_Cat => {
        if (obj_Cat.cat_ID == idCat) {
          let obj_currentCat = new Category();
          let currentCat = obj_currentCat.createCategory(obj_Cat, 'group');
          currentGroup.querySelector('.categories-field').append(currentCat);
        }
      });
    });

    wrapGroupsCategories.append(currentGroup);
  });

  mainWrapPage.append(wrapGroupsCategories);
  mainWrapPage.append(wrapDisplayCategories);

  /*---------- functionality ----------*/
  let urlImgGroup;
  let idImgGroup;

  document.addEventListener('click', e => {
    let target = e.target;
    let activeGroup = target.closest('.wrap-group') || false;
    let activeCategory = target.closest('.wrap-category');

    if (target === document.querySelector('#add_new_group')) {
      let obj_currentGroup = new Group();
      let currentGroup = obj_currentGroup.createGroup();
      wrapGroupsCategories.append(currentGroup);

      arr_Groups.push(obj_currentGroup);
    } else if (target.classList.contains('add-to-group')) {
      let activeGroup = document.querySelector('.rmbt-active-group');
      if (!activeGroup) alert('Active group is absent');
      else {
        addCatToGroup(activeGroup, activeCategory);
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

      if (target.classList.contains('rmbt-add-media')) {
        var media_frame = wp.media({
          title: 'Select image',
          multiple: false,
          library: {
            type: 'image',
          },
        });

        media_frame.on('select', function () {
          var attachment = media_frame.state().get('selection').first().toJSON();
          var imageUrl = attachment.url;
          var $_imgGroup = jQuery(activeGroup).find('.body-group-img');
          urlImgGroup = imageUrl;
          idImgGroup = attachment.id;
          $_imgGroup.attr('src', imageUrl);
          $_imgGroup.show();
        });
        media_frame.open();
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
        group.img_url = urlImgGroup;
        group.img_id = idImgGroup;
        let arr_categories = [...activeGroup.querySelectorAll('.wrap-category')];
        group.categories = arr_categories.map(cat => {
          return cat.id;
        });

        let response = fetch(ajaxurl + '?action=get_obj_category', {
          method: 'POST',
          credentials: 'same-origin', // include, *same-origin, omit
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(group), // body data type must match "Content-Type" header
        });
      }
      if (target.classList.contains('delete-group')) {
      }
    }
  });
};

function addCatToGroup(activeGroup, activeCategory) {
  activeGroup.querySelector('.categories-field').append(activeCategory);
  let but = activeCategory.querySelector('.add-to-group');
  but.classList.remove('add-to-group');
  but.classList.add('remove-from-group');
  but.textContent = '';
}
