import { Root } from './Root.js';


export class Category extends Root {

    html = {
        wrapCategory: document.createElement('div'),
        bodyCategory: document.createElement('div'),
        quantityProducts: document.createElement('div'),
        titleCategory: document.createElement('h3'),
        descriptionCategory: document.createElement('p'),
        addToGroup: document.createElement('button'),
    }

    constructor(data) {

        super();

        this.data = data;

        this.addClassToBlocks(this.html);

        this.html.addToGroup.textContent = 'add to group';
        this.html.bodyCategory.append(this.html.titleCategory);
        this.html.wrapCategory.append(this.html.bodyCategory);
        this.html.bodyCategory.append(this.html.descriptionCategory);
        this.html.wrapCategory.append(this.html.quantityProducts);
        this.html.wrapCategory.append(this.html.addToGroup);

        return this;

    }


    createCategory() {
        this.category = this.html.wrapCategory.cloneNode(true);
        this.dataInput(this.data);

        return this.category;
    }


    dataInput(data) {
        this.category.id = data.term_id;
        this.category.querySelector('.title-category').textContent = data.cat_name;
        this.category.querySelector('.description-category').textContent = data.category_description;
        this.category.querySelector('.quantity-products').textContent = data.count;
    }


    listenerClick(e) {
        let target = e.target;

        if (target.classList.contains('add-to-group')) {
            // arr_Groups.forEach(objGroup => {
            //     if (objGroup.group.classList.contains('rmbt-active-group')) {
            //         activeGroup = objGroup.group;
            //         return;
            //     }
            // })

            if (!activeGroup) alert("Active group is absent");
            else {
                activeGroup.querySelector('.categories-field').append(activeCategory);
                let but = activeCategory.querySelector('.add-to-group');
                but.classList.remove('add-to-group')
                but.classList.add('remove-from-group');
                but.textContent = '';
            }
        }

    }


}