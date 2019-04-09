import { FETCH_PRODUCTS } from './actions.type';
const intialState = {
  productsList: []
}

export const productsReducer = (state = intialState, action) => {
  switch(action.type) {
    case FETCH_PRODUCTS: {
      return {
        ...state,
        productsList: [...action.payload]
      }
    }
    default:
      return state;
  }
}