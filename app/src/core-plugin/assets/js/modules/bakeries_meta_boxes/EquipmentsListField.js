import Helper from './helpers.js';

class EquipmentsListField {
  html = {
    mainWrapList: document.createElement('div'), // mainWrapList

    wrapSearch: document.createElement('div'), // wrapSearch
    inputSearch: document.createElement('input'),
    iconWrapSearch: document.createElement('div'),
    iconSearch: document.createElement('svg'),

    wrapList: document.createElement('ul'), //wrapList
  };
}

export default EquipmentsListField;
