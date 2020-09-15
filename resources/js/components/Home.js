
import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import {Link} from 'react-router-dom';
import axios from 'axios';

class Home extends Component {
    
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
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">All Contacts</div>
                            
                            <Link to="/add" className="btn-primary col-md-3 m-2 btn-sm mr-2">Add</Link>

                            <div className="card-body">
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
                    </div>
                </div>
            </div>
        );
    }
}

export default Home;


