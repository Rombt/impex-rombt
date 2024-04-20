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


    /*

        arr_Groups = [
            Group,
        ];

        Group = {
            id: rmbt-gc-1,
        }

    */


    /*---------- data ----------*/
    arr_categories = await getAllCategories();

    /*---------- structure ----------*/

    const mainWrapPage = document.querySelector('.rmbt-categories-grouping-wrap');
    const wrapGroupsCategories = document.createElement('div');
    wrapGroupsCategories.classList.add('wrap-groups-categories');
    const wrapDisplayCategories = document.createElement('div');
    wrapDisplayCategories.classList.add('wrap-display-categories');

    const blocksPage = {
        category: {
            wrapCategory: document.createElement('div'),
            bodyCategory: document.createElement('div'),
            quantityProducts: document.createElement('div'),
            titleCategory: document.createElement('h3'),
            descriptionCategory: document.createElement('p'),
            addToGroup: document.createElement('button'),
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
        wrapDisplayCategories.append(currentCat);
    });


    mainWrapPage.append(wrapGroupsCategories);
    mainWrapPage.append(wrapDisplayCategories);

    /*---------- functionality ----------*/

    const but_addNewGroup = document.querySelector('#add_new_group');
    but_addNewGroup.addEventListener('click', e => {
        let group = new Group(mainWrapPage);
        wrapGroupsCategories.append(group);

        arr_Groups.push(group);
    })

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

    // console.log(result);

    return result;
}


class Group {

    html = {
        wrapGroup: document.createElement('div'),
        bodyGroup: document.createElement('div'),
        bodyGroupName: document.createElement('div'),
        bodyGroupDescription: document.createElement('div'),
        controlsGroup: document.createElement('div'),
        publishGroup: document.createElement('button'),
        deleteGroup: document.createElement('button'),
        bodyGroupPGroupName: document.createElement('p'),
        bodyGroupInputGroupName: document.createElement('input'),
        bodyGroupPGroupDescription: document.createElement('p'),
        bodyGroupInputGroupDescription: document.createElement('textarea'),
        categoriesField: document.createElement('div'),
    }



    constructor(mainWrapPage) {


        this.addClassToBlocks(this.html);


        this.html.bodyGroupPGroupName.textContent = 'Enter group name';
        this.html.bodyGroupPGroupDescription.textContent = 'Enter group description';
        this.html.publishGroup.textContent = 'publish this group';
        this.html.deleteGroup.textContent = 'delete this group';
        this.html.bodyGroupName.append(this.html.bodyGroupPGroupName);
        this.html.bodyGroupName.append(this.html.bodyGroupInputGroupName);
        this.html.bodyGroupDescription.append(this.html.bodyGroupPGroupDescription);
        this.html.bodyGroupDescription.append(this.html.bodyGroupInputGroupDescription);
        this.html.bodyGroup.append(this.html.bodyGroupName);
        this.html.bodyGroup.append(this.html.bodyGroupDescription);
        this.html.controlsGroup.append(this.html.deleteGroup);
        this.html.controlsGroup.append(this.html.publishGroup);
        this.html.bodyGroup.append(this.html.controlsGroup);
        this.html.wrapGroup.append(this.html.bodyGroup);
        this.html.wrapGroup.append(this.html.categoriesField);

        this.group = this.createGroup(this.html);


        return this.group;

    }


    createGroup(html) {
        let group = html.wrapGroup.cloneNode(true);

        this.delGroup(group);

        return group;
    }

    delGroup(group) {
        const deleteGroup = group.querySelector('.delete-group');
        deleteGroup.addEventListener('click', e => {
            const currentGroup = e.target.closest('.wrap-group');
            currentGroup.remove();
        })
    }

    addClassToBlocks(objBlocks) {
        Object.entries(objBlocks).forEach(([name, node]) => {
            processNode.call(this, name, node);
        });

        function processNode(name, node) {
            if (node instanceof Element) {
                node.classList.add(this.genCssClassName(name));
            } else if (typeof node === 'object' && node !== null) {
                Object.entries(node).forEach(([childName, childNode]) => {
                    processNode(childName, childNode);
                });
            }
        }
    }



    /**
     * преобразует строку формат в CSS класса
     *
     */
    genCssClassName(str) {
        let result = '';

        for (let i = 0; i < str.length; i++) {
            const char = str[i];
            if (char.toUpperCase() === char) {
                result += `-${char.toLowerCase()}`;
            } else {
                result += char;
            }
        }

        // console.log(result);

        return result;
    }


}