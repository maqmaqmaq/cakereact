import React from 'react'
import { render } from 'react-dom'
import App from './modules/App'
import { Router, Route, hashHistory, browserHistory, IndexRoute } from 'react-router'
import About from './modules/About'
import Repos from './modules/Repos'
import Repo from './modules/Repo'
import Home from './modules/Home'
import User from './modules/User'
import Account from './modules/Account'
import UserGist from './modules/Accountview'
import Accounte from './modules/Accountedit'


render((
  <Router history={browserHistory}>
    <Route path="/" component={App}>
      <IndexRoute component={Home}/>
      <Route path="/repos" component={Repos}/>
      	<Route path="/repos/:userName/:repoName" component={Repo}/>
      <Route path="/about" component={About}/>
      <Route path="/login" component={User}/>
      <Route path="/account" component={Account}/>
        <Route path="/account/view/:id" component={UserGist}/>
        <Route path="/account/edit/:id" component={Accounte}/>
    </Route>
  </Router>
), document.getElementById('app'))