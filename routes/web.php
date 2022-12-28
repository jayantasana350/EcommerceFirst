<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'FrontEndController@Front')->name('Front');
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

// User Permissions Route
Route::post('/role-store', 'RolePermssionController@RoleStore')->name('RoleStore');
Route::post('/role-update', 'RolePermssionController@RoleUpdate')->name('RoleUpdate');
Route::get('/role-list', 'RolePermssionController@RoleList')->name('RoleList');
Route::post('/permission-store', 'RolePermssionController@PermissionStore')->name('PermissionStore');
Route::post('/update-permission', 'RolePermssionController@UpdatePermission')->name('UpdatePermission');
Route::post('/role-add-to-permission', 'RolePermssionController@RoleAddToPermission')->name('RoleAddToPermission');
Route::post('/role-add-to-user', 'RolePermssionController@RoleAddToUser')->name('RoleAddToUser');
Route::post('/update-role-add-to-user', 'RolePermssionController@UpdateRoleAddToUser')->name('UpdateRoleAddToUser');
Route::post('/user-delete/{id}', 'RolePermssionController@UserDelete')->name('UserDelete');
Route::get('/user-restore/{id}', 'RolePermssionController@UserRestore')->name('UserRestore');
Route::get('/user-permanent-delete/{id}', 'RolePermssionController@UserPermanentDelete')->name('UserPermanentDelete');

// Category Route
Route::get('/category', 'CategoryController@Category')->name('Category');
Route::post('/category-store', 'CategoryController@CategoryStore')->name('CategoryStore');
Route::post('/category-update', 'CategoryController@CategoryUpdate')->name('CategoryUpdate');
Route::get('/category-delete/{id}', 'CategoryController@CategoryDelete')->name('CategoryDelete');
Route::get('/category-restore/{id}', 'CategoryController@CategoryRestore')->name('CategoryRestore');
Route::get('/category-permanent/delete/{id}', 'CategoryController@CategoryPermanentDelete')->name('CategoryPermanentDelete');
Route::post('/subcategory-store', 'CategoryController@SubCategoryStore')->name('SubCategoryStore');
Route::post('/subcategory-update', 'CategoryController@SubCategoryUpdate')->name('SubCategoryUpdate');
Route::get('/subcategory-delete/{id}', 'CategoryController@SubCategoryDelete')->name('SubCategoryDelete');
Route::get('/subcategory-restore/{id}', 'CategoryController@SubCategoryRestore')->name('SubCategoryRestore');
Route::get('/subcategory-permanent-delete/{id}', 'CategoryController@SubCategoryPermanentDelete')->name('SubCategoryPermanentDelete');

// Color Route
Route::get('/colors', 'ColorController@Colors')->name('Colors');
Route::post('/color-store', 'ColorController@ColorStore')->name('ColorStore');
Route::post('/color-update', 'ColorController@ColorUpdate')->name('ColorUpdate');
Route::get('/color-delete/{id}', 'ColorController@ColorDelete')->name('ColorDelete');
Route::get('/color-restore/{id}', 'ColorController@ColorRestore')->name('ColorRestore');
Route::get('/color-permanent-delete/{id}', 'ColorController@ColorParmanentDelete')->name('ColorParmanentDelete');

// Color Route
Route::get('/sizes', 'SizeController@Sizes')->name('Sizes');
Route::post('/size-store', 'SizeController@SizeStore')->name('SizeStore');
Route::post('/size-update', 'SizeController@SizeUpdate')->name('SizeUpdate');
Route::get('/size-delete/{id}', 'SizeController@SizeDelete')->name('SizeDelete');
Route::get('/size-restore/{id}', 'SizeController@SizeRestore')->name('SizeRestore');
Route::get('/size-parmanent-delete/{id}', 'SizeController@SizePermanentDelete')->name('SizePermanentDelete');

// Brand Route
Route::get('/brands', 'BrandController@Brands')->name('Brands');
Route::post('/brand-store', 'BrandController@BrandStore')->name('BrandStore');
Route::post('/brand-update', 'BrandController@BrandUpdate')->name('BrandUpdate');
Route::get('/brand-delete/{id}', 'BrandController@BrandDelete')->name('BrandDelete');
Route::get('/brand-restore/{id}', 'BrandController@BrandRestore')->name('BrandRestore');
Route::get('/brand-parmanent-delete/{id}', 'BrandController@BrandPermanentDelete')->name('BrandPermanentDelete');

