<?PHP
use Ramoose\PieceOfSite\Generators\Menus\Menu;

use Monolog\Logger;
use Monolog\ErrorHandler;

// d(new Monolog\ExceptionHandler);
// $logger = new Logger('Monologger');
// ErrorHandler::register($logger);




// menu = Menu::dropDown()
 //    ->addItem("USA", "/lol.php")
 //    ->addItem("Moon", "/june.php")
 //    ->addItem(Menu::subMenu("Saturn")
 //              ->addItem("Titan")
 //              ->addItem("Tony"))
 //    ->addItem(Menu::subMenu("Mars")
 //              ->addItem("Deimos")
 //              ->addItem(Menu::subMenu("Friends")
 //                        ->addItem(Menu::subMenu("Phoebe")
 //                                  ->addItem("tall")
 //                                  ->addItem("female"))
 //                        ->addItem("Ross")))
 //    ;

$m = Menu::dropDown()
    ->addItem("hello")
    ->addItem("byebye")
    ->addItem("bones")
    ->addItem(Menu::subMenu("SUBBB")

    );


echo $m->saveHTML();
