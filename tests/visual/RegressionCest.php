<?php 

class RegressionCest
{
    // public function home(VisualTester $I)
    // {
    // 	$I->amOnPage('/');
    //     $I->dontSeeVisualChanges("homepage", "body");
    // }

    // public function login(VisualTester $I)
    // {
    // 	$I->amOnPage('/login');
    //     $I->dontSeeVisualChanges("login", "body");
    // }

    // public function register(VisualTester $I)
    // {
    // 	$I->amOnPage('/register');
    //     $I->dontSeeVisualChanges("register", "body");
    // }

    public function registerhome(VisualTester $I){
    	$I->amOnPage('/');
    	$I->wait(3);
    	$I->dontSeeVisualChanges("homepage", "body");
    	$I->amOnPage('/register');
    	$I->dontSeeVisualChanges("register", "body");
    }

    public function login(VisualTester $I)
    {
    	
    	$I->amOnPage('/login');
        $I->dontSeeVisualChanges("login", "body");
        $I->amOnPage('/login');
		$I->fillField('email', 'rynhrs@gmail.com');
		$I->fillField('password', '123456abc');
		$I->click("//button[@class='btn btn-primary']");
		$I->see('Your Blog Posts');
    	$I->amOnPage('/dashboard');
        $I->dontSeeVisualChanges("dashboard", "body");
        $I->amOnPage('/posts/create');
        $I->dontSeeVisualChanges("create", "body");
        $I->fillField('title', 'I am new post');
		$I->fillField('body', 'What is this new post ?');
		$I->click("//form/input[@class='btn btn-primary']");
    	$I->amOnPage('/dashboard');
    	//$I->reloadIfElementNotFound()
		$I->click("Kasim Films Subscription");
		$I->amOnPage('/dashboard');
		$I->click("I am new post");
		$I->click("//a[@class='btn btn-primary']"); //edit button
		$I->fillField('title', 'I am new post EDIT');
		$I->fillField('body', 'What is this new post EDIT ?');
		$I->click("//form/input[@class='btn btn-primary']");
    	$I->amOnPage('/dashboard');
    	$I->wait(1);
		$I->click("I am new post EDIT");
		$I->click("//input[@class='btn btn-danger']"); //delete button
		$I->amOnPage('/posts');
		$I->dontSeeVisualChanges("posts", "body");
    }
   
}
