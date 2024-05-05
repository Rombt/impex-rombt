import Helper from './helpers.js';

class CardEquipment {
    html = {
        cardEquipment: document.createElement('li'), // cardEquipment
        imgEquipment: document.createElement('img'),
        buttAddEquipment: document.createElement('button'),
        wrapEquipmentName: document.createElement('div'), //wrapEquipmentName
        equipmentName: document.createElement('h4'),
    };

    constructor(data) {
        // console.log("data", data);

        this.html.cardEquipment.id = data.id;
        this.html.imgEquipment.textContent = data.img;
        this.html.equipmentName.textContent = data.name;

        Helper.addClassToBlocks(this.html);
        return this.createCard();
    }

    createCard() {

        this.html.wrapEquipmentName.append(this.html.equipmentName);

        this.html.cardEquipment.append(this.html.imgEquipment);
        this.html.cardEquipment.append(this.html.wrapEquipmentName);
        this.html.cardEquipment.append(this.html.buttAddEquipment);



    }
}

export default CardEquipment;