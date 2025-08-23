<script>
document.addEventListener('DOMContentLoaded', function() {
    fetch('https://admin.travelvela.com/api/get/blog/categories', {
        method: 'GET',
        headers: {
            'Authorization': 'TravelVela-DYSBW7537NUDD7078',
            'username': 'genesis',
            'password': 'ERTYUIO87347854',
            'Accept': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        var sidebar = document.getElementById('sidebar-category');
        if (!sidebar) return;

        // Support multiple shapes: data.data (array) or data.data.data (paginated)
        var cats = null;
        if (data && Array.isArray(data.data)) {
            cats = data.data;
        } else if (data && data.data && Array.isArray(data.data.data)) {
            cats = data.data.data;
        }

    if (Array.isArray(cats) && cats.length > 0) {
            // only clear existing demo categories if API returned items
            sidebar.innerHTML = '';
            cats.forEach(function(cat) {
                var wrapper = document.createElement('div');
                wrapper.className = 'custom-checkbox';

                var input = document.createElement('input');
                input.type = 'checkbox';
                input.className = 'form-check-input';
                input.id = 'cat-' + (cat.id || Math.random().toString(36).substr(2,5));
                // store slug on the input for later categorywise fetch
                if (cat.slug) {
                    input.value = cat.slug;
                    input.dataset.slug = cat.slug;
                }

                var label = document.createElement('label');
                label.setAttribute('for', input.id);
                label.innerHTML = '<a href="/blog-category/' + (cat.slug || '') + '">' + (cat.title || cat.category_name || '') + '</a>';

                wrapper.appendChild(input);
                wrapper.appendChild(label);
                sidebar.appendChild(wrapper);
            });
        } else {
            // nothing from API — keep demo markup and warn
            console.warn('Categories API returned no items or unexpected shape; keeping demo categories.', data);
        }
    })
    .catch(function(err){
        console.error('Categories fetch failed:', err);
        // leave demo content intact
    });

    // Fallback: if sidebar is empty after a short delay (e.g., fetch returned empty), restore demo HTML
    setTimeout(function(){
        try {
            var sidebar = document.getElementById('sidebar-category');
            if (!sidebar) return;
            // if no custom-checkbox items exist, restore demo snippet
            if (sidebar.querySelectorAll('.custom-checkbox').length === 0) {
                sidebar.innerHTML = '\n                                <div class="custom-checkbox">\n                                    <input type="checkbox" class="form-check-input" id="cat1" />\n                                    <label for="cat1">All <span class="font-size-13 ms-1">(55)</span></label>\n                                </div>\n                                <div class="custom-checkbox">\n                                    <input type="checkbox" class="form-check-input" id="cat2" />\n                                    <label for="cat2">Active Adventure Tours\n                                        <span class="font-size-13 ms-1">(8)</span></label>\n                                </div>\n                                <div class="custom-checkbox">\n                                    <input type="checkbox" class="form-check-input" id="cat3" />\n                                    <label for="cat3">Ecotourism\n                                        <span class="font-size-13 ms-1">(5)</span></label>\n                                </div>\n                                <div class="custom-checkbox">\n                                    <input type="checkbox" class="form-check-input" id="cat4" />\n                                    <label for="cat4">Escorted Tours\n                                        <span class="font-size-13 ms-1">(2)</span></label>\n                                </div>\n                                <div class="custom-checkbox">\n                                    <input type="checkbox" class="form-check-input" id="cat5" />\n                                    <label for="cat5">Group Tours\n                                        <span class="font-size-13 ms-1">(11)</span></label>\n                                </div>\n                                <div class="custom-checkbox">\n                                    <input type="checkbox" class="form-check-input" id="cat6" />\n                                    <label for="cat6">Ligula <span class="font-size-13 ms-1">(3)</span></label>\n                                </div>\n                                <div class="collapse" id="categoryMenu">\n                                    <div class="custom-checkbox">\n                                        <input type="checkbox" class="form-check-input" id="cat7" />\n                                        <label for="cat7">Family Tours\n                                            <span class="font-size-13 ms-1">(4)</span></label>\n                                    </div>\n                                    <div class="custom-checkbox">\n                                        <input type="checkbox" class="form-check-input" id="cat8" />\n                                        <label for="cat8">City Trips\n                                            <span class="font-size-13 ms-1">(5)</span></label>\n                                    </div>\n                                    <div class="custom-checkbox">\n                                        <input type="checkbox" class="form-check-input" id="cat9" />\n                                        <label for="cat9">National Parks Tours\n                                            <span class="font-size-13 ms-1">(3)</span></label>\n                                    </div>\n                                    <div class="custom-checkbox">\n                                        <input type="checkbox" class="form-check-input" id="cat10" />\n                                        <label for="cat10">Vacations\n                                            <span class="font-size-13 ms-1">(3)</span></label>\n                                    </div>\n                                    <div class="custom-checkbox">\n                                        <input type="checkbox" class="form-check-input" id="cat11" />\n                                        <label for="cat11">Early booking\n                                            <span class="font-size-13 ms-1">(7)</span></label>\n                                    </div>\n                                    <div class="custom-checkbox">\n                                        <input type="checkbox" class="form-check-input" id="cat12" />\n                                        <label for="cat12">Last minute\n                                            <span class="font-size-13 ms-1">(2)</span></label>\n                                    </div>\n                                </div>\n                                <!-- end collapse -->\n                                <a class="btn-text" data-bs-toggle="collapse" href="#categoryMenu" role="button"\n                                    aria-expanded="false" aria-controls="categoryMenu">\n                                    <span class="show-more">Show More <i class="la la-angle-down"></i></span>\n                                    <span class="show-less">Show Less <i class="la la-angle-up"></i></span>\n                                </a>\n                ';
            }
        } catch (e) {
            console.error('Failed to restore demo categories fallback:', e);
        }
    }, 700);
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var API_HEADERS = {
        method: 'GET',
        headers: {
            'Authorization': 'TravelVela-DYSBW7537NUDD7078',
            'username': 'genesis',
            'password': 'ERTYUIO87347854',
            'Accept': 'application/json'
        }
    };

    function escapeHtml(str){
        if (!str) return '';
        return String(str).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;').replace(/'/g,'&#39;');
    }

    // pagination state shared between all/category modes
    var paginationState = {
        mode: 'all', // 'all' or 'category'
        page: 1,
        lastPage: 1,
        slug: null
    };

    function renderPosts(posts, meta, append){
        var list = document.getElementById('blog-list');
        if (!list) return;
        var html = '';
        posts.forEach(function(p) {
            var imageUrl = p.image ? ('https://admin.travelvela.com/' + p.image) : 'images/blog/2.png';
            var category = p.category_name || '';
            var date = p.entry_date || '';
            var title = p.title || '';
            var slug = p.slug || p.id;
            var href = '/blog/' + slug;

            html += '<div class="col-lg-6 col-12">\n';
            html += '  <div class="blog__card">\n';
            html += '    <div class="blog__cover">\n';
            html += '      <img src="' + imageUrl + '" alt="blog" />\n';
            html += '    </div>\n';
            html += '    <div class="blog__content">\n';
            html += '      <div class="blog__meta">\n';
            html += '        <a href="/blog-category/' + (p.category_id || '') + '" class="category">' + escapeHtml(category) + '</a>\n';
            html += '        <span class="date">' + escapeHtml(date) + '</span>\n';
            html += '      </div>\n';
            html += '      <a class="title" href="' + href + '">' + escapeHtml(title) + '</a>\n';
            html += '    </div>\n';
            html += '  </div>\n';
            html += '</div>\n';
        });

        if (append) {
            list.insertAdjacentHTML('beforeend', html);
        } else {
            list.innerHTML = html;
        }

        var countElem = document.getElementById('posts-count');
        if (countElem && meta) {
            var to = meta.to || posts.length;
            var from = meta.from || ((paginationState.page - 1) * (meta.per_page || posts.length)) + 1;
            countElem.textContent = 'Showing ' + from + ' - ' + to + ' of ' + (meta.total || posts.length) + ' Posts';
        }
    }

    function updateLoadMoreButton(){
        var btn = document.getElementById('load-more-btn');
        if (!btn) return;
        if (paginationState.page < paginationState.lastPage) {
            btn.disabled = false;
            btn.style.display = 'inline-block';
        } else {
            btn.disabled = true;
            btn.style.display = 'none';
        }
    }

    function fetchAllBlogs(page = 1, append = false){
        var url = 'https://admin.travelvela.com/api/get/blog/list?page=' + page;
        fetch(url, API_HEADERS)
            .then(function(res){ return res.json(); })
            .then(function(json){
                if (json && json.success && json.data && Array.isArray(json.data.data)) {
                    paginationState.mode = 'all';
                    paginationState.page = page;
                    paginationState.lastPage = json.data.last_page || json.data.lastPage || 1;
                    paginationState.slug = null;
                    renderPosts(json.data.data, json.data, append);
                    updateLoadMoreButton();
                } else {
                    console.warn('All blogs API returned unexpected response, keeping demo list.');
                }
            })
            .catch(function(err){
                console.error('Blog list fetch failed:', err);
            });
    }

    function fetchCategoryBlogs(slug, page = 1, append = false){
        var url = 'https://admin.travelvela.com/api/get/blogs/categorywise/' + encodeURIComponent(slug) + '?page=' + page;
        fetch(url, API_HEADERS)
            .then(function(res){ return res.json(); })
            .then(function(json){
                if (json && json.success && json.data && Array.isArray(json.data.data)) {
                    paginationState.mode = 'category';
                    paginationState.page = page;
                    paginationState.lastPage = json.data.last_page || json.data.lastPage || 1;
                    paginationState.slug = slug;
                    renderPosts(json.data.data, json.data, append);
                    updateLoadMoreButton();
                } else {
                    console.warn('Categorywise API returned unexpected response, falling back to all blogs.', json);
                    fetchAllBlogs();
                }
            })
            .catch(function(err){
                console.error('Categorywise fetch failed:', err);
                fetchAllBlogs();
            });
    }

    // attach handlers to category checkboxes using event delegation so handlers survive DOM replacements
    function attachCategoryHandlers(){
        var sidebar = document.getElementById('sidebar-category');
        if (!sidebar) return;
        // ensure we only attach once
        if (sidebar._hasCategoryListener) return;
        sidebar.addEventListener('change', function(e){
            var inp = e.target;
            if (!inp || !inp.matches || !inp.matches('input.form-check-input')) return;

            // if checked, uncheck others (single-select) and fetch category
            if (inp.checked) {
                var inputs = sidebar.querySelectorAll('input.form-check-input');
                inputs.forEach(function(other){ if (other !== inp) other.checked = false; });
                var slug = inp.dataset.slug || inp.value || '';
                if (slug) {
                    fetchCategoryBlogs(slug);
                } else {
                    fetchAllBlogs();
                }
            } else {
                // none selected -> fetch all
                var inputs = sidebar.querySelectorAll('input.form-check-input');
                var anyChecked = Array.prototype.slice.call(inputs).some(function(i){ return i.checked; });
                if (!anyChecked) fetchAllBlogs();
            }
        });
        sidebar._hasCategoryListener = true;
    }

    // run initial load and attach handlers after a short delay so fallback insertion (if any) completes
    setTimeout(function(){
        attachCategoryHandlers();
        // wire Load More button
        var loadMoreBtn = document.getElementById('load-more-btn');
        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', function(){
                var nextPage = (paginationState.page || 1) + 1;
                if (paginationState.mode === 'category' && paginationState.slug) {
                    fetchCategoryBlogs(paginationState.slug, nextPage, true);
                } else {
                    fetchAllBlogs(nextPage, true);
                }
            });
        }

        // If user has a checked category already (unlikely), use it; otherwise load all
        var sidebar = document.getElementById('sidebar-category');
        var checked = sidebar ? sidebar.querySelector('input.form-check-input:checked') : null;
        if (checked && (checked.dataset.slug || checked.value)) {
            fetchCategoryBlogs(checked.dataset.slug || checked.value);
        } else {
            fetchAllBlogs();
        }
    }, 300);
});
</script>
@extends('layouts.app', ['style' => 'style-2'])

@section('title', 'Blog Sidebar')

@section('content')
    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg-9">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Blog Sidebar</h2>
                            </div>
                        </div>
                        <!-- end breadcrumb-content -->
                    </div>
                    <!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-end">
                            <ul class="list-items">
                                <li><a href="index.html">Home</a></li>
                                <li>Blog</li>
                                <li>Blog Sidebar</li>
                            </ul>
                        </div>
                        <!-- end breadcrumb-list -->
                    </div>
                    <!-- end col-lg-6 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end breadcrumb-wrap -->
        <div class="bread-svg-box">
            <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 100 10" preserveaspectratio="none">
                <polygon points="100 0 50 10 0 0 0 10 100 10"></polygon>
            </svg>
        </div>
        <!-- end bread-svg -->
    </section>
    <!-- end breadcrumb-area -->
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->

    <!-- ================================
        START CARD AREA
    ================================= -->
    <section class="card-area blog-page section-gap">
        <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row" id="blog-list">
                        <div class="col-lg-6 col-12">
                            <!-- Single Blog  -->
                            <div class="blog__card mt-0">
                                <div class="blog__cover">
                                    <img src="images/blog/2.png" alt="blog" />
                                </div>
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <a href="blog-sidebar.html" class="category">WELLNESS</a>
                                        <span class="date">JUNE 09, 2025</span>
                                    </div>
                                    <a class="title" href="blog-single.html">Mind Matters Navigating Mental Wellness in
                                        Today's
                                        World</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <!-- Single Blog  -->
                            <div class="blog__card mt-0">
                                <div class="blog__cover">
                                    <img src="images/blog/3.png" alt="blog" />
                                </div>
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <a href="blog-sidebar.html" class="category">TRIPS</a>
                                        <span class="date">JANUARY 26, 2025</span>
                                    </div>
                                    <a class="title" href="blog-single.html">Roaming Routes Adventures in Every Corner of
                                        the World
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <!-- Single Blog  -->
                            <div class="blog__card">
                                <div class="blog__cover">
                                    <img src="images/blog/2.png" alt="blog" />
                                </div>
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <a href="blog-sidebar.html" class="category">WELLNESS</a>
                                        <span class="date">JUNE 09, 2025</span>
                                    </div>
                                    <a class="title" href="blog-single.html">Mind Matters Navigating Mental Wellness in
                                        Today's
                                        World</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <!-- Single Blog  -->
                            <div class="blog__card">
                                <div class="blog__cover">
                                    <img src="images/blog/3.png" alt="blog" />
                                </div>
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <a href="blog-sidebar.html" class="category">TRIPS</a>
                                        <span class="date">JANUARY 26, 2025</span>
                                    </div>
                                    <a class="title" href="blog-single.html">Roaming Routes Adventures in Every Corner of
                                        the World
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <!-- Single Blog  -->
                            <div class="blog__card">
                                <div class="blog__cover">
                                    <img src="images/blog/2.png" alt="blog" />
                                </div>
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <a href="blog-sidebar.html" class="category">WELLNESS</a>
                                        <span class="date">JUNE 09, 2025</span>
                                    </div>
                                    <a class="title" href="blog-single.html">Mind Matters Navigating Mental Wellness in
                                        Today's
                                        World</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <!-- Single Blog  -->
                            <div class="blog__card">
                                <div class="blog__cover">
                                    <img src="images/blog/3.png" alt="blog" />
                                </div>
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <a href="blog-sidebar.html" class="category">TRIPS</a>
                                        <span class="date">JANUARY 26, 2025</span>
                                    </div>
                                    <a class="title" href="blog-single.html">Roaming Routes Adventures in Every Corner of
                                        the World
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <!-- Single Blog  -->
                            <div class="blog__card">
                                <div class="blog__cover">
                                    <img src="images/blog/2.png" alt="blog" />
                                </div>
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <a href="blog-sidebar.html" class="category">WELLNESS</a>
                                        <span class="date">JUNE 09, 2025</span>
                                    </div>
                                    <a class="title" href="blog-single.html">Mind Matters Navigating Mental Wellness in
                                        Today's
                                        World</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <!-- Single Blog  -->
                            <div class="blog__card">
                                <div class="blog__cover">
                                    <img src="images/blog/3.png" alt="blog" />
                                </div>
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <a href="blog-sidebar.html" class="category">TRIPS</a>
                                        <span class="date">JANUARY 26, 2025</span>
                                    </div>
                                    <a class="title" href="blog-single.html">Roaming Routes Adventures in Every Corner of
                                        the World
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <!-- Single Blog  -->
                            <div class="blog__card">
                                <div class="blog__cover">
                                    <img src="images/blog/2.png" alt="blog" />
                                </div>
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <a href="blog-sidebar.html" class="category">WELLNESS</a>
                                        <span class="date">JUNE 09, 2025</span>
                                    </div>
                                    <a class="title" href="blog-single.html">Mind Matters Navigating Mental Wellness in
                                        Today's
                                        World</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <!-- Single Blog  -->
                            <div class="blog__card">
                                <div class="blog__cover">
                                    <img src="images/blog/3.png" alt="blog" />
                                </div>
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <a href="blog-sidebar.html" class="category">TRIPS</a>
                                        <span class="date">JANUARY 26, 2025</span>
                                    </div>
                                    <a class="title" href="blog-single.html">Roaming Routes Adventures in Every Corner of
                                        the World
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <!-- Single Blog  -->
                            <div class="blog__card">
                                <div class="blog__cover">
                                    <img src="images/blog/2.png" alt="blog" />
                                </div>
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <a href="blog-sidebar.html" class="category">WELLNESS</a>
                                        <span class="date">JUNE 09, 2025</span>
                                    </div>
                                    <a class="title" href="blog-single.html">Mind Matters Navigating Mental Wellness in
                                        Today's
                                        World</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <!-- Single Blog  -->
                            <div class="blog__card">
                                <div class="blog__cover">
                                    <img src="images/blog/3.png" alt="blog" />
                                </div>
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <a href="blog-sidebar.html" class="category">TRIPS</a>
                                        <span class="date">JANUARY 26, 2025</span>
                                    </div>
                                    <a class="title" href="blog-single.html">Roaming Routes Adventures in Every Corner of
                                        the World
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="btn-box mt-3 text-center">
                                <button type="button" id="load-more-btn" class="theme-btn">
                                    <i class="la la-refresh me-1"></i>Load More
                                </button>
                                <p id="posts-count" class="font-size-13 pt-2">Showing 1 - 12 of 44 Posts</p>
                            </div>
                            <!-- end btn-box -->
                        </div>
                        <!-- end col-lg-12 -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar mb-0">
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape">Search Post</h3>
                            <div class="contact-form-action">
                                <form action="#">
                                    <div class="input-box">
                                        <div class="form-group mb-0">
                                            <input class="form-control ps-3" type="text"
                                                placeholder="Type your keywords..." />
                                            <button class="search-btn" type="submit">
                                                <i class="la la-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape">Categories</h3>
                            <div id="sidebar-category" class="sidebar-category">
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="cat1" />
                                    <label for="cat1">All <span class="font-size-13 ms-1">(55)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="cat2" />
                                    <label for="cat2">Active Adventure Tours
                                        <span class="font-size-13 ms-1">(8)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="cat3" />
                                    <label for="cat3">Ecotourism
                                        <span class="font-size-13 ms-1">(5)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="cat4" />
                                    <label for="cat4">Escorted Tours
                                        <span class="font-size-13 ms-1">(2)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="cat5" />
                                    <label for="cat5">Group Tours
                                        <span class="font-size-13 ms-1">(11)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="cat6" />
                                    <label for="cat6">Ligula <span class="font-size-13 ms-1">(3)</span></label>
                                </div>
                                <div class="collapse" id="categoryMenu">
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="cat7" />
                                        <label for="cat7">Family Tours
                                            <span class="font-size-13 ms-1">(4)</span></label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="cat8" />
                                        <label for="cat8">City Trips
                                            <span class="font-size-13 ms-1">(5)</span></label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="cat9" />
                                        <label for="cat9">National Parks Tours
                                            <span class="font-size-13 ms-1">(3)</span></label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="cat10" />
                                        <label for="cat10">Vacations
                                            <span class="font-size-13 ms-1">(3)</span></label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="cat11" />
                                        <label for="cat11">Early booking
                                            <span class="font-size-13 ms-1">(7)</span></label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="cat12" />
                                        <label for="cat12">Last minute
                                            <span class="font-size-13 ms-1">(2)</span></label>
                                    </div>
                                </div>
                                <!-- end collapse -->
                                <a class="btn-text" data-bs-toggle="collapse" href="#categoryMenu" role="button"
                                    aria-expanded="false" aria-controls="categoryMenu">
                                    <span class="show-more">Show More <i class="la la-angle-down"></i></span>
                                    <span class="show-less">Show Less <i class="la la-angle-up"></i></span>
                                </a>
                            </div>
                        </div>
                        <!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <div class="section-tab section-tab-2 pb-3">
                                <ul class="nav nav-tabs justify-content-center" id="myTab3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" id="recent-tab" data-bs-toggle="tab" href="#recent"
                                            role="tab" aria-controls="recent" aria-selected="true">
                                            Recent
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="popular-tab" data-bs-toggle="tab" href="#popular"
                                            role="tab" aria-controls="popular" aria-selected="false">
                                            Popular
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="new-tab" data-bs-toggle="tab" href="#new"
                                            role="tab" aria-controls="new" aria-selected="false">
                                            New
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane" id="recent" role="tabpanel" aria-labelledby="recent-tab">
                                    <div class="card-item card-item-list recent-post-card">
                                        <div class="card-img">
                                            <a href="blog-single.html" class="d-block">
                                                <img src="images/small-img4.jpg" alt="blog-img" />
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="blog-single.html">Pack wisely before traveling</a>
                                            </h3>
                                            <p class="card-meta">
                                                <span class="post__date"> 1 March, 2020</span>
                                                <span class="post-dot"></span>
                                                <span class="post__time">3 Mins read</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end card-item -->
                                    <div class="card-item card-item-list recent-post-card">
                                        <div class="card-img">
                                            <a href="blog-single.html" class="d-block">
                                                <img src="images/small-img5.jpg" alt="blog-img" />
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="blog-single.html">Change your place and get the fresh air</a>
                                            </h3>
                                            <p class="card-meta">
                                                <span class="post__date"> 1 March, 2020</span>
                                                <span class="post-dot"></span>
                                                <span class="post__time">3 Mins read</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end card-item -->
                                    <div class="card-item card-item-list recent-post-card mb-0">
                                        <div class="card-img">
                                            <a href="blog-single.html" class="d-block">
                                                <img src="images/small-img6.jpg" alt="blog-img" />
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="blog-single.html">Introducing this amazing city</a>
                                            </h3>
                                            <p class="card-meta">
                                                <span class="post__date"> 1 March, 2020</span>
                                                <span class="post-dot"></span>
                                                <span class="post__time">3 Mins read</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end card-item -->
                                </div>
                                <!-- end tab-pane -->
                                <div class="tab-pane fade show active" id="popular" role="tabpanel"
                                    aria-labelledby="popular-tab">
                                    <div class="card-item card-item-list recent-post-card">
                                        <div class="card-img">
                                            <a href="blog-single.html" class="d-block">
                                                <img src="images/small-img7.jpg" alt="blog-img" />
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="blog-single.html">The Castle on the Cliff: Majestic, Magic</a>
                                            </h3>
                                            <p class="card-meta">
                                                <span class="post__date"> 1 March, 2020</span>
                                                <span class="post-dot"></span>
                                                <span class="post__time">3 Mins read</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end card-item -->
                                    <div class="card-item card-item-list recent-post-card">
                                        <div class="card-img">
                                            <a href="blog-single.html" class="d-block">
                                                <img src="images/small-img8.jpg" alt="blog-img" />
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="blog-single.html">Change your place and get the fresh air</a>
                                            </h3>
                                            <p class="card-meta">
                                                <span class="post__date"> 1 March, 2020</span>
                                                <span class="post-dot"></span>
                                                <span class="post__time">3 Mins read</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end card-item -->
                                    <div class="card-item card-item-list recent-post-card mb-0">
                                        <div class="card-img">
                                            <a href="blog-single.html" class="d-block">
                                                <img src="images/small-img9.jpg" alt="blog-img" />
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="blog-single.html">All Aboard the Rocky Mountaineer</a>
                                            </h3>
                                            <p class="card-meta">
                                                <span class="post__date"> 1 March, 2020</span>
                                                <span class="post-dot"></span>
                                                <span class="post__time">3 Mins read</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end card-item -->
                                </div>
                                <!-- end tab-pane -->
                                <div class="tab-pane" id="new" role="tabpanel" aria-labelledby="new-tab">
                                    <div class="card-item card-item-list recent-post-card">
                                        <div class="card-img">
                                            <a href="blog-single.html" class="d-block">
                                                <img src="images/small-img7.jpg" alt="blog-img" />
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="blog-single.html">The Castle on the Cliff: Majestic, Magic</a>
                                            </h3>
                                            <p class="card-meta">
                                                <span class="post__date"> 1 March, 2020</span>
                                                <span class="post-dot"></span>
                                                <span class="post__time">3 Mins read</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end card-item -->
                                    <div class="card-item card-item-list recent-post-card">
                                        <div class="card-img">
                                            <a href="blog-single.html" class="d-block">
                                                <img src="images/small-img8.jpg" alt="blog-img" />
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="blog-single.html">Change your place and get the fresh air</a>
                                            </h3>
                                            <p class="card-meta">
                                                <span class="post__date"> 1 March, 2020</span>
                                                <span class="post-dot"></span>
                                                <span class="post__time">3 Mins read</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end card-item -->
                                    <div class="card-item card-item-list recent-post-card mb-0">
                                        <div class="card-img">
                                            <a href="blog-single.html" class="d-block">
                                                <img src="images/small-img9.jpg" alt="blog-img" />
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="blog-single.html">All Aboard the Rocky Mountaineer</a>
                                            </h3>
                                            <p class="card-meta">
                                                <span class="post__date"> 1 March, 2020</span>
                                                <span class="post-dot"></span>
                                                <span class="post__time">3 Mins read</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end card-item -->
                                </div>
                                <!-- end tab-pane -->
                            </div>
                        </div>
                        <!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape">Archives</h3>
                            <div class="sidebar-list">
                                <ul class="list-items">
                                    <li>
                                        <i class="la la-dot-circle me-2 text-color"></i><a href="#">June 2015</a>
                                    </li>
                                    <li>
                                        <i class="la la-dot-circle me-2 text-color"></i><a href="#">May 2016</a>
                                    </li>
                                    <li>
                                        <i class="la la-dot-circle me-2 text-color"></i><a href="#">April 2017</a>
                                    </li>
                                    <li>
                                        <i class="la la-dot-circle me-2 text-color"></i><a href="#">February
                                            2019</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape">Tag Cloud</h3>
                            <ul class="tag-list">
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Adventure</a></li>
                                <li><a href="#">Tour</a></li>
                                <li><a href="#">Nature</a></li>
                                <li><a href="#">Island</a></li>
                                <li><a href="#">Parks</a></li>
                                <li><a href="#">Cruise</a></li>
                                <li><a href="#">Mountains</a></li>
                                <li><a href="#">Tulips</a></li>
                                <li><a href="#">Museums</a></li>
                                <li><a href="#">Beaches</a></li>
                                <li><a href="#">Cultural</a></li>
                                <li><a href="#">National</a></li>
                            </ul>
                        </div>
                        <!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape">About us</h3>
                            <div class="sidebar-about">
                                <div class="sidebar-about-img">
                                    <img src="images/destination-img3.jpg" alt="" />
                                    <p class="font-size-28 font-weight-bold text-white">
                                        TravelVela
                                    </p>
                                </div>
                                <p class="pt-3">
                                    Sed ut perspiciatis unde omnis iste natus error sit
                                    voluptatem eaque ipsa quae ab illo inventore incididunt ut
                                    labore et dolore magna
                                </p>
                            </div>
                        </div>
                        <!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape">Follow & Connect</h3>
                            <ul class="social-profile">
                                <li>
                                    <a href="#"><i class="lab la-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lab la-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lab la-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lab la-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- end sidebar-widget -->
                    </div>
                    <!-- end sidebar -->
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end card-area -->
    <!-- ================================
        END CARD AREA
    ================================= -->

    <div class="section-block"></div>

    <!-- ================================
        START INFO AREA
    ================================= -->
    <section class="info-area info-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 responsive-column">
                    <a href="#" class="icon-box icon-layout-2 d-flex">
                        <div class="info-icon flex-shrink-0 bg-rgb text-color-2">
                            <i class="la la-phone"></i>
                        </div>
                        <!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Need Help? Contact us</h4>
                            <p class="info__desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                            </p>
                        </div>
                        <!-- end info-content -->
                    </a><!-- end icon-box -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <a href="#" class="icon-box icon-layout-2 d-flex">
                        <div class="info-icon flex-shrink-0 bg-rgb-2 text-color-3">
                            <i class="la la-money"></i>
                        </div>
                        <!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Payments</h4>
                            <p class="info__desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                            </p>
                        </div>
                        <!-- end info-content -->
                    </a><!-- end icon-box -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <a href="#" class="icon-box icon-layout-2 d-flex">
                        <div class="info-icon flex-shrink-0 bg-rgb-3 text-color-4">
                            <i class="la la-times"></i>
                        </div>
                        <!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Cancel Policy</h4>
                            <p class="info__desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                            </p>
                        </div>
                        <!-- end info-content -->
                    </a><!-- end icon-box -->
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end info-area -->
    <!-- ================================
        END INFO AREA
    ================================= -->
@endsection
@section('scripts')

@endsection
