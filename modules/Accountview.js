import React from 'react'
import { Form,FormGroup,Col,FormControl,ControlLabel} from 'react-bootstrap';
import axios from 'axios';

var Accountv = React.createClass({
	getInitialState: function() {
	    return {
	    	data: []
	    };
	},
	componentDidMount() {
		var th = this;
		axios.get(this.props.url)
		  .then(function (result) {
		    th.setState({data: result.data.account});
		  })
		  .catch(function (error) {
		    console.log(error);
		  });
	},
	render: function(){
		var rows = [];
		for(var field in this.state.data){
			rows.push(
				<FormGroup controlId="formHorizontal">
				  <Col componentClass={ControlLabel} sm={2}>
				    {field}
				  </Col>
				  <Col sm={10}>
				    <FormControl type="text" placeholder={field} value={this.state.data[field]} />
				  </Col>
				</FormGroup>
				);
		}
		return (
			<Form horizontal>
				{rows}
			</Form>
		)
	}
});

var UserGist = React.createClass({
  getInitialState: function() {
    return {
      username: '',
      lastGistUrl: ''
    };
  },

  componentDidMount: function() {
  	var th = this;
  	axios.get(this.props.source)
  	  .then(function (result) {
  	    var lastGist = result[0];
  	    if (this.isMounted()) {
  	      th.setState({
  	        username: lastGist.owner.login,
  	        lastGistUrl: lastGist.html_url
  	      });
  	    }
  	  })
  	  .catch(function (error) {
  	    console.log(error);
  	  });
  },
  render: function() {
    return (
      <div>
        {this.state.username}'s last gist is
        <a href={this.state.lastGistUrl}>here</a>.
      </div>
    );
  }
});


export default React.createClass({
  render() {
  	var urlv = "http://localhost/cakereact/backend/accounts/view/" + this.props.params.id + ".json";
    return <div>
    	<UserGist source="https://api.github.com/users/octocat/gists" />
      </div>
  }
})

/* <Accountv id={this.props.params.id} url={urlv} /> */