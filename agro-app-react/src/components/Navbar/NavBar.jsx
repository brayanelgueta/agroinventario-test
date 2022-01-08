import React from 'react'
//StyleSheet
import './NavBar.css'

function NavBar() {
    return (
        <div className="navbar">
            <nav>
                <input type="checkbox" id="menu" />
                <label htmlFor="menu" className="responsive-menu"> ☰ </label>
                <ul>
                    <li><a href="/"> Link 1 </a></li>
                    <li><a href="/"> Link 2 </a></li>
                    <li><a href="/"> Link 3 </a></li>
                    <li><a href="/"> Link 4 </a></li>
                    <li><a href="/"> Link 5 </a></li>
                </ul>
            </nav>
        </div>
    )
}

export default NavBar
