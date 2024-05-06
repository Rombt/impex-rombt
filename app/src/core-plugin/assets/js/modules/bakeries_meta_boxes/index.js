import wpMedia from '../wp_media.js';
import Helper from './helpers.js';
import EquipmentsField from './EquipmentsField .js';
import EquipmentsListField from './EquipmentsListField.js';
import FactoryCards from './FactoryCards.js';
// import Mediator from './Mediator.js';

function bakeriesMetaBoxes() {

    /*
      ++ получаю массив единиц оборудования
      ++ с помощью объекта класса фабрика, на входе получает массив всех единиц оборудования, создаю инстанс класса CardEquipment для каждого элемента массива
      ++ слаживаю инстансы класса CardEquipment в массив
      отображаю карточки в поле listEquipments
      создать инстанс класса посредник 
      в посреднике прослшиваю клики во всём документе 
      при каждом клике в посреднике определить кто должен реагровать на клик и передать необходимую информацию исполнителю 
      при клике на кнопку "add" посредник получает id карточки находит инстанс этой карточки в массиве переносит карточку в поле listEquipments
      при клике на кнопку "опубликовать" поличить id всех карточек из поля listEquipment 
    */

    const mainWrap = document.querySelector('.bakery-data-block');
    if (!mainWrap) return false;


    async function getData() {
        let response = await fetch(ajaxurl + '?action=get_data_bakery_equipments');
        const result = await response.json();
        if (result.success) {
            return result.data;
        } else {
            // here is the handling of the situation when there are no categories
        }
    };


    window.onload = async function () {

        // const Data = await getData();
        // console.log("Data = ", Data);

        const arrCards = new FactoryCards(await getData());

        if (arrCards.length == 0) return false;

        const html = {
            mainWrapListEquipmentsSrc: document.createElement('div'),
            listEquipmentsSrc: document.createElement('ul'),
            wrapSearchEquipment: document.createElement('div'),
            inputSearchEquipment: document.createElement('input'),
            wrapIconSearchEquipment: document.createElement('div'),
            iconSearchEquipment: document.createElement('svg'),

            mainWrapListEquipmentsDist: document.createElement('div'),
            listEquipmentsDist: document.createElement('ul'),
            butonPublish: document.createElement('button'),

            technologicalCard: document.createElement('div'),
            butonSelectImg: document.createElement('button'),
            imgTechnologicalCard: document.createElement('img'),
        }
        Helper.addClassToBlocks(html);

        arrCards.forEach(card => html.listEquipmentsSrc.append(card.html.cardEquipment))

        html.technologicalCard.append(html.butonSelectImg);
        html.technologicalCard.append(html.imgTechnologicalCard);

        html.mainWrapListEquipmentsDist.append(html.butonPublish);
        html.mainWrapListEquipmentsDist.append(html.listEquipmentsDist);

        html.wrapIconSearchEquipment.append(html.iconSearchEquipment);
        html.wrapSearchEquipment.append(html.wrapIconSearchEquipment);
        html.wrapSearchEquipment.append(html.inputSearchEquipment);
        html.mainWrapListEquipmentsSrc.append(html.wrapSearchEquipment);
        html.mainWrapListEquipmentsSrc.append(html.listEquipmentsSrc);

        mainWrap.append(html.technologicalCard);
        mainWrap.append(html.mainWrapListEquipmentsDist);
        mainWrap.append(html.mainWrapListEquipmentsSrc);

    }
}

export default bakeriesMetaBoxes;