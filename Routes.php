$routes->get('/', 'Pages::view');
$routes->get('news', 'News::index');
$routes->get('news/(:segment)', 'News::view/$1');
$routes->match(['get', 'post'], 'news/create', 'News::create');
