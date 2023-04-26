<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $title = 'Welcome to laravel';
        $description = 'Created by Eric';
        $data = [
            'productOne' => 'iphone',
            'productTwo' => 'Samsung',

        ];
       /*  return view('products.index', compact('title','description'));
        //using compact method  */

       return view('products.index',compact('title','description', 'data'));
    }

    public function about()
    {
        return '<h1>About Us Page</h1>';
    }
}

/* Here, we have defined a ProductController class in the App\Http\Controllers namespace.
The ProductController extends the Controller class, which is included in Laravel and provides a variety of helpful methods for handling HTTP requests.

In this example, the ProductController is currently empty (the // indicates a comment), but typically
it would include methods that handle specific HTTP requests.
For example, a ProductController might include a show method that handles requests to view a particular product, or a create method that handles requests to create a new product.
*/

/* Each method in a Laravel controller typically returns a view or a response that will be sent back to the user's browser.
This response could be an HTML page, JSON data, a redirect to another URL, or some other kind of response depending on the application's needs.
 */
