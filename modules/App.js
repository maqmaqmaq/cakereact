import React from 'react'
import { Link,IndexLink} from 'react-router'
import NavLink from './NavLink'
// modules/App.js
import Home from './Home'
import { Button,Nav,NavItem,Grid,Row,Col} from 'react-bootstrap';
import { LinkContainer } from 'react-router-bootstrap';

export default React.createClass({
  render() {
    return (
      <div>
        <Grid>
            <Row className="show-grid">
              <Col xs={12} md={12}>
                <Nav bsStyle="pills" activeKey={1}>
                  <LinkContainer to={{ pathname: '/', query: { } }}>
                    <NavItem>Home</NavItem>
                  </LinkContainer>
                  <LinkContainer to={{ pathname: '/about', query: { } }}>
                    <NavItem>About</NavItem>
                  </LinkContainer>
                  <LinkContainer to={{ pathname: '/repos', query: { } }}>
                    <NavItem>Repos</NavItem>
                  </LinkContainer>
                  <LinkContainer to={{ pathname: '/login', query: { } }}>
                    <NavItem>Login</NavItem>
                  </LinkContainer>
                  <LinkContainer to={{ pathname: '/account', query: { } }}>
                    <NavItem>Account</NavItem>
                  </LinkContainer>
                </Nav>
              </Col>
            </Row>
            <Row className="show-grid">
              <Col xs={12} md={12}>
                {/* add this */}
                {this.props.children || <Home/>}
              </Col>
            </Row>
        </Grid>
      </div>
    )
  }
})
