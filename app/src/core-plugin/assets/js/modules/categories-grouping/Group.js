import { Root } from './Root.js';

export class Group extends Root {

    html = {
        wrapGroup: document.createElement('div'),
        bodyGroup: document.createElement('div'),
        bodyGroupText: document.createElement('div'),

        bodyGroupWrapImg: document.createElement('div'),
        bodyGroupImg: document.createElement('img'),
        bodyGroupAddImg: document.createElement('button'),

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

        this.html.bodyGroupImg.src = '';

        // this.html.bodyGroupAddImg.id = 'choose-image-button'
        this.html.bodyGroupAddImg.textContent = 'Выбрать картинку';
        this.html.bodyGroupAddImg.classList.add('rmbt-add-media');



        this.html.bodyGroupName.append(this.html.bodyGroupPGroupName);
        this.html.bodyGroupName.append(this.html.bodyGroupInputGroupName);

        this.html.bodyGroupDescription.append(this.html.bodyGroupPGroupDescription);
        this.html.bodyGroupDescription.append(this.html.bodyGroupInputGroupDescription);


        this.html.bodyGroupText.append(this.html.bodyGroupName);
        this.html.bodyGroupText.append(this.html.bodyGroupDescription);

        this.html.controlsGroup.append(this.html.deleteGroup);
        this.html.controlsGroup.append(this.html.publishGroup);
        this.html.bodyGroupText.append(this.html.controlsGroup);


        this.html.bodyGroupWrapImg.append(this.html.bodyGroupImg);
        this.html.bodyGroupWrapImg.append(this.html.bodyGroupAddImg);


        this.html.bodyGroup.append(this.html.bodyGroupText);
        this.html.bodyGroup.append(this.html.bodyGroupWrapImg);



        this.html.wrapGroup.append(this.html.bodyGroup);
        this.html.wrapGroup.append(this.html.categoriesField);

        // this.group = this.createGroup(this.html);



        return this;

    }


    createGroup() {
        this.group = this.html.wrapGroup.cloneNode(true);


        return this.group;
    }

    delGroup(group) {
        const deleteGroup = group.querySelector('.delete-group');
        deleteGroup.addEventListener('click', e => {
            const currentGroup = e.target.closest('.wrap-group');
            currentGroup.remove();
        })
    }

    // listenClick() {
    //     this.group.addEventListener('click', e => {
    //         const target = e.target;
    //         this.activeGroup = target.closest('.wrap-group');

    //         // console.log("this.activeGroup = ", this.activeGroup);
    //         if (this.activeGroup.classList.contains('rmbt-active-group')) {

    //             this.procDeactivationGroup.call(this);
    //         } else {
    //             this.procActiveGroup.call(this);
    //         }



    //     })
    // }

    // activateGroup() {
    //     this.activeGroup.classList.add('rmbt-active-group')

    // }

    // deactivateGroup() {
    //     this.activeGroup.classList.remove('rmbt-active-group')
    // }


}