import { Category } from './Category.js';
import { Group } from './Group.js';

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
  /*---------- data ----------*/
  const Data = await getData();

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

  document.addEventListener('click', e => {
    let target = e.target;
    let activeGroup = target.closest('.wrap-group') || false;
    let activeCategory = target.closest('.wrap-category');
    let lastCategoryIdOnPage = 0;

    if (target === document.querySelector('#add_new_group')) {
      fetch(ajaxurl + '?action=get_last_category_id', {
        method: 'POST',
        credentials: 'same-origin',
        headers: {
          'Content-Type': 'application/json',
        },
        body: '',
      })
        .then(result => {
          return result.json();
        })
        .then(body => {
          let lastCategoryIdOnBd = body.data;
          if (!lastCategoryIdOnBd) {
            lastCategoryIdOnPage = 1;
          } else {
            if (lastCategoryIdOnPage != lastCategoryIdOnBd) {
              let nl_Groups = wrapGroupsCategories.querySelectorAll('.wrap-group');
              lastCategoryIdOnPage = nl_Groups.length + 1;
            } else {
              lastCategoryIdOnPage = lastCategoryIdOnBd++;
            }
          }
          let obj_currentGroup = new Group();
          let currentGroup = obj_currentGroup.createGroup(lastCategoryIdOnPage);
          wrapGroupsCategories.append(currentGroup);
          // wrapDisplayCategories.style.maxHeight = wrapGroupsCategories.clientHeight + 'px';
        });
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
          var $_imgGroup = jQuery(activeGroup).find('.body-group-img');
          $_imgGroup.attr('src', attachment.url);
          $_imgGroup.attr('id', attachment.id);
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
        let group = { nonce: rmbtCategoriesGrouping.rmbtCatGropingNonce };
        group.page_id = activeGroup.dataset.pageId;
        group.id = activeGroup.id;
        group.name = activeGroup.querySelector('.body-group-input-group-name').value;
        group.description = activeGroup.querySelector('.body-group-input-group-description').value;
        group.img_url = activeGroup.querySelector('.body-group-img').src || '#';
        group.img_id = activeGroup.querySelector('.body-group-img').id || 0;

        let arr_categories = [...activeGroup.querySelectorAll('.wrap-category')];
        group.categories = arr_categories.map(cat => {
          return cat.id;
        });

        let response = fetch(ajaxurl + '?action=publish_group', {
          method: 'POST',
          credentials: 'same-origin',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(group),
        })
          .then(result => {
            return result.json();
          })
          .then(body => {
            let update_group = body.data;
            if (update_group.page_id) {
              activeGroup.dataset.pageId = update_group.page_id;
            } else {
              activeGroup.dataset.pageId = 0;
            }
          });
      }
      if (target.classList.contains('delete-group')) {
        let arr_categories = activeGroup.querySelectorAll('.wrap-category');
        arr_categories.forEach(cat => {
          let but = cat.querySelector('.remove-from-group');
          but.classList.remove('remove-from-group');
          but.classList.add('add-to-group');
          but.textContent = 'add to group';

          wrapDisplayCategories.prepend(cat);
        });
        activeGroup.remove();
        let data = {
          group_id: activeGroup.id,
          nonce: rmbtCategoriesGrouping.rmbtCatGropingNonce,
        };
        let response = fetch(ajaxurl + '?action=rmbt_del_group', {
          method: 'POST',
          credentials: 'same-origin',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(data),
        });
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
