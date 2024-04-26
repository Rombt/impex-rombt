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
  };

  constructor() {
    super();

    this.addClassToBlocks(this.html);

    this.html.bodyGroupPGroupName.textContent = 'Enter group name';
    this.html.bodyGroupPGroupDescription.textContent = 'Enter group description';
    this.html.publishGroup.textContent = 'publish this group';
    this.html.deleteGroup.textContent = 'delete this group';
    this.html.bodyGroupImg.src = '';
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

    return this;
  }

  createGroup(data) {
    this.group = this.html.wrapGroup.cloneNode(true);

    if (typeof data === 'number') {
      this.group.id = data;
    } else if (typeof data === 'object') {
      this.dataInput(data);
    }

    return this.group;
  }

  dataInput(data) {
    console.log('data = ', data);

    this.group.querySelector('input.body-group-input-group-name').value = data.name;
    this.group.querySelector('textarea.body-group-input-group-description').value = data.description;
    this.group.querySelector('img.body-group-img').src = data.img_url;
    this.group.querySelector('.body-group-img').id = data.img_id;
    this.group.id = data.id;
    this.group.dataset.pageId = data.page_id;
  }
}
