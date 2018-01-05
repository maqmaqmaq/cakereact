import React from 'react'
import { render } from 'react-dom'
import { DataTable } from 'react-data-components'
import { LinkContainer } from 'react-router-bootstrap'
import { Table,Glyphicon,Modal,Button,Popover,Tooltip,OverlayTrigger } from 'react-bootstrap'
import axios from 'axios';

var AccountBox = React.createClass({
    loadAccountsFromServer: function() {
      var th = this;
      axios.get(this.props.url)
        .then(function (result) {
          th.setState({data: result.data.accounts});
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    handleAccountSubmit: function(account) {
        // note: we use accounts here
        var accounts = this.state.data;

        // Optimistically set an id on the new account. It will be replaced by an
        // id generated by the server. In a production application you would likely
        // not use Date.now() for this and would have a more robust system in place.
        console.log(accounts);

        account.id = Date.now();
        var newAccounts = accounts.concat([account]);
        this.setState({data: newAccounts});

        var th = this;
              axios.get(this.props.url)
                .then(function (result) {
                  th.setState({data: result.data.accounts});
                })
                .catch(function (error) {
                  console.log(error);
                });
    },
    getInitialState: function() {
        return {data: []};
    },
    componentDidMount: function() {
        this.loadAccountsFromServer();
        setInterval(this.loadAccountsFromServer, this.props.pollInterval);
    },
    render: function() {
        return (
            <div className="accountBox">
                <h1>Accounts</h1>
                <AccountList data={this.state.data} />
                <AccountForm onAccountSubmit={this.handleAccountSubmit} />
            </div>
        );
    }
});

var AccountList = React.createClass({
    render: function() {
        var accountNodes = this.props.data.map(function(account) {
            return (
                <Account name={account.name} id={account.id} id_code={account.id_code}>
                </Account>
            );
        });
        return (
            <Table striped bordered condensed hover>
                <thead>
                  <tr>
                    <th>Id Code</th>
                    <th>Name</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                {accountNodes}
                </tbody>
            </Table>
        );
    }
});

var AccountForm = React.createClass({
    getInitialState: function() {
        return {name: '', id_code: ''};
    },
    handleNameChange: function(e) {
        this.setState({name: e.target.value});
    },
    handleIdCodeChange: function(e) {
        this.setState({id_code: e.target.value});
    },
    handleSubmit: function(e) {
        e.preventDefault();
        var name = this.state.name.trim();
        var id_code = this.state.id_code.trim();
        if (!id_code || !name) {
            return;
        }
        this.props.onAccountSubmit({name: name, id_code: id_code});
        this.setState({name: '', id_code: ''});
    },
    render: function() {
        return (
            <form className="accountForm" onSubmit={this.handleSubmit}>
                <input
                    type="text"
                    placeholder="Account's"
                    value={this.state.name}
                    onChange={this.handleNameChange}
                />
                <input
                    type="text"
                    placeholder="Id Code"
                    value={this.state.id_code}
                    onChange={this.handleIdCodeChange}
                />
                <input type="submit" value="Post" />
            </form>
        );
    }
});

var Mdl = React.createClass({
      getInitialState() {
        return { showModal: false };
      },
      close() {
        this.setState({ showModal: false });
      },
      open() {
        this.setState({ showModal: true });
      },
      render() {
          const popover = (
            <Popover id="modal-popover" title="popover">
              very popover. such engagement
            </Popover>
          );
          const tooltip = (
            <Tooltip id="modal-tooltip">
              wow.
            </Tooltip>
          );

          return (
            <div>
              <p>Click to get the full Modal experience!</p>

              <Button
                bsStyle="primary"
                bsSize="large"
                onClick={this.open}
              >
                Launch demo modal
              </Button>

              <Modal show={this.state.showModal} onHide={this.close}>
                <Modal.Header closeButton>
                  <Modal.Title>Modal heading</Modal.Title>
                </Modal.Header>
                <Modal.Body>
                  <h4>Text in a modal</h4>
                  <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>

                  <h4>Popover in a modal</h4>
                  <p>there is a <OverlayTrigger overlay={popover}><a href="#">popover</a></OverlayTrigger> here</p>

                  <h4>Tooltips in a modal</h4>
                  <p>there is a <OverlayTrigger overlay={tooltip}><a href="#">tooltip</a></OverlayTrigger> here</p>

                  <hr />

                  <h4>Overflowing text to show scroll behavior</h4>
                  <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                  <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                  <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                </Modal.Body>
                <Modal.Footer>
                  <Button onClick={this.close}>Close</Button>
                </Modal.Footer>
              </Modal>
            </div>
          );
        }
});

var Account = React.createClass({
    render: function() {
        return (
          <tr className="account">
            <td>{this.props.id_code}</td>
            <td>{this.props.name}</td>
            <td>
              <LinkContainer to={{ pathname: '/account/view/' + this.props.id, query: { } }}>
                <a><Glyphicon glyph="zoom-in" /></a>
              </LinkContainer> &nbsp;
              <LinkContainer to={{ pathname: '/account/edit/' + this.props.id, query: { } }}>
                <a><Glyphicon glyph="pencil" /></a>
              </LinkContainer> &nbsp;
              <LinkContainer to={{ pathname: '/account/delete/' + this.props.id, query: { } }}>
                <a><Glyphicon glyph="trash" /></a>
              </LinkContainer>
            </td>
          </tr>
        );
    }
});

export default React.createClass({
  render() {
    return <div>
      <AccountBox url="http://localhost/cakereact/backend/accounts.json" pollInterval={5000} />
      </div>
  }
})

//