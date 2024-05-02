import wpMedia from './wp_media.js';

function bakeriesMetaBoxes() {
  const mainWrap = document.querySelector('.bakery-data-block');

  if (!mainWrap) {
    return false;
  }

  const technologyCardWrap = document.createElement('div');
  //   technologyCardWrap.classList.add('');

  const wrapTechnologyCardImg = document.createElement('div'); // содержит всё что касается добавления картинки
  //   wrapTechnologyCardImg.classList.add('');

  const wrapImgTechnologyCard = document.createElement('div'); // содержит саму картинку
  wrapImgTechnologyCard.classList.add('wrap-img');

  const technologyCardImg = document.createElement('img');

  const addButTechnologyCardImg = document.createElement('div');
  //   addButTechnologyCardImg.classList.add('');

  wrapImgTechnologyCard.append(technologyCardImg);
  wrapTechnologyCardImg.append(wrapImgTechnologyCard);
  wrapTechnologyCardImg.append(addButTechnologyCardImg);

  const equipmentsWrap = document.createElement('div');
  const equipment = document.createElement('div');
  const addButEquipment = document.createElement('button');

  equipmentsWrap.append(equipment);
  equipmentsWrap.append(addButEquipment);

  technologyCardWrap.append(equipmentsWrap);
  technologyCardWrap.append(wrapTechnologyCardImg);

  mainWrap.append(technologyCardWrap);
}

export default bakeriesMetaBoxes;
