import { Root } from './Root.js';

export class Group extends Root {

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

        super();

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
        this.listenClick();


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

    listenClick() {
        this.group.addEventListener('click', e => {
            const target = e.target;
            this.activeGroup = target.closest('.wrap-group');
            this.procActiveGroup.call(this);
        })
    }

    procActiveGroup() {
        this.activeGroup.classList.add('rmbt-active-group')

    }

}