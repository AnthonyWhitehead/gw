import React from 'react';
import { Switch, Route, BrowserRouter } from 'react-router-dom';
import Poem from './components/Poem/Poem';

const App = () => {
  return (
    <BrowserRouter>
      <div className="app-container">
        <Switch>
          <Route path="/poem/:title">
            <Poem />
          </Route>
        </Switch>
      </div>
    </BrowserRouter>
  );
};

export default App;
