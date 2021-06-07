const LoginPage = require('../pageobjects/login.page');
const SignupPage = require('../pageobjects/signup.page');


describe('My login form', () => {

    it('should login with valid credentials', async () => {
        await LoginPage.open('login.html');
        await browser.pause(2000);
        await LoginPage.login('myuser', 'az12');
        await browser.pause(2000);
        const elem = $('#fh5co-logo');
        await browser.pause(2000);
        await expect(elem).toHaveTextContaining('SH4RE');
    });

    it('should not login with invalid credentials: false username or password', async () => {
        await LoginPage.open('login.html');
        await browser.pause(2000);
        await LoginPage.login('NOTmyuser', 'azerty123');
        await browser.pause(2000);
        await expect(browser).toHaveUrlContaining('login.html?user=false');
    });

    it('should not login with invalid credentials: empty username', async () => {
        await LoginPage.open('login.html');
        await browser.pause(2000);
        await LoginPage.login('', 'azerty123');
        await browser.pause(2000);
        await expect(browser).toHaveUrlContaining('login.html?error=emptyinput');
    });

    it('should not login with invalid credentials: empty password', async () => {
        await LoginPage.open('login.html');
        await browser.pause(2000);
        await LoginPage.login('NOTmyuser', '');
        await browser.pause(2000);
        await expect(browser).toHaveUrlContaining('login.html?error=emptyinput');
    });
});


describe('My signUp form', () => {
    it('should signup with valid credentials', async () => {
        await SignupPage.open('login.html');
        await browser.pause( 2000 );
        const username = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
        await SignupPage.signup(username, 'testmail@mail.com','azerty123');
        await browser.pause( 1000 );
        const elem = $('#fh5co-logo');
        await expect(elem).toHaveTextContaining('SH4RE');
    });
    it('should not signup with invalid credentials: username already exists', async () => {
        await SignupPage.open('login.html');
        await browser.pause( 2000 );
        await SignupPage.signup('myuser', 'testmail@mail.com','azerty123');
        await browser.pause( 2000 );
        await expect(browser).toHaveUrlContaining('login.html?error=username_exists');
    });
    it('should not signup with invalid credentials: empty username', async () => {
        await SignupPage.open('login.html');
        await browser.pause( 1000 );
        await SignupPage.signup('', 'testmail@mail.com','azerty123');
        await browser.pause( 2000 );
        await expect(browser).toHaveUrlContaining('login.html?error=emptyinput');
    });

    it('should not signup with invalid credentials: empty mail', async () => {
        await SignupPage.open('login.html');
        await browser.pause( 2000 );
        await SignupPage.signup('uname', '','azerty123');
        await browser.pause( 2000 );
        await expect(browser).toHaveUrlContaining('login.html?error=emptyinput');
    });
    it('should not signup with invalid credentials: empty password', async () => {
        await SignupPage.open('login.html');
        await browser.pause( 2000 );
        await SignupPage.signup('uname', 'testmail@mail.com','');
        await browser.pause( 1000 );
        await expect(browser).toHaveUrlContaining('login.html?error=emptyinput');
    });
});


