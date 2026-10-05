<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/meals', function() {
    return response()->json([
        [
        "id" => 1,
        "name" => "Chicken Adobo", 
        "price" => 75, 
        "available" => true
        ],
        [
        "id" => 2, 
        "name" => "Pancit", 
        "price" => 50, 
        "available" => true
        ],
        [
        "id" => 3, 
        "name" => "Burger", 
        "price" => 45, 
        "available" => false
        ]
    ]);
});

Route::get('/categories', function() {
    return response()->json([
        [
        "id" => 1, 
        "name" => "Rice Meals"
        ],
        [
        "id" => 2, 
        "name" => "Snacks"
        ],
        [
        "id" => 3, 
        "name" => "Drinks"
        ]
    ]);
});

Route::get('/orders', function() {
    return response()->json([
        [
        "id" => 1, 
        "meal_name" => "Chicken Adobo", 
        "quantity" => 2, 
        "total_price" => 150, 
        "status" => "pending"
        ],
        [
        "id" => 2, 
        "meal_name" => "Pancit", 
        "quantity" => 1, 
        "total_price" => 50, 
        "status" => "ready"
        ]
    ]);
});

Route::get('/vendors', function() {
    return response()->json([
        [
        "id" => 1, 
        "stall_name" => "Kuya Zoross' Stall", 
        "is_open" => true
        ],
        [
        "id" => 2, 
        "stall_name" => "Ate Shannaia's Grill", 
        "is_open" => true
        ]
    ]);
});

Route::get('/announcements', function() {
    return response()->json([
        [
        "id" => 1, 
        "title" => "No Pork Today", 
        "message" => "No pork meals available"
        ],
        [
        "id" => 2, 
        "title" => "Early Closing", 
        "message" => "Canteen closes at 4PM"]
    ]);
});

Route::get('/sales', function() {
    return response()->json([
        "total_meals" => 3,
        "total_orders" => 2,
        "total_sales" => 200,
        "pending_orders" => 1
    ]);
});