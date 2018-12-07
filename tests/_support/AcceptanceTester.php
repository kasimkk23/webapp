<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    private $pages = [
        "login" => ['/login', 'Login'],
    	"register" => ['/register', 'Register'],
    	"dashboard" => ['/dashboard', 'Dashboard'],
    	"create post" => ['/posts/create', 'Create Post'],
    	"posts" => ['/posts', 'POSTS'],
    ];

    /**
     * @Given the :arg1 page is opened
     */
     public function thePageIsOpened($arg1)
     {
        $this->amOnPage($this->pages[$arg1][0]);
        $this->see($this->pages[$arg1][1]);
     }

    /**
     * @Given I have filled the :arg1 field with :arg2
     */
     public function iHaveFilledTheFieldWith($arg1, $arg2)
     {
        $this->fillField($arg1, $arg2);
     }

    /**
     * @When I click on the :arg1 button
     */
     public function iClickOnTheButton($arg1)
     {
        $this->click("//*[(@class='btn btn-primary' and @value = '".$arg1."') or (@class='btn btn-danger' and @value = '".$arg1."') or (@class='btn btn-primary' and contains(., '".$arg1."'))]");
     }

     /**
     * @When I click on the navbar
     */
     public function iClickOnTheNavbar()
     {
        $this->click("//a[@id='navbarDropdown']");
     }

     /**
     * @When I click on the logout
     */
     public function iClickOnTheLogout()
     {
        $this->click("//a[@class='dropdown-item'][2]");
     }

     /**
     * @When I click on the :arg1 link
     */
     public function iClickOnTheLink($arg1)
     {
        $this->click("//a[contains(., '".$arg1."')]");
     }


    /**
     * @Then I see the text :arg1
     */
     public function iSeeTheText($arg1)
     {
        $this->see($arg1);
     }
}