// Brand Route
Route::get('/products-lists', 'ProductController@ProducstLists')->name('ProducstLists');
Route::get('/add-products', 'ProductController@AddProducts')->name('AddProducts');
Route::post('/product-store', 'ProductController@ProductStore')->name('ProductStore');
Route::get('/product-edit/{id}', 'ProductController@ProductEdit')->name('ProductEdit');
Route::post('/product-update', 'ProductController@ProductUpdate')->name('ProductUpdate');
Route::get('/product-gallery-edit/{id}', 'ProductController@ProductGalleryEdit')->name('ProductGalleryEdit');
Route::get('/product-gallery-delete/{id}', 'ProductController@ProductGalleryDelete')->name('ProductGalleryDelete');
Route::post('/product-gallery-update', 'ProductController@ProductGalleryUpdate')->name('ProductGalleryUpdate');
Route::get('/product-restore/{id}', 'ProductController@ProductRestore')->name('ProductRestore');
Route::get('/product-delete/{id}', 'ProductController@ProductDelete')->name('ProductDelete');
Route::get('/product-permanernt-delete/{id}', 'ProductController@ProductPermanentDelete')->name('ProductPermanentDelete');

// Frontend Route
Route::get('/shop-quick-view/{id}', 'FrontEndController@ShopQuicView')->name('ShopQuicView');
Route::get('/single-product/{slug}', 'FrontEndController@SingleProduct')->name('SingleProduct');
Route::get('/shop', 'FrontEndController@ShopPage')->name('ShopPage');

// Ajax Route For Variaiotn
// Route::get('/product/get/size/{color}/{product}', 'FrontEndController@GetSize')->name('GetSize');
// Route::get('/product/get/price/{size}/{product}', 'FrontEndController@GetPrice')->name('GetPrice');
// Route::post('/product/get/color/to/price', 'FrontEndController@GetColorToPrice')->name('GetColorToPrice');
Route::post('/product/get/size/to/price', 'FrontEndController@GetSizeToPrice')->name('GetSizeToPrice');
Route::post('/product/get/color/to/size', 'FrontEndController@GetColorToSize')->name('GetColorToSize');
Route::get('/product/get/size/wise/color/{size}/{product}', 'FrontEndController@GetSizeWiseColor')->name('GetSizeWiseColor');
Route::get('/product/get/res/color/to/price/{color}/{product}', 'FrontEndController@GetResColorToPrice')->name('GetResColorToPrice');
Route::get('/product/get/color/wise/size/{color}/{product}', 'FrontEndController@GetColorWiseSize')->name('GetColorWiseSize');
Route::get('/product/get/size/wise/price/{price}/{product}', 'FrontEndController@GetSizeWisePrice')->name('GetSizeWisePrice');

Route::post('/add/to/cart', 'CartController@AddToCart')->name('AddToCart');
// Route::get('/cart/page', 'CartController@CartPage')->name('CartPage');
Route::get('/cart/page', 'CartController@CartPage')->name('CartPage');
Route::post('/update/cart', 'CartController@UpdateCart')->name('UpdateCart');
Route::get('/single/cart/delete/{id}', 'CartController@SingleCartDelete')->name('SingleCartDelete');

Route::get('/product/checkout', 'CheckoutController@ProductCheckout')->name('ProductCheckout');
Route::get('/api/get-state-list/{id}', 'CheckoutController@GetState')->name('GetState');
Route::get('api/get-city-list/{id}', 'CheckoutController@GetCity')->name('GetCity');
Route::get('/coupon', 'CartController@CouponAdd')->name('CouponAdd');
Route::post('/payment', 'PaymentController@MakePayment')->name('MakePayment');

Route::get('/order', 'HomeController@Order')->name('Order');
Route::get('/order/export', 'HomeController@OrderExport')->name('OrderExport');
// Route::get('/order/import', 'HomeController@import')->name('import');
Route::post('/order/excel/import', 'HomeController@import')->name('ExcelImport');
Route::post('/selected/date/excel/download', 'HomeController@SelectedDateDownload')->name('SelectedDateDownload');
Route::get('/pdf/download', 'HomeController@PDFDownload')->name('PDFDownload');

