<?php

/**
 * Deep
 *
 * @package      rsanchez\Deep
 * @author       Rob Sanchez <info@robsanchez.com>
 */

namespace rsanchez\Deep\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Model for the category_posts table
 */
class CategoryPosts extends Model
{
    /**
     * {@inheritdoc}
     *
     * @var string
     */
    protected $table = 'category_posts';

    /**
     * {@inheritdoc}
     *
     * @var string
     */
    protected $primaryKey = 'cat_id';

    /**
     * {@inheritdoc}
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * {@inheritdoc}
     *
     * @var bool
     */
    public $timestamps = false;

}
