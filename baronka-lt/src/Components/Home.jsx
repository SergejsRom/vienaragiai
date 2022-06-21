function Home({list}) {

    return (
        <>
            <h1>Sweet Home Alamaba</h1>
            <div className="home">
                home
                <div className="home__bin">
                    bin
                    <div className="home__bin__content">
                        content
                    </div>
                </div>
            </div>
            <ul>
                {/* <?php foreach($list as $value) : ?>

    <li><?= $value ?></li>
    
<?php endforeach ?> */}

                {
                    list.map((value, i) => <li key={i}>{value}</li>)
                }
            </ul>
        </>
    )
}

export default Home;