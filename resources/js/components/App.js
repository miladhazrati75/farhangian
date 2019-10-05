import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch } from 'react-router-dom'
import Login from './Login'
import Dashboard from './Dashboard'
class App extends React.Component {
  render () {
    return (
        <BrowserRouter >

        <Switch>
            <Route exact path='/' component={Login} />
            <Route exact path='/Dashboard' component={Dashboard} />
        </Switch>
        </BrowserRouter>

    )
  }
}

ReactDOM.render(<App />, document.getElementById('app'))
