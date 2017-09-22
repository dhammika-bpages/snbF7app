// Initialize your app
var myApp = new Framework7();

// Export selectors engine
var $$ = Dom7;

// Add view
var mainView = myApp.addView('.view-main', {
    // Because we use fixed-through navbar we can enable dynamic navbar
    dynamicNavbar: true    
});

// Callbacks to run specific code for specific pages, for example for About page:
myApp.onPageInit('index', function (page) {
    // run createContentPage func after link was clicked
    $$('.click-makewish').on('click', function () {
        createContentPage();
    });

    $$('.click-support').on('click', function () {
        viewChosenWishesPage();
    });

    $$('.click-dashboard').on('click', function () {
        $$.get('path-to-file.php', {id: 3}, function (data) {
  console.log(data);
        });
        var user = gotoDashboardPage();
    });    

}).trigger();

// Generate dynamic page
var dynamicPageIndex = 0;
function createContentPage() {
    mainView.router.loadPage('/addWishForm.php');
	return;
}

function viewChosenWishesPage() {
    mainView.router.loadPage('/chosenWishes.php');
	return;
}

function gotoDashboardPage() {
    mainView.router.loadPage('/chosenWishes.php');
    return user;
}