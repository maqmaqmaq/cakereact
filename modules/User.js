import React from 'react'
import { FormGroup, FormControl, ControlLabel, HelpBlock,Grid,Row,Col,Button } from 'react-bootstrap';

const FormExample = React.createClass({
  getInitialState() {
    return {
      login: '',
      password: ''
    };
  },

  getValidationState() {
    const length = this.state.login.length;
    if (length > 10) return 'success';
    else if (length > 5) return 'warning';
    else if (length > 0) return 'error';
  },

  handleChangeLogin(e) {
    this.setState({ login: e.target.value });
  },
  handleChangePassword(e) {
    this.setState({ password: e.target.value });
  },

 render() {
    return (
      <Row>
      	<Col xs={4} xsOffset={3}>
      		<form>
        		<FormGroup
        		  controlId="login"
        		  validationState={this.getValidationState()}
        		>
        		  <ControlLabel>Login</ControlLabel>
        		  <FormControl
        		    type="text"
        		    value={this.state.login}
        		    placeholder="Login"
        		    onChange={this.handleChangeLogin}
        		  />
        		  <FormControl.Feedback />
        		  <HelpBlock></HelpBlock>
        		  <ControlLabel>Password</ControlLabel>
        		  <FormControl
        		    type="password"
        		    value={this.state.password}
        		    placeholder="Password"
        		    onChange={this.handleChangePassword}
        		  />
        		  <FormControl.Feedback />
        		  <HelpBlock></HelpBlock>
        		</FormGroup>
        		<Button bsStyle="primary" className="text-center">Sign in</Button>
      		</form>
      	</Col>
      </Row>
    );
  }
});

export default React.createClass({
  render() {
    return <div>
    	<FormExample />
    	</div>
  }
})