<?php

function getUsers()
{
    $users = [];
    $lines = file('users.csv');
    foreach ($lines as $line) {
        $users[] = str_getcsv($line);
    }
    return $users;
}

function getUserById($id)
{
    $users = getUsers();
    foreach ($users as $user) {
        if ($user[0] == $id) {
            return $user;
        }
    }
    return null;
}

function getUserByUsername($username)
{
    $users = getUsers();
    foreach ($users as $user) {
        if ($user[1] == $username) {
            return $user;
        }
    }
    return null;
}

function getBlogs()
{
    $blogs = [];
    $lines = file('blogs.csv');
    foreach ($lines as $line) {
        $blogs[] = str_getcsv($line);
    }
    return $blogs;
}

function getBlogsByUserId($userId)
{
    $blogs = getBlogs();
    $userBlogs = [];
    foreach ($blogs as $blog) {
        if ($blog[3] == $userId) {
            $userBlogs[] = $blog;
        }
    }
    return $userBlogs;
}

function getBlogById($id)
{
    $blogs = getBlogs();
    foreach ($blogs as $blog) {
        if ($blog[0] == $id) {
            return $blog;
        }
    }
    return null;
}

function createBlog($title, $content, $userId)
{
    $blogs = getBlogs();
    $newBlogId = count($blogs) + 1;
    $newBlog = [$newBlogId, $title, $content, $userId];
    $blogs[] = $newBlog;
    saveData('blogs.csv', $blogs);
    return $newBlogId;
}

function likeBlog($blogId, $userId)
{
    $likes = [];
    $lines = file('likes.csv');
    foreach ($lines as $line) {
        $likes[] = str_getcsv($line);
    }
    $likes[] = [$blogId, $userId];
    saveData('likes.csv', $likes);
}

function unlikeBlog($blogId, $userId)
{
    $likes = [];
    $lines = file('likes.csv');
    foreach ($lines as $line) {
        $likes[] = str_getcsv($line);
    }
    foreach ($likes as $key => $like) {
        if ($like[0] == $blogId && $like[1] == $userId) {
            unset($likes[$key]);
        }
    }
    saveData('likes.csv', $likes);
}

function isLiked($blogId, $userId)
{
    $likes = [];
    $lines = file('likes.csv');
    foreach ($lines as $line) {
        $likes[] = str_getcsv($line);
    }
    foreach ($likes as $like) {
        if ($like[0] == $blogId && $like[1] == $userId) {
            return true;
        }
    }
    return false;
}

function saveData($filename, $data)
{
    $file = fopen($filename, 'w');
    foreach ($data as $line) {
        fputcsv($file, $line);
    }
    fclose($file);
}
