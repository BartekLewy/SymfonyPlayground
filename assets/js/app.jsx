import React, {Component} from 'react';
import ReactDOM from 'react-dom';

export default class App extends Component {
    render() {
        return (
            <div className="App">
                That's beginning of your adventure with Symfony4 and React 
            </div>
        );
    }
}

ReactDOM.render(
    <App />,
    document.getElementById("app")
);