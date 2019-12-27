import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Home extends Component {
    render() {
        return (
            <div>
                <div id="header">
                    head
                </div>
                <div className="container">
                    body
                </div>
            </div>
        );
    }
}

if (document.getElementById('home')) {
    ReactDOM.render(<Home />, document.getElementById('home'));
}
