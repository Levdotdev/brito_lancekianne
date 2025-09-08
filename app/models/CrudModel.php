<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Model: CrudModel
 * 
 * Automatically generated via CLI.
 */
class CrudModel extends Model {
    protected $table = 'genshin';
    protected $primary_key = 'id';
    protected $fillable = ['name', 'class'];
    protected $has_soft_delete = true;
    protected $soft_delete_column = 'deleted_at';

    public function __construct()
    {
        parent::__construct();
    }
}