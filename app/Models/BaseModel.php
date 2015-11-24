<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Watson\Rememberable\Rememberable;

abstract class BaseModel extends Eloquent
{
    use Rememberable;
}
