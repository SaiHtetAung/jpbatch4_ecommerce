let cart = [
  {id:1,photo:'path',name:'My Item',price:7000,qty:1},
  {id:2,photo:'my path',name:'Item Two',price:5000,qty:2}
];

localStorage.setItem('cart',JSON.stringify(cart));