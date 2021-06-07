const Page = require('./page');

/**
 * sub page containing specific selectors and methods for a specific page
 */
class LoginPage extends Page {
    /**
     * define selectors using getter methods
     */
    get inputUsername () { return $('#username') }
    get inputPassword () { return $('#pwd') }
    get btnSignInSubmit () { return $('#signInSubmit') }

    /**
     * a method to encapsule automation code to interact with the page
     * e.g. to login using username and password
     */
    async login (username, password) {
        await (await this.inputUsername).setValue(username);
        await browser.pause( 2000 );
        await (await this.inputPassword).setValue(password);
        await browser.pause( 2000 );
        await (await this.btnSignInSubmit).click();
    }

    /**
     * overwrite specifc options to adapt it to page object
     */
    open () {
        return super.open('login.html');
    }
}

module.exports = new LoginPage();
