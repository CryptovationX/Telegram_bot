<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('telegram.home');
});

// Account information
Route::get('/account_information/price_plan', function () {
    return view('telegram.account_information.price_plan');
});
Route::get('/account_information/registered_information', function () {
    return view('telegram.account_information.registered_information');
});


// Bot
Route::get('/bot/auto_reply_message', function () {
    return view('telegram.bot.auto_reply_message');
});
Route::get('/bot/auto_reply_message/create', function () {
    return view('telegram.bot.auto_reply_message_creating');
});
Route::get('/bot/broadcast', function () {
    return view('telegram.bot.broadcast');
});
Route::get('/bot/greeting_message', function () {
    return view('telegram.bot.greeting_message');
});
Route::get('/bot/keyword_reply_message', function () {
    return view('telegram.bot.keyword_reply_message');
});
Route::get('/bot/keyword_reply_message/create', function () {
    return view('telegram.bot.keyword_reply_message_creating');
});
Route::get('/bot/message_lists', function () {
    return view('telegram.bot.message_lists');
});

// Group & Chat Management
Route::get('/group_chat_management/announcement', function () {
    return view('telegram.group_chat_management.announcement');
});
Route::get('/group_chat_management/ban_users', function () {
    return view('telegram.group_chat_management.ban_users');
});
Route::get('/group_chat_management/chat_history', function () {
    return view('telegram.group_chat_management.chat_history');
});
Route::get('/group_chat_management/control_panel', function () {
    return view('telegram.group_chat_management.control_panel');
});
Route::get('/group_chat_management/control_panel_main', function () {
    return view('telegram.group_chat_management.control_panel_main');
});

// Setting
Route::get('/setting/basic', function () {
    return view('telegram.setting.basic');
});
