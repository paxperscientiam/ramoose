<?PHP namespace Ramoose\PieceOfSite\Generators\Menus\Foundation;

class Drilldown
{
    public $classes = [];
    public $subMenuClasses = [];
    public $menuData = [];

    public function __construct()
    {
        $this->classes[] = "menu vertical drilldown";
        $this->subMenuClasses[] = "menu nested vertical";
        $this->menuData[] = "data-drilldown";
    }
}
