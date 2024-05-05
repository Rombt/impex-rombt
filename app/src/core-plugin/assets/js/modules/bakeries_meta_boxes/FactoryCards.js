import Helper from './helpers.js';
import CardEquipment from './CardEquipment.js';

class FactoryCards {

    constructor(data) {

        this.arr_cards = data.map(dataCard => {
            return new CardEquipment(dataCard);
        })

        return this.arr_cards;
    }







}

export default FactoryCards;