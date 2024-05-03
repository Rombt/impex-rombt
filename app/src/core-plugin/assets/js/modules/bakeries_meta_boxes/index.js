import wpMedia from '../wp_media.js';
import EquipmentsField from './EquipmentsField .js';
import EquipmentsListField from './EquipmentsListField.js';
import CardEquipment from './CardEquipment.js';

function bakeriesMetaBoxes() {
  const mainWrap = document.querySelector('.bakery-data-block');

  if (!mainWrap) {
    return false;
  }

  // wrapImgTechnologyCard.classList.add('wrap-img');

  wrapImgTechnologyCard.append(technologyCardImg);
  wrapTechnologyCardImg.append(wrapImgTechnologyCard);
  wrapTechnologyCardImg.append(addButTechnologyCardImg);

  equipmentsWrap.append(equipment);
  equipmentsWrap.append(addButEquipment);

  technologyCardWrap.append(equipmentsWrap);
  technologyCardWrap.append(wrapTechnologyCardImg);

  mainWrap.append(technologyCardWrap);
}

export default bakeriesMetaBoxes;
