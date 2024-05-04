import wpMedia from '../wp_media.js';
import EquipmentsField from './EquipmentsField .js';
import EquipmentsListField from './EquipmentsListField.js';
import CardEquipment from './CardEquipment.js';

function bakeriesMetaBoxes() {
    const mainWrap = document.querySelector('.bakery-data-block');

    if (!mainWrap) {
        return false;
    }

    async function getData() {
        let response = await fetch(ajaxurl + '?action=get_data_bakery_equipments');
        const result = await response.json();
        if (result.success) {
            return result.data;
        } else {
            // here is the handling of the situation when there are no categories
        }
    };


    window.onload = async function() {
        const Data = await getData();


        console.log("Data = ", Data);

    }


    // получаю массив единиц оборудования
    // с помощью объекта класса фабрика, на входе получает массив всех единиц оборудования, создаю инстанс класса CardEquipment для каждого элемента массива
    // отображаю карточки в поле listEquipments и слаживаю инстансы класса CardEquipment в массив
    // создать инстанс класса посредник 
    // в посреднике прослшиваю клики во всём документе 
    // при каждом клике в посреднике определить кто должен реагровать на клик и передать необходимую информацию исполнителю 
    // при клике на кнопку "add" посредник получает id карточки находит инстанс этой карточки в массиве переносит карточку в поле listEquipments
    // при клике на кнопку "опубликовать" поличить id всех карточек из поля listEquipment 




}

export default bakeriesMetaBoxes;