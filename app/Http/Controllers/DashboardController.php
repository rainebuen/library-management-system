<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $menuItems = [
            [
                'label' => 'Dashboard',
                'icon' => 'bi bi-house',
                'route' => 'dashboard',
            ],
             [
                'label' => 'Patron Management',
                'icon' => 'bi bi-people-fill',
                'route' => 'users.index',
                'children' => [
                    ['label' => 'All Patrons', 'route' => 'users.index'],
                    ['label' => 'Approved A Patron', 'route' => 'users.create'],
                ],
            ],
            [
                'label' => 'Books Catalog',
                'icon' => 'bi bi-book-half',
                'route' => 'users.index',
                'children' => [
                    ['label' => 'All Books', 'route' => 'users.index'],
                    ['label' => 'Add A Book', 'route' => 'users.create'],
                ],
            ],
                        [
                'label' => 'Reports & Status',
                'icon' => 'bi bi-box-arrow-up-right',
                'route' => 'users.index',
                'children' => [
                    ['label' => 'Current Check-outs', 'route' => 'users.index'],
                    ['label' => 'Overdue Books', 'route' => 'users.create'],
                ],
            ],


        ];

        return view('dashboard', compact('menuItems'));
    }
}