<h1 id="laravel-ecommerce-site">Laravel Ecommerce Site</h1>
<p>This is an ecommerce website built with Laravel.</p>
<h3 id="overview">Overview</h3>
<p>The site has the following features:</p>
<ul>
<li>Product management</li>
<li>user auth</li>
</ul>
<h3 id="installation">Installation</h3>
<ol>
<li>Clone the repo</li>
<li>Run composer install</li>
<li>Create .env file and configure your environment</li>
<li>Run migrations: php artisan migrate</li>
<li>Install passport: php artisan passport:install</li>
<li>Run seeder: php artisan db:seed</li>
<li>Compile assets: npm install &amp;&amp; npm run dev</li>
<li>Serve application: php artisan serve</li>
</ol>
<h2 id="products">Products</h2>
<p>This section manages the products in the application.</p>
<h3 id="models">Models</h3>
<p>The Product model (app/Models/Product.php) represents a product in the system. It contains the following fields:</p>
<ul>
<li>id - The primary key</li>
<li>name - The name of the product</li>
<li>details - A long description of the product</li>
<li>image - The filename of the image for this product</li>
<li>created_at - Timestamp for when this product was created</li>
<li>updated_at - Timestamp for when this product was last updated</li>
</ul>
<h3 id="controllers">Controllers</h3>
<p>The ProductController (app/Http/Controllers/ProductController.php) handles all CRUD operations for products. It includes the following actions:</p>
<ul>
<li>index - Displays a list of all products</li>
<li>show - Displays the details for a single product</li>
<li>create - Shows the form to create a new product</li>
<li>store - Persists a new product to the database</li>
<li>edit - Shows the form to edit an existing product</li>
<li>update - Persists edits to an existing product to the database</li>
<li>destroy - Deletes a product from the database</li>
</ul>
<h3 id="routes">Routes</h3>
<p>The routes for products are defined in routes/web.php:</p>
<pre><code>Route::resource(&#39;products&#39;, ProductController::class); 
</code></pre>
<p>This defines the typical resource routes for products.</p>
<h3 id="views">Views</h3>
<ul>
<li>products/index.blade.php - Displays the list of products</li>
<li>products/show.blade.php - Displays the details of a single product</li>
<li>products/create.blade.php - The form to create a new product</li>
<li>products/edit.blade.php - The form to edit an existing product
The views extend a products.layout layout file.</li>
</ul>
<h3 id="migrations">Migrations</h3>
<p>The migration that creates the products table is located at database/migrations/2024_02_07_081954_create_products_table.php.
It contains the schema for the products table.</p>
<h3 id="assets">Assets</h3>
<p>Product images are uploaded to the public/images folder.</p>
