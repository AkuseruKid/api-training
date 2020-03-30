
import '../css/app.css';

import React from 'react';
import ReactDOM from 'react-dom';

const App = () => {
    return <h1>Nice !</h1>;
};

const rootElement = document.querySelector('#app');
ReactDOM.render(<App/>, rootElement);

