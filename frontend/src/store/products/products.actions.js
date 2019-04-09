export const fetchProducts = () => dispatch => {
  let products = [];
  fetch('http://localhost/api_rest_wp/wp-json/wp/v2/products')
    .then(res => res.json())
    .then(data => products = data);
  return {
    type: 'FETCH_PRODUCTS',
    payload: products
  }
}