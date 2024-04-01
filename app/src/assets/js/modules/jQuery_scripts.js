export const jQuery_scripts = jQuery(document).ready(function ($) {
  multilevelHeaderMenu();

  // accordionMenu('#footer-menu', '.sub-menu');

  // paginationAdaptive();

  $('.admin-panel-access').on('click', function (event) {
    document.cookie = 'admin-panel-access' + '=' + true;
  });

  //---------------------- funktions ---------------------

  function paginationAdaptive() {
    //!!! решает ту же задачу что и  multilevelHeaderMenu() - если строка слишком короткая прячет элементы которые не поместились
    let PaginationBlock = $('.rstr-pagination');
    const pageNumberCurrent = $('.page-numbers.current');

    if (pageNumberCurrent.length == 0 || PaginationBlock.length == 0) {
      return false;
    }

    let WidthPaginationBTN = PaginationBlock.children('.page-numbers')[0].offsetWidth;
    let AllPaginationBTN = PaginationBlock.children('.page-numbers').length;
    let PaginationBTNs = PaginationBlock.children('.page-numbers');
    let indexCurrentPaginationBTN =
      PaginationBlock.children('.page-numbers').index(pageNumberCurrent);
    let GupNexAndCurrentPaginationBTN;
    let amounthVisiblePaginationBTN;
    let widthPaginationBlock;

    if (pageNumberCurrent.next().position() == undefined) {
      GupNexAndCurrentPaginationBTN =
        pageNumberCurrent.position().left -
        pageNumberCurrent.prev().position().left -
        WidthPaginationBTN;
    } else {
      GupNexAndCurrentPaginationBTN =
        pageNumberCurrent.next().position().left -
        pageNumberCurrent.position().left -
        WidthPaginationBTN;
    }

    updatePaginationBTN();
    $(window).resize(updatePaginationBTN);

    function updatePaginationBTN() {
      PaginationBTNs.detach();

      widthPaginationBlock = PaginationBlock.width();
      amounthVisiblePaginationBTN = Math.floor(
        (widthPaginationBlock + GupNexAndCurrentPaginationBTN) /
          (WidthPaginationBTN + GupNexAndCurrentPaginationBTN) /
          2
      );

      let VisiblePaginationBTNs = PaginationBTNs.map(function (index, elem) {
        if (
          index == 0 ||
          index == indexCurrentPaginationBTN ||
          index == AllPaginationBTN - 1 ||
          (index > indexCurrentPaginationBTN - amounthVisiblePaginationBTN + 1 &&
            index < indexCurrentPaginationBTN + amounthVisiblePaginationBTN)
        ) {
          return elem;
        }
      });

      PaginationBlock.append(VisiblePaginationBTNs);
      PaginationBlock.css('visibility', 'visible');
    }
  }

  function accordionMenu(menu, subMenu) {
    const $subMenu = $(`${menu} ${subMenu}`);
    const icon = '<div class="accordion-item__icon"></div>';

    if ($.isEmptyObject($subMenu)) {
      return false;
    }

    const $subMenuParent = $subMenu.parent('li');
    $subMenuParent.addClass('accordion-item');
    $subMenuParent.prepend(icon);

    $('.accordion-item__icon').on('click', function (e) {
      $(e.target).parent('li').children('.sub-menu').slideToggle(300);
      $(e.target).toggleClass(`accordion-item__icon-active`);
    });
  }

  function modalWindow(iconOnClass, modalWindowClass, closeWindow) {
    const $modalWindow = $('.' + modalWindowClass);
    const $iconOn = $('.' + iconOnClass);

    $iconOn.on('click', function (e) {
      e.preventDefault();
      $modalWindow.show(500);
      $iconOn.hide(500);
    });

    $(document).on('keyup', function (e) {
      if (e.keyCode == 27 || e.keyCode == 13) {
        $modalWindow.hide(500);
        $iconOn.show(500);
      }
    });

    $(document).on('click', function (e) {
      let target = $(e.target);
      let parentTarget = target.parent()[0];

      if (
        !target.hasClass(iconOnClass) &&
        !parentTarget.closest('.' + iconOnClass) &&
        !target.is('.' + modalWindowClass + ' *:not([class="' + closeWindow + '"])') &&
        !target.is('.' + modalWindowClass)
      ) {
        $modalWindow.hide(500);
        $('.' + iconOnClass).show(500);
      }
    });

    return $modalWindow;
  }

  function multilevelHeaderMenu() {
    //! должны обрабатываться все меню на странице
    //! переписать на js без jquery
    //? совместить с бургер меню в одном файле
    //!!! решает ту же задачу что и  paginationAdaptive() - если строка слишком короткая прячет элементы которые не поместились
    const $menuHeaderMenu = $('#heder-menu > ul');
    let $parentModalWindow;
    const $burger = $("<div class='hide-menu-burger'><span></span></div>");
    const modalMenu = $(
      '<div class="modal-menu" data-simplebar><div class="close-window"></div></div>'
    );

    if (!$menuHeaderMenu.length) {
      return false;
    } else if ($menuHeaderMenu.children().length < 4) {
      $menuHeaderMenu.css('justify-content', 'flex-start');
    }

    if (rstrHederMenu.rstrModalMenuLocation == '1') {
      $parentModalWindow = $('body');
    } else if (rstrHederMenu.rstrModalMenuLocation == '2') {
      $parentModalWindow = $menuHeaderMenu;
    }

    if (rstrHederMenu.rstrModalMenuSide == '1') {
      modalMenu.css({ right: '', left: '0px' });
    } else if (rstrHederMenu.rstrModalMenuSide == '2') {
      modalMenu.css({ left: '', right: '0px' });
    }

    showMenu();
    window.addEventListener('resize', showMenu);

    function showMenu() {
      let containerWidth = $menuHeaderMenu.width();
      let $el;
      const menuElementsHide = $menuHeaderMenu
        .children()
        .filter((index, el) => {
          $el = $(el);
          return $el[0].offsetLeft + $el.outerWidth() > containerWidth;
        })
        .remove();
      if ($('#heder-menu').find('.hide-menu-burger').length == 0) {
        $('#heder-menu').append($burger);
      }
      $parentModalWindow.append(modalMenu);
      modalMenu.hide();
      const $modalWindow = modalWindow('hide-menu-burger', 'modal-menu', 'close-window');
      menuElementsHide.each(function () {
        $(this).addClass('modal-item');
        $modalWindow.append($(this));
      });

      $('.heder-menu').attr('style', 'visibility: visible;');
    }
  }
});
