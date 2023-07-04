<?php

namespace Galtsevt\Seo\Services;

use Illuminate\Database\Eloquent\Model;
use Johncms\Http\Request;

class SeoService
{
    public function saveData(Model $model)
    {
        $request = di(Request::class);
        dd($request);
    }
}
