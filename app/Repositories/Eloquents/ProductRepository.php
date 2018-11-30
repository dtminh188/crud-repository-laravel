<?php

namespace App\Repositories\Eloquents;

use App\Models\Product;

class ProductRepository
{
    public function all()
    {
        return Product::paginate(5);
    }

    public function find($id)
    {
        return Product::find($id);
    }
}
