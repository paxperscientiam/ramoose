<?PHP namespace Ramoose\PieceOfSite\Generators\Menus;

class Simple extends Base
{
    public function __construct()
    {
        self::$classes[] = "simple";
        self::$subMenuClasses[] = "nested menu";
    }
}
