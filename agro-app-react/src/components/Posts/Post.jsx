import React from 'react'
//StyleSheet
import './Post.css'

function Post() {
    return (
        <div className="post">
            <div>
                <div className="img"></div>
            </div>
            <div className="post-content">
                <h3>This is a Lorem ipsum dolor sit amet </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Beatae, non sit error corporis aliquid atque numquam,
                    fugiat at eveniet minima accusantium voluptatibus repellendus eum molestias,
                    quam consequuntur iusto ut eos!
                </p>
                <a href="/">Read More</a>
            </div>

        </div>
    )
}

export default Post
