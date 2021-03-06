<?php

namespace App\Contracts\Dao\Post;

interface PostDaoInterface
{
    public function getPost($auth_id, $type, $searchkeyword);
    public function show($post_id);
    public function store($auth_id, $post);
    public function edit($post_id);
    public function update($user_id, $post);
    public function softDelete($auth_id, $post_id);
    public function import($auth_id, $filepath);
}
