<div class="container post-filter">
    <form action="wordpress/search" method="get">
        <div class="row post_search-fields">
            <div class="col-lg-9">
                <div class="row filter-row-style">
                    <div class="col-md-6 col-lg-4 col-sm-12 post_search-option">
                        <label for="location">Location</label>
                        <select name="location" id="location" class="select-option">
                            <option value="">Any</option>
                            <option value="miami">Miami</option>
                            <option value="little-havana">- Little Havana</option>
                            <option value="perrine">- Perrine</option>
                            <option value="doral">- Droal</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 post_search-option">
                        <label for="select-status">Property Status</label>
                        <select name="status" id="select-status" class="select-option">
                            <option value="">Any</option>
                            <option value="for-rent">For Rent</option>
                            <option value="for-sale">For Sale</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-12  col-sm-12 post_search-option">
                        <label for="select-property-type">Property Type</label>
                        <select name="type" id="select-property-type" class="select-option">
                            <option value="">Any</option>
                            <option value="commercial">Commercial</option>
                            <option value="office">- Office</option>
                            <option value="shop">- Shop</option>
                            <option value="residential">Residential</option>
                            <option value="apartment">- Apartment</option>
                            <option value="apartment-building">- Apartment Building</option>
                            <option value="condominium">- Condominium</option>
                            <option value="single-family">- Single Family</option>
                            <option value="villa">- Villa</option>
                        </select>
                    </div>

                    <div class="col-12 advanced-search" id="advancedSearch">
                        <div class="row">
                            <div class="col-lg-3 col-sm-12 col-md-6 post_search-box">
                                <label for="select-property-type">Min Beds</label>
                                <select name="bedrooms" id="min-beds" class="select-option">
                                    <option value="">Any</option>
                                    <option value="bedrooms1">1</option>
                                    <option value="bedrooms2">2</option>
                                    <option value="bedrooms3">3</option>
                                    <option value="bedrooms4">4</option>
                                    <option value="bedrooms5">5</option>
                                    <option value="bedrooms6">6</option>
                                    <option value="bedrooms7">7</option>
                                    <option value="bedrooms8">8</option>
                                    <option value="bedrooms9">9</option>
                                    <option value="bedrooms10">10</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-12 col-md-6 post_search-box">
                                <label for="select-property-type">Min Baths</label>
                                <select name="bathrooms" id="min-baths" class="select-option">
                                    <option value="">Any</option>
                                    <option value="bathrooms1">1</option>
                                    <option value="bathrooms2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-12 col-md-6 post_search-box">
                                <label for="select-property-type">Min Price</label>
                                <select name="minPrice" id="minPrice" class="select-option">
                                    <option value="">Any</option>
                                    <option value="1000">1000$</option>
                                    <option value="5000">5000$</option>
                                    <option value="10000">10000$</option>
                                    <option value="50000">50000$</option>
                                    <option value="100000">100000$</option>
                                    <option value="200000">200000$</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-12 col-md-6 post_search-box">
                                <label for="select-property-type">Max Price</label>
                                <select name="maxPrice" id="maxPrice" class="select-option">
                                    <option value="">Any</option>
                                    <option value="1000">1000$</option>
                                    <option value="5000">5000$</option>
                                    <option value="10000">10000$</option>
                                    <option value="50000">50000$</option>
                                    <option value="100000">100000$</option>
                                    <option value="200000">200000$</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-12 col-md-6 post_search-box">
                                <label for="select-property-type">Min Garages</label>
                                <select name="minGarages" id="minGarages" class="select-option">
                                    <option value="">Any</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-12 col-md-6 post_search-box">
                                <label for="select-property-type">Agent</label>
                                <select name="agent" id="agent" class="select-option">
                                    <option value="">Any</option>
                                    <option value="1">Nathan James</option>
                                    <option value="2">Melissa William</option>
                                    <option value="3">Alice Brian</option>
                                    <option value="4">John David</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-12 col-md-6 post_search-box">
                                <label for="select-property-type">Min Area(sq ft)</label> <br>
                                <input type="text" name="minArea" id="minArea" placeholder="any">
                            </div>
                            <div class="col-lg-3 col-sm-12 col-md-6 post_search-box">
                                <label for="select-property-type">Max Area(sq ft)</label> <br>
                                <input type="text" name="maxArea" id="maxArea" placeholder="any">
                            </div>
                            <div class="col-6 post_search-box">
                                <label for="select-property-type">Keyword</label> <br>
                                <input type="text" name="keyword" id="keyword" placeholder="any">
                            </div>
                            <div class="col-6 post_search-box">
                                <label for="select-property-type">Property ID</label><br>
                                <input type="text" name="propId" id="propId" placeholder="any">
                            </div>
                            <div class="col-12 radiobox-field" id="certainFeatures">

                                <label for="2-stories"><input type="checkbox" id="2-stories" name="2-stories"
                                        value="2 Stories"> 2 Stories</label>

                                <label for="ceiling"><input type="checkbox" id="ceiling" name="ceiling" value="ceiling">
                                    26' Ceiling</label>

                                <label for="bike-path"><input type="checkbox" id="bike-path" name="bike=path"
                                        value="Bike Path"> Bike Path</label>
                            </div>
                            <div class="col-12" style="background: #1ea69a;">
                                <button type="button" onclick="certainFeatures()" class="certain-features-button">+
                                    Looking for certain features</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 positioning post_search-option post_search-button filter-row-style-1">
                <div class="post_search-button-left">
                    <button type="button" onclick="advancedSearch()" class="search-button"><svg width="1em" height="1em"
                            viewBox="0 0 16 16" class="bi bi-search" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                            <path fill-rule="evenodd"
                                d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                        </svg></button>
                </div>
                <div class="post_search-button-right">
                    <button type="submit" name="" class="search-button"><svg width="1em" height="1em"
                            viewBox="0 0 16 16" class="bi bi-search" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                            <path fill-rule="evenodd"
                                d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                        </svg> Search</button>
                </div>
            </div>
        </div>
    </form>
</div>


<script>
function advancedSearch() {
    var x = document.getElementById("advancedSearch");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        $('#advancedSearch').show('slow');
        x.style.display = "block";
    }
}


function certainFeatures() {
    var x = document.getElementById("certainFeatures");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
</script>

<!-- <div class="categories">
<ul>
<li class="js-filter-item"><a href="<?= home_url(); ?>">All</a></li>
    <?php 
    $location_args = array(
        'exclude' => array(1),
        'option_all' => 'All'
    );
    
    $categories = get_categories($location_args);

    foreach($categories as $location) : ?>
        <li class="js-filter-item"><a href="<?= get_category_link($location->term_id); ?>"><?= $location->name; ?></a></li>
    <?php endforeach; ?>
    </ul>
</div> -->