/*
	Simple OpenID Plugin
	http://code.google.com/p/openid-selector/
	
	This code is licensed under the New BSD License.
*/

var providers_large = {
	google : {
		name : 'Google',
		url : 'https://www.google.com/accounts/o8/id'
	}
//        ,
//	yahoo : {
//		name : 'Yahoo',
//		url : 'http://me.yahoo.com/'
//	},
//	aol : {
//		name : 'AOL',
//		label : 'AOLã?®ã‚¹ã‚¯ãƒªãƒ¼ãƒ³ãƒ?ãƒ¼ãƒ ã‚’è¨˜å…¥ã?—ã?¦ã??ã? ã?•ã?„ã€‚',
//		url : 'http://openid.aol.com/{username}'
//	},
//	myopenid : {
//		name : 'MyOpenID',
//		label : 'MyOpenIDã?®ãƒ¦ãƒ¼ã‚¶ãƒ¼ãƒ?ãƒ¼ãƒ ã‚’è¨˜å…¥ã?—ã?¦ã??ã? ã?•ã?„ã€‚',
//		url : 'http://{username}.myopenid.com/'
//	},
//	openid : {
//		name : 'OpenID',
//		label : 'OpenIDã‚’è¨˜å…¥ã?—ã?¦ã??ã? ã?•ã?„ã€‚',
//		url : null
//	}
};

var providers_small = {
//	livejournal : {
//		name : 'LiveJournal',
//		label : 'LiveJournalã?®ãƒ¦ãƒ¼ã‚¶ãƒ¼ãƒ?ãƒ¼ãƒ ã‚’è¨˜å…¥ã?—ã?¦ã??ã? ã?•ã?„ã€‚',
//		url : 'http://{username}.livejournal.com/'
//	},
	/* flickr: {
		name: 'Flickr',        
		label: 'Flickrã?®ãƒ¦ãƒ¼ã‚¶ãƒ¼ãƒ?ãƒ¼ãƒ ã‚’è¨˜å…¥ã?—ã?¦ã??ã? ã?•ã?„ã€‚',
		url: 'http://flickr.com/{username}/'
	}, */
	/* technorati: {
		name: 'Technorati',
		label: 'Technoratiã?®ãƒ¦ãƒ¼ã‚¶ãƒ¼ãƒ?ãƒ¼ãƒ ã‚’è¨˜å…¥ã?—ã?¦ã??ã? ã?•ã?„ã€‚',
		url: 'http://technorati.com/people/technorati/{username}/'
	}, */
//	wordpress : {
//		name : 'Wordpress',
//		label : 'Wordpress.comã?®ãƒ¦ãƒ¼ã‚¶ãƒ¼ãƒ?ãƒ¼ãƒ ã‚’è¨˜å…¥ã?—ã?¦ã??ã? ã?•ã?„ã€‚',
//		url : 'http://{username}.wordpress.com/'
//	},
//	blogger : {
//		name : 'Blogger',
//		label : 'Bloggerã?®ã‚¢ã‚«ã‚¦ãƒ³ãƒˆã‚’è¨˜å…¥ã?—ã?¦ã??ã? ã?•ã?„ã€‚',
//		url : 'http://{username}.blogspot.com/'
//	},
//	verisign : {
//		name : 'Verisign',
//		label : 'Verisignã?®ãƒ¦ãƒ¼ã‚¶ãƒ¼ãƒ?ãƒ¼ãƒ ã‚’è¨˜å…¥ã?—ã?¦ã??ã? ã?•ã?„ã€‚',
//		url : 'http://{username}.pip.verisignlabs.com/'
//	},
	/* vidoop: {
		name: 'Vidoop',
		label: 'Vidoopã?®ãƒ¦ãƒ¼ã‚¶ãƒ¼ãƒ?ãƒ¼ãƒ ã‚’è¨˜å…¥ã?—ã?¦ã??ã? ã?•ã?„ã€‚',
		url: 'http://{username}.myvidoop.com/'
	}, */
	/* launchpad: {
		name: 'Launchpad',
		label: 'Launchpadã?®ãƒ¦ãƒ¼ã‚¶ãƒ¼ãƒ?ãƒ¼ãƒ ã‚’è¨˜å…¥ã?—ã?¦ã??ã? ã?•ã?„ã€‚',
		url: 'https://launchpad.net/~{username}'
	}, */
//	claimid : {
//		name : 'ClaimID',
//		label : 'ClaimIDã?®ãƒ¦ãƒ¼ã‚¶ãƒ¼ãƒ?ãƒ¼ãƒ ã‚’è¨˜å…¥ã?—ã?¦ã??ã? ã?•ã?„ã€‚',
//		url : 'http://claimid.com/{username}'
//	},
//	clickpass : {
//		name : 'ClickPass',
//		label : 'ClickPassã?®ãƒ¦ãƒ¼ã‚¶ãƒ¼ãƒ?ãƒ¼ãƒ ã‚’è¨˜å…¥ã?—ã?¦ã??ã? ã?•ã?„ã€‚',
//		url : 'http://clickpass.com/public/{username}'
//	},
//	google_profile : {
//		name : 'Google Profile',
//		label : 'Google Profileã?®ãƒ¦ãƒ¼ã‚¶ãƒ¼ãƒ?ãƒ¼ãƒ ã‚’è¨˜å…¥ã?—ã?¦ã??ã? ã?•ã?„ã€‚',
//		url : 'http://www.google.com/profiles/{username}'
//	}
};

openid.locale = 'jp';
openid.sprite = 'en'; // use same sprite as english localization
openid.demo_text = 'ä»Šã‚¯ãƒ©ã‚¤ã‚¢ãƒ³ãƒˆãƒ‡ãƒ¢ãƒ¢ãƒ¼ãƒ‰ã?«ã?ªã?£ã?¦ã?„ã?¾ã?™ã€‚æ™®é€šã?¯æ¬¡ã?®OpenIDã‚’å‡ºã?•ã?ªã?‘ã‚Œã?°ã?„ã?‘ã?¾ã?›ã‚“:';
openid.signin_text = 'ãƒ­ã‚°ã‚¤ãƒ³';
openid.image_title = '{provider}ã?§ãƒ­ã‚°ã‚¤ãƒ³';