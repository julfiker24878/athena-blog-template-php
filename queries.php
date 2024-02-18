<?php 

require 'db.php';

// LOGO
$select_logo = "SELECT * FROM logo";
$logo_query = mysqli_query($db_connect, $select_logo);
$assoc_logo = mysqli_fetch_assoc($logo_query);

// CATEGORY
$select_category = "SELECT * FROM category ORDER BY id DESC";
$category_query = mysqli_query($db_connect, $select_category);

$select_category2 = "SELECT * FROM category";
$category_query2 = mysqli_query($db_connect, $select_category2);

//SOCIAL ACCOUNTS
$select_social_accounts = "SELECT * FROM social_accounts WHERE status=1";
$social_account_query = mysqli_query($db_connect, $select_social_accounts);

//FOOTER CREDIT
$select_footer_credit = "SELECT * FROM footer_credit";
$footer_credit_query = mysqli_query($db_connect, $select_footer_credit);
$assoc_footer_credit = mysqli_fetch_assoc($footer_credit_query);

//IMPORTANT LINKS
$select_important_links = "SELECT * FROM important_links";
$important_links_query = mysqli_query($db_connect, $select_important_links);

//TAGS
$select_tags = "SELECT * FROM tags";
$tags_query2 = mysqli_query($db_connect, $select_tags);

//BLOG
$select_blogs = "SELECT * FROM blogs ORDER BY id DESC LIMIT 5";
$blogs_query = mysqli_query($db_connect, $select_blogs);

$select_inspiration_blogs = "SELECT * FROM blogs WHERE category='Inspiration' ORDER BY id DESC LIMIT 5";
$select_inspiration_blogs_query = mysqli_query($db_connect, $select_inspiration_blogs);

$select_blogs_four = "SELECT * FROM blogs ORDER BY id DESC LIMIT 4";
$blogs_four_query = mysqli_query($db_connect, $select_blogs_four);

$select_asc_blogs_four = "SELECT * FROM blogs ORDER BY id ASC LIMIT 2, 4";
$blogs_asc_four_query = mysqli_query($db_connect, $select_asc_blogs_four);

$select_blogs_two = "SELECT * FROM blogs ORDER BY id ASC LIMIT 2";
$blogs_two_query = mysqli_query($db_connect, $select_blogs_two);

$select_blogs_three = "SELECT * FROM blogs ORDER BY id DESC LIMIT 3";
$blogs_three_query = mysqli_query($db_connect, $select_blogs_three);

$select_health_post_two = "SELECT * FROM blogs WHERE category='Health' LIMIT 2";
$select_health_post_two_query = mysqli_query($db_connect, $select_health_post_two);

$select_lifestyle_post_three = "SELECT * FROM blogs WHERE category='Lifestyle' LIMIT 3";
$select_lifestyle_post_three_query = mysqli_query($db_connect, $select_lifestyle_post_three);