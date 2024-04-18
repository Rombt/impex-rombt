// let arr_categories = [];

async function getAllCategories() {
  let response = await fetch(ajaxurl + '?action=get_all_categories');
  const result = await response.json();
  if (result.success) {
    return result.data;
  } else {
    // here is the handling of the situation when there are no categories
  }
}

window.onload = async function () {
  const arr_categories = await getAllCategories();
  console.log('arr_categories = ', arr_categories);
};
