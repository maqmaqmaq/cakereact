import React from 'react'
import { Form,FormGroup,Col,FormControl,ControlLabel} from 'react-bootstrap';
import axios from 'axios';

var Accounte = React.createClass({
	getInitialState: function() {
	    return {data: []};
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
				    {field} asd
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


export default React.createClass({
  render() {
  	var urlv = "http://localhost/cakereact/backend/accounts/view/" + this.props.params.id + ".json";
  	var urle = "http://localhost/cakereact/backend/accounts/edit/" + this.props.params.id;
    return <div>
        <Accounte id={this.props.params.id} url={urlv} editurl={urle} />
      </div>
  }
})