export class Group {

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



    constructor() {


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