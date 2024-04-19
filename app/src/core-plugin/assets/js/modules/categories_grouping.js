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

window.onload = async function () {
  arr_categories = await getAllCategories();
  const mainWrapPage = document.querySelector('.rmbt-categories-grouping-wrap');
  const blocksPage = {
    wrapGroupsCategories: document.createElement('div'),
    wrapGroupCategories: document.createElement('div'),
    wrapDisplayCategories: document.createElement('div'),
    category: {
      wrapCategory: document.createElement('div'),
      bodyCategory: document.createElement('div'),
      titleCategory: document.createElement('h3'),
      descriptionCategory: document.createElement('p'),
      addToGroup: document.createElement('button'),
    },
  };

  addClassToBlocks(blocksPage);

  blocksPage.category.addToGroup.textContent = 'add to group';
  blocksPage.category.bodyCategory.append(blocksPage.category.titleCategory);
  blocksPage.category.bodyCategory.append(blocksPage.category.descriptionCategory);
  blocksPage.category.bodyCategory.append(blocksPage.category.addToGroup);
  blocksPage.category.wrapCategory.append(blocksPage.category.bodyCategory);

  arr_categories.forEach(objCategory => {
    console.log('objCategory = ', objCategory);
    let currentCat = blocksPage.category.wrapCategory.cloneNode(true);
    currentCat.querySelector('.title-category').textContent = objCategory.cat_name;
    currentCat.querySelector('.description-category').textContent = objCategory.category_description;
    blocksPage.wrapDisplayCategories.append(currentCat);
  });

  mainWrapPage.append(blocksPage.wrapGroupsCategories);
  mainWrapPage.append(blocksPage.wrapDisplayCategories);
};

function addClassToBlocks(objBlocks) {
  Object.entries(objBlocks).forEach(([name, node]) => {
    processNode(name, node);
  });

  function processNode(name, node) {
    if (node instanceof Element) {
      node.classList.add(genCssClassName(name));
    } else if (typeof node === 'object' && node !== null) {
      Object.entries(node).forEach(([childName, childNode]) => {
        processNode(childName, childNode);
      });
    }
  }
}

// -------------  helpers ---------------

/**
 * преобразует строку формат в CSS класса
 *
 */
function genCssClassName(str) {
  let result = '';

  for (let i = 0; i < str.length; i++) {
    const char = str[i];
    if (char.toUpperCase() === char) {
      result += `-${char.toLowerCase()}`;
    } else {
      result += char;
    }
  }
  return result;
}
