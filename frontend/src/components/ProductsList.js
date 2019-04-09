import React, { Component } from 'react';
import { connect } from 'react-redux';
import { FETCH_PRODUCTS } from '../store/products/actions.type';
// import * as productsActions from '../store/products/products.actions';

class ProductsList extends Component {
  componentDidMount() {
    fetch('http://localhost/api_rest_wp/wp-json/wp/v2/products')
      .then(res => res.json()).then(data => this.props.getProducts(data));
  }
  render() {
    console.log(this.props.products);
    return <div>ProductList</div>
  }
}
const mapStateToProps = state => {
  return {
    products: state.products.productsList
  }
}
const mapDispatchToProps = dispatch => {
  return {
    getProducts: async function(products) {
      await dispatch({
        type: FETCH_PRODUCTS,
        payload: products
      });
    }
  }
}

export default connect(mapStateToProps, mapDispatchToProps)(ProductsList);