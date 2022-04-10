<?php
declare (strict_types = 1);

namespace app\model;

use think\Model;
use think\model\concern\SoftDelete;
/**
 * @mixin \think\Model
 */
class Category extends Model
{
    use SoftDelete;
}