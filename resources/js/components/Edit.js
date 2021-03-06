import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import {Link} from 'react-router-dom';
import axios from 'axios';

class Edit extends Component {
    
    constructor(props){
        super(props);
        this.state = {
            name : '',
            tel: ''
        }

        this.handleNameInputChange = this.handleNameInputChange.bind(this);
        this.handleTelInputChange = this.handleTelInputChange.bind(this);
        this.handleFormSubmit = this.handleFormSubmit.bind(this);
    }

    componentDidMount(){
        //This line get the contact id passed by click/from uri 
        const id = this.props.match.params.id;
        //Geting data from database by id contact
        axios.get(`/api/contact/${id}/edit`).then(response =>{
            this.setState({
                name : response.data.name,
                tel : response.data.telephone 
            })
        }).catch(err => console.log(err));
    }

    handleNameInputChange(event){
        this.setState({
            name : event.target.value
        })
    }
    handleTelInputChange(event){
        this.setState({
            tel : event.target.value
        })
    }
    handleFormSubmit(event){
        event.preventDefault();

        const id = this.props.match.params.id;

        axios.put(`/api/contact/${id}/update`,{
            name : this.state.name,
            tel : this.state.tel 
        }).then(response => {
            this.setState({
                name : '',
                tel : ''
            })
            this.props.history.push('/');
        }).catch(err => console.log(err));
    }
    render(){
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Edit Contact</div>
    
                            <Link to="/" className="btn-success btn-sm col-md-3 m-2 mr-2" >List All</Link>
    
                            <div className="card-body">
                            <form onSubmit={this.handleFormSubmit}>
                                <div className="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" 

                                        required
                                        onChange={this.handleNameInputChange}
                                        value={this.state.name}

                                    className="form-control" aria-describedby="emailHelp" placeholder="Insert name" />
                                </div>
                                <div className="form-group">
                                    <label for="exampleInputPassword1">Contact</label>
                                    <input type="text" 

                                        required
                                        onChange={this.handleTelInputChange}
                                        value={this.state.tel}

                                    className="form-control" placeholder="Insert a phone number"/>
                                </div>
                                <button type="submit" className="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Edit;
