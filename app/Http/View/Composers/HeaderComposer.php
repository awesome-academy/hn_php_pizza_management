<?php

namespace App\Http\View\Composers;

use App\Models\Category;
use Illuminate\View\View;

class HeaderComposer
{
    /**
     * Create a new profile composer.
     *
     * @param  Category  $users
     * @return void
    */

    public function compose(View $view)
    {
        $categories = Category::with('children')->whereNull('parent_id')->get();
        $view->with('categories', $categories);
    }
}