Route::get('/login-with-github', 'SocialController@LoginWithGithub')->name('LoginWithGithub');
Route::get('/git-hub-callback-url', 'SocialController@GithubCallBackURL')->name('GithubCallBackURL');

Route::get('/login-with-google', 'SocialController@LoginWithGoogle')->name('LoginWithGoogle');
Route::get('/google-callback-url', 'SocialController@GoogleCallBackURL')->name('GoogleCallBackURL');

Route::get('/blog-details', 'FrontEndController@BlogDetails')->name('BlogDetails');
// Route::get('/singl-blog/{slug}', 'FrontEndController@SingleBlog')->name('SingleBlog');
Route::get('/blog-left-sidebar', 'FrontEndController@BlogLeftSidebar')->name('BlogLeftSidebar');
Route::get('/blog-right-sidebar', 'FrontEndController@BlogRightSidebar')->name('BlogRightSidebar');
Route::get('/blog-no-sidebar', 'FrontEndController@BlogNoSidebar')->name('BlogNoSidebar');


Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('blog', 'BlogController');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/cart-modal', 'FrontEndController@CartModal')->name('CartModal');
Route::get('/qty-counter', 'FrontEndController@QTYCounter')->name('QTYCounter');
Route::get('/cart-top', 'FrontEndController@CartTop')->name('CartTop');
Route::get('/cart-bottom', 'FrontEndController@CartBottom')->name('CartBottom');
Route::get('/cart-left', 'FrontEndController@CartLeft')->name('CartLeft');
Route::get('/cart-right', 'FrontEndController@CartRight')->name('CartRight');
Route::get('/newsletter', 'FrontEndController@NewsLetter')->name('NewsLetter');
Route::get('/exit', 'FrontEndController@Exit')->name('Exit');
Route::get('/christmas', 'FrontEndController@Christmas')->name('Christmas');
Route::get('/black-friday', 'FrontEndController@BlackFriday')->name('BlackFriday');
Route::get('/cyber-monday', 'FrontEndController@CyberMonday')->name('CyberMonday');
Route::get('/new-year', 'FrontEndController@NewYear')->name('NewYear');
Route::get('/cookie-bottom', 'FrontEndController@CookieBottom')->name('CookieBottom');
Route::get('/cookie-left', 'FrontEndController@CookieLeft')->name('CookieLeft');
Route::get('/cookie-right', 'FrontEndController@CookieRight')->name('CookieRight');
Route::get('/ajax-search', 'FrontEndController@AjaxSearch')->name('AjaxSearch');
Route::get('/invoice-one', 'FrontEndController@InvoiceOne')->name('InvoiceOne');
Route::get('/invoice-two', 'FrontEndController@InvoiceTwo')->name('InvoiceTwo');
Route::get('/invoice-three', 'FrontEndController@InvoiceThree')->name('InvoiceThree');
Route::get('/invoice-four', 'FrontEndController@InvoiceFour')->name('InvoiceFour');
Route::get('/order-success', 'FrontEndController@OrderSuccess')->name('OrderSuccess');
Route::get('/order-success2', 'FrontEndController@OrderSuccess2')->name('OrderSuccess2');
Route::get('/email-template', 'FrontEndController@EmailTemplate')->name('EmailTemplate');
Route::get('/email-template2', 'FrontEndController@EmailTemplate2')->name('EmailTemplate2');
Route::get('/elements-page', 'FrontEndController@ElementsPage')->name('ElementsPage');


Route::get('/top-filter', 'FrontEndController@TopFilter')->name('TopFilter');
Route::get('/modern', 'FrontEndController@Modern')->name('Modern');
Route::get('/left-sidebar', 'FrontEndController@LeftSidebar')->name('LeftSidebar');
Route::get('/right-sidebar', 'FrontEndController@RightSidebar')->name('RightSidebar');
Route::get('/no-sidebar', 'FrontEndController@NoSidebar')->name('NoSidebar');
Route::get('/sidebar-popup', 'FrontEndController@SidebarPopUp')->name('SidebarPopUp');
Route::get('/metro', 'FrontEndController@Metro')->name('Metro');
Route::get('/full-width', 'FrontEndController@FullWidth')->name('FullWidth');
Route::get('/initiate-scroll', 'FrontEndController@InitiateScroll')->name('InitiateScroll');
Route::get('/three-grid', 'FrontEndController@ThreeGrid')->name('ThreeGrid');
Route::get('/six-grid', 'FrontEndController@SixGrid')->name('SixGrid');
Route::get('/last-grid', 'FrontEndController@LastGrid')->name('LastGrid');

Route::get('/360-view', 'FrontEndController@360View')->name('360View');
Route::get('/video-thumbnail', 'FrontEndController@VideoThumbnail')->name('VideoThumbnail');
Route::get('/thumbnail-image-left', 'FrontEndController@ThumbnailImageLeft')->name('ThumbnailImageLeft');
Route::get('/thumbnail-image-right', 'FrontEndController@ThumbnailImageRight')->name('ThumbnailImageRight');
Route::get('/thumbnail-image-outside', 'FrontEndController@ThumbnailImageOut')->name('ThumbnailImageOut');
Route::get('/thumbnail-left', 'FrontEndController@ThumbnailLeft')->name('ThumbnailLeft');
Route::get('/thumbnail-right', 'FrontEndController@ThumbnailRight')->name('ThumbnailRight');
Route::get('/thumbnail-bottom', 'FrontEndController@ThumbnailBottom')->name('ThumbnailBottom');
Route::get('/four-image', 'FrontEndController@FourImage')->name('FourImage');
Route::get('/sticky', 'FrontEndController@Sticky')->name('Sticky');
Route::get('/accordian', 'FrontEndController@Accordian')->name('Accordian');
Route::get('/bundle', 'FrontEndController@Bundle')->name('Bundle');
Route::get('/image-swatch', 'FrontEndController@ImageSwatch')->name('ImageSwatch');
Route::get('/vertical-tab', 'FrontEndController@VerticalTab')->name('VerticalTab');

Route::get('/vendor-dashboard', 'FrontEndController@VendorDashboard')->name('VendorDashboard');
Route::get('/vendor-profile', 'FrontEndController@VendorProfile')->name('VendorProfile');
Route::get('/become-vendor', 'FrontEndController@BecomeVendor')->name('BecomeVendor');
Route::get('/wishlist', 'FrontEndController@Wishlist')->name('Wishlist');
Route::get('/cart-page', 'FrontEndController@Cart')->name('Cart');
Route::get('/front-dashbard', 'FrontEndController@FrontDashboard')->name('FrontDashboard');
Route::get('/contact', 'FrontEndController@Contact')->name('Contact');
Route::get('/forget-password', 'FrontEndController@ForgetPassword')->name('ForgetPassword');
Route::get('/profile', 'FrontEndController@Profile')->name('Profile');
Route::get('/order-success', 'FrontEndController@OrderSuccess')->name('OrderSuccess');
Route::get('/order-tracking', 'FrontEndController@OrderTracking')->name('OrderTracking');
Route::get('/portfolio-grid', 'FrontEndController@PortfolioGrid')->name('PortfolioGrid');
Route::get('/portfolio-mesonary', 'FrontEndController@PortfolioMasonary')->name('PortfolioMasonary');
Route::get('/about-us', 'FrontEndController@AboutUs')->name('AboutUs');
Route::get('/search', 'FrontEndController@Search')->name('Search');
Route::get('/review', 'FrontEndController@Review')->name('Review');
Route::get('/compare', 'FrontEndController@Compare')->name('Compare');
Route::get('/collection', 'FrontEndController@Collection')->name('Collection');
Route::get('/lookbook', 'FrontEndController@Lookbook')->name('Lookbook');
Route::get('/site-map', 'FrontEndController@SiteMap')->name('SiteMap');
Route::get('/404-page', 'FrontEndController@404Page')->name('404Page');
Route::get('/comming-soon', 'FrontEndController@CommingSoon')->name('CommingSoon');
Route::get('/FAQ', 'FrontEndController@FAQ')->name('FAQ');

