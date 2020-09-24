
import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import {Link} from 'react-router-dom';
import axios from 'axios';

class Student extends Component{

    constructor(props){
        super(props);
        this.state = {
            contacts : []
        }
    }
    componentDidMount(){
        axios.get('/api/contacts')
            .then(response => {
                this.setState({
                    contacts : response.data
                })
            }).catch(err => console.log(err)); 
    }
    
    render(){
        return(
            <div>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Trabalhadores</h1>
                <Link to="/add" className="btn btn-primary btn-sm">Add</Link>
                <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar"></span>
                    This week
                </button>
                </div>
            </div>
            <div className="container">
               
                                <table className="table">
                                    <thead className="thead-dark">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {
                                        this.state.contacts !== null
                                            ? this.state.contacts.map(contact =>(
                                                <tr key={contact.id}>
                                                    <td>{contact.name}</td>
                                                    <td>{contact.telephone}</td>
                                                    <td>
                                                    <Link to={`/${contact.id}/edit`} className="btn btn-warning mr-3 btn-sm">Update</Link>
                                                    <Link to={`/${contact.id}/delete`} className="btn btn-danger mr-3 btn-sm">Delete</Link>
                                                    </td>
                                                </tr> 
                                            ) )
                                            :
                                            null
                                    }
                                    </tbody>
                                </table>
                            
            </div>
            </div>
        );
    }
}
export default Student;