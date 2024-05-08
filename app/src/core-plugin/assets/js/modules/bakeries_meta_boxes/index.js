import wpMedia from '../wp_media.js';
import Helper from './helpers.js';
import FactoryCards from './FactoryCards.js';
import liveSearch from '../liveSearch.js';

function bakeriesMetaBoxes() {
  const mainWrap = document.querySelector('.bakery-data-block');
  if (!mainWrap) return false;

  async function getData() {
    const url = new URL(window.location.href);
    const searchParams = url.searchParams;
    const idPost = searchParams.get('post');

    let response = await fetch(ajaxurl + `?action=get_data_bakery_equipments&post=${idPost}`);
    const result = await response.json();
    if (result.success) {
      return result.data;
    } else {
      // here is the handling of the situation when there are no categories
    }
  }

  window.onload = async function () {
    const data = await getData();
    const arrProducts = data.arrProducts;
    const arrCards = new FactoryCards(arrProducts);

    if (arrCards.length == 0) return false;

    const html = {
      mainWrapListEquipmentsSrc: document.createElement('div'),
      quantityCards: document.createElement('div'),
      listEquipmentsSrc: document.createElement('ul'),
      wrapSearchEquipment: document.createElement('div'),
      inputSearchEquipment: document.createElement('input'),
      wrapIconSearchEquipment: document.createElement('div'),
      iconSearchEquipment: document.createElement('img'),

      mainWrapListEquipmentsDist: document.createElement('div'),
      listEquipmentsDist: document.createElement('ul'),

      hiddenInputCardsIds: document.createElement('input'),
      hiddenInputTechnologicalCardId: document.createElement('input'),
      hiddenInputNonce: document.createElement('input'),

      technologicalCard: document.createElement('div'),
      buttonSelectImg: document.createElement('button'),
      imgTechnologicalCard: document.createElement('img'),
    };
    Helper.addClassToBlocks(html);

    arrCards.forEach(card => {
      let exit = false;
      let but = card.querySelector('button.butt-add-equipment');

      data.arrSelectedProductsId.forEach(idSelectedCard => {
        let id = card.id.replace('_', '');
        if (idSelectedCard === id) {
          html.listEquipmentsDist.append(card);
          html.hiddenInputCardsIds.value += `${id},`;
          but.classList.remove('butt-add-equipment');
          but.classList.add('butt-del-equipment');
          but.textContent = 'delete';

          exit = true;
          return;
        }
      });

      if (exit === false) {
        html.listEquipmentsSrc.append(card);
      }
    });

    html.buttonSelectImg.textContent = 'Select image';
    html.technologicalCard.append(html.buttonSelectImg);

    console.log('data.technologicalCard = ', data.technologicalCard);

    html.imgTechnologicalCard.src = data.technologicalCard.url;
    html.technologicalCard.append(html.imgTechnologicalCard);
    html.hiddenInputTechnologicalCardId.value = data.technologicalCard.id;

    html.hiddenInputCardsIds.type = 'hidden';
    html.hiddenInputTechnologicalCardId.type = 'hidden';
    html.hiddenInputNonce.type = 'hidden';
    html.hiddenInputCardsIds.name = 'cards_ids';
    html.hiddenInputTechnologicalCardId.name = 'technological_card_id';
    html.hiddenInputNonce.name = '_bakery_nonce';
    html.hiddenInputNonce.value = rmbtBakery.rmbtBakery_nonce;

    html.listEquipmentsDist.append(html.hiddenInputCardsIds);
    html.listEquipmentsDist.append(html.hiddenInputTechnologicalCardId);
    html.listEquipmentsDist.append(html.hiddenInputNonce);
    html.mainWrapListEquipmentsDist.append(html.listEquipmentsDist);

    html.iconSearchEquipment.src = `${rmbtBakery.rmbtPluginUrl}/impex-rombt-core/assets/img/icons/search.png`;
    html.wrapIconSearchEquipment.append(html.iconSearchEquipment);
    html.wrapSearchEquipment.append(html.wrapIconSearchEquipment);
    html.wrapSearchEquipment.append(html.inputSearchEquipment);
    html.quantityCards.textContent = `total cards: ${arrCards.length}`;
    html.mainWrapListEquipmentsSrc.append(html.quantityCards);
    html.mainWrapListEquipmentsSrc.append(html.wrapSearchEquipment);
    html.mainWrapListEquipmentsSrc.append(html.listEquipmentsSrc);

    mainWrap.append(html.technologicalCard);
    mainWrap.append(html.mainWrapListEquipmentsDist);
    mainWrap.append(html.mainWrapListEquipmentsSrc);

    mainWrap.addEventListener('click', function (e) {
      e.preventDefault();
      const target = e.target;

      if (target.classList.contains('button-select-img')) {
        wpMedia(mainWrap.querySelector('.img-technological-card')).then(idImg => {
          html.hiddenInputTechnologicalCardId.value = idImg;
        });
      } else if (target.classList.contains('butt-add-equipment')) {
        const id = target.closest('.card-equipment').id;
        const card = html.listEquipmentsSrc.querySelector(`#${id}`);
        target.classList.remove('butt-add-equipment');
        target.classList.add('butt-del-equipment');
        target.textContent = 'delete';
        html.listEquipmentsDist.append(card);
        html.hiddenInputCardsIds.value += `${id.replace('_', '')},`;
      } else if (target.classList.contains('butt-del-equipment')) {
        let id = target.closest('.card-equipment').id;
        const card = html.listEquipmentsDist.querySelector(`#${id}`);
        target.classList.remove('butt-del-equipment');
        target.classList.add('butt-add-equipment');
        target.textContent = 'add';
        html.listEquipmentsSrc.prepend(card);
        id = id.replace('_', '');
        html.hiddenInputCardsIds.value = html.hiddenInputCardsIds.value.replace(`${id},`, '');
      }
    });

    liveSearch(
      html.mainWrapListEquipmentsSrc,
      'li.card-equipment',
      '.wrap-equipment-name>h4',
      '.input-search-equipment'
    );
  };
}

export default bakeriesMetaBoxes;
