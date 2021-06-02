const LoginPage = require('../pageobjects/login.page');
const SecurePage = require('../pageobjects/secure.page');

describe('My Login application', () => {
    it('should login with valid credentials', async () => {
        await LoginPage.open('index.html');
        await browser.pause( 2000 );
        await LoginPage.login('myuser', 'az12');
        await browser.pause( 2000 );
        const elem = $('#fh5co-logo');
        await browser.pause( 2000 );
        await expect(elem).toHaveTextContaining(
            'SH4RE');
    });
});


