/**
 *
 * @param {HTMLElement} whereToLook общий контейнер элемента input и элементов li
 * @param {string} selLi css селектор тегов li
 * @param {string} textCont css селектор контейнера текста в теге li
 * @param {string} input css селектор тега input
 */

function liveSearch(whereToLook, selLi, textCont, input) {
  let nl_li = whereToLook.querySelectorAll(selLi);

  whereToLook.querySelector(input).addEventListener('input', function (e) {
    let val = this.value.trim();
    if (val != '') {
      nl_li.forEach(function (li) {
        let text = li.querySelector(textCont);

        if (text.innerText.toLowerCase().search(val.toLowerCase()) == -1) {
          li.classList.add('hide');
          text.innerHTML = text.innerText;
        } else {
          li.classList.remove('hide');
          let str = text.innerText;
          text.innerHTML = insertMark(str, text.innerText.toLowerCase().search(val.toLowerCase()), val.length);
        }
      });
    } else {
      nl_li.forEach(li => {
        li.classList.remove('hide');
        let text = li.querySelector(textCont);
        text.innerHTML = text.innerText;
      });
    }
  });
}

function insertMark(str, pos, len) {
  return str.slice(0, pos) + '<mark>' + str.slice(pos, pos + len) + '</mark>' + str.slice(pos + len);
}

export default liveSearch;
