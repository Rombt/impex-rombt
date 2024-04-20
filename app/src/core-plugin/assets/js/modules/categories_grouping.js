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
    arr_categories = await getAllCategories();
    const mainWrapPage = document.querySelector('.rmbt-categories-grouping-wrap');
    const blocksPage = {
        wrapDisplayCategories: document.createElement('div'),
        category: {
            wrapCategory: document.createElement('div'),
            bodyCategory: document.createElement('div'),
            quantityProducts: document.createElement('div'),
            titleCategory: document.createElement('h3'),
            descriptionCategory: document.createElement('p'),
            addToGroup: document.createElement('button'),
        },
        wrapGroupsCategories: document.createElement('div'),
        group: {
            wrapGroup: document.createElement('div'),
            bodyGroup: document.createElement('div'),
            bodyGroupName: document.createElement('div'),
            bodyGroupDescription: document.createElement('div'),
            controlsGroup: document.createElement('div'),
            publishGroup: document.createElement('button'),
            deleteGroup: document.createElement('button'),
            bodyGroupPGroupName: document.createElement('p'), //todo в имя свойства добавить ключевое слово Tag и в genCssClassName(str) и в addClassToBlocks(objBlocks) пропускать имена свойств с этим ключём
            bodyGroupInputGroupName: document.createElement('input'), //todo в имя свойства добавить ключевое слово Tag и в genCssClassName(str) и в addClassToBlocks(objBlocks) пропускать имена свойств с этим ключём
            bodyGroupPGroupDescription: document.createElement('p'), //todo в имя свойства добавить ключевое слово Tag и в genCssClassName(str) и в addClassToBlocks(objBlocks) пропускать имена свойств с этим ключём
            bodyGroupInputGroupDescription: document.createElement('textarea'), //todo в имя свойства добавить ключевое слово Tag и в genCssClassName(str) и в addClassToBlocks(objBlocks) пропускать имена свойств с этим ключём
            categoriesField: document.createElement('div'),


        },
    };

    addClassToBlocks(blocksPage);

    blocksPage.category.addToGroup.textContent = 'add to group';
    blocksPage.category.bodyCategory.append(blocksPage.category.titleCategory);
    blocksPage.category.wrapCategory.append(blocksPage.category.bodyCategory);
    blocksPage.category.bodyCategory.append(blocksPage.category.descriptionCategory);
    blocksPage.category.wrapCategory.append(blocksPage.category.quantityProducts);
    blocksPage.category.wrapCategory.append(blocksPage.category.addToGroup);

    arr_categories.forEach(objCategory => {
        // console.log('objCategory = ', objCategory);
        let currentCat = blocksPage.category.wrapCategory.cloneNode(true);
        currentCat.querySelector('.title-category').textContent = objCategory.cat_name;
        currentCat.querySelector('.description-category').textContent = objCategory.category_description;
        currentCat.querySelector('.quantity-products').textContent = objCategory.count;
        blocksPage.wrapDisplayCategories.append(currentCat);
    });

    blocksPage.group.bodyGroupPGroupName.textContent = 'Enter group name';
    blocksPage.group.bodyGroupPGroupDescription.textContent = 'Enter group description';
    blocksPage.group.publishGroup.textContent = 'publish this group';
    blocksPage.group.deleteGroup.textContent = 'delete this group';

    blocksPage.group.bodyGroupName.append(blocksPage.group.bodyGroupPGroupName);
    blocksPage.group.bodyGroupName.append(blocksPage.group.bodyGroupInputGroupName);
    blocksPage.group.bodyGroupDescription.append(blocksPage.group.bodyGroupPGroupDescription);
    blocksPage.group.bodyGroupDescription.append(blocksPage.group.bodyGroupInputGroupDescription);
    blocksPage.group.bodyGroup.append(blocksPage.group.bodyGroupName);
    blocksPage.group.bodyGroup.append(blocksPage.group.bodyGroupDescription);

    blocksPage.group.controlsGroup.append(blocksPage.group.deleteGroup);
    blocksPage.group.controlsGroup.append(blocksPage.group.publishGroup);
    blocksPage.group.bodyGroup.append(blocksPage.group.controlsGroup);


    blocksPage.group.wrapGroup.append(blocksPage.group.bodyGroup);
    blocksPage.group.wrapGroup.append(blocksPage.group.categoriesField);
    blocksPage.wrapGroupsCategories.append(blocksPage.group.wrapGroup);

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

    console.log(result);

    return result;
}