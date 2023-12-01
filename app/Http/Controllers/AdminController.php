<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController  extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function products()
    {
        return view('admin.products');
    }

    public function pages()
    {
        return view('admin.pages');
    }

    public function createPage()
    {
        return view('admin.createpage');
    }

    public function editPage($id)
    {
        // Logic to edit page with the given $id
    }

    public function blogs()
    {
        return view('admin.blogs');
    }

    public function createBlog()
    {
        return view('admin.create_blog');
    }

    public function editBlog($id)
    {
        // Logic to edit blog with the given $id
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function users()
    {
        return view('admin.users');
    }

    public function createUser()
    {
        return view('admin.Add_user');
    }

    public function editUser($id)
    {
        // Logic to edit user with the given $id
    }
}
