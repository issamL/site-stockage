const Page = require('./page');

class SignupPage extends Page{

    get inputUsername () { return $('#name') }
    get inputPassword () { return $('#password') }
    get inputEmail() {return $('#email')}
    get btnSignInSubmit () { return $('#signUpSubmit') }

    async signup (username, email, password) {
        await (await $('#signUp')).click();
        await (await this.inputUsername).setValue(username);
        await browser.pause( 2000 );
        await (await this.inputEmail).setValue(email);
        await browser.pause( 2000 );
        await (await this.inputPassword).setValue(password);
        await browser.pause( 2000 );
        await (await this.btnSignInSubmit).click();
    }

    open () {
        return super.open('login.html');
    }
}
module.exports = new SignupPage();
