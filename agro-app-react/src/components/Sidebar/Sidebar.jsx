import React from 'react'

//StyleSheet
import './Sidebar.css'
function Sidebar() {
    return (
        <div className="sidebar">
            
            <div className="sidebar-links">
                <h2>Sidebar Links</h2>
                <ul>
                    <li><a href="/">Link 1</a></li>
                    <li><a href="/">Link 2</a></li>
                    <li><a href="/">Link 3</a></li>
                    <li><a href="/">Link 4</a></li>
                </ul>
            </div>
            <div className="sidebar-widget">
                <h2>Other widget</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur similique praesentium, perspiciatis tenetur exercitationem distinctio quod, aperiam sit soluta dolores quidem et impedit accusamus, qui aspernatur ea natus voluptas sunt.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores, blanditiis?</p>
            </div>
        </div>
    )
}

export default Sidebar
