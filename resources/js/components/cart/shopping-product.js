import React, { Component } from "react";
import ReactDOM from "react-dom";

fetch('https://example.com', {
  credentials: 'include'
})

export default class ProductShopping extends Component {
  constructor(props) {
    super(props);
    this.state = { isToggleOn: true };


    // Este enlace es necesario para hacer que `this` funcione en el callback
    this.handleClick = this.handleClick.bind(this);
  }
  handleClick() {
    this.setState(state => ({
      isToggleOn: !state.isToggleOn
    }));
  }
  render() {
    return (
      <div>
        <div id="header">head</div>
        <div className="container">body</div>
        <button onClick={this.handleClick}>
          {this.state.isToggleOn ? "ON" : "OFF"}
        </button>
      </div>
    );
  }
}

if (document.querySelector(".product-shopping")) {
  ReactDOM.render(
    <ProductShopping />,
    document.querySelector(".product-shopping")
  );
}
