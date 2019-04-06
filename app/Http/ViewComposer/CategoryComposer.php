<?php
namespace App\Http\ViewComposer;

use Illuminate\View\View;
use App\Category;

class CategoryComposer{
    protected $category;
    public function __construct()
    {
        $this->category = Category::get();        
    }
    public function compose(View $view)
    {
        $view->with('category',$this->category);
    }
}
 ?>