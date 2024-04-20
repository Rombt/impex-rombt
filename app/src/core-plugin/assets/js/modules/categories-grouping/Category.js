export class Category {

    html = {
        wrapCategory: document.createElement('div'),
        bodyCategory: document.createElement('div'),
        quantityProducts: document.createElement('div'),
        titleCategory: document.createElement('h3'),
        descriptionCategory: document.createElement('p'),
        addToGroup: document.createElement('button'),
    }

    constructor() {

        this.addClassToBlocks(this.html);

        this.html.addToGroup.textContent = 'add to group';
        this.html.bodyCategory.append(this.html.titleCategory);
        this.html.wrapCategory.append(this.html.bodyCategory);
        this.html.bodyCategory.append(this.html.descriptionCategory);
        this.html.wrapCategory.append(this.html.quantityProducts);
        this.html.wrapCategory.append(this.html.addToGroup);

        this.category = this.createCategory(this.html);

        return this.category;
    }


    createCategory(html) {
        let group = html.wrapCategory.cloneNode(true);

        return group;
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