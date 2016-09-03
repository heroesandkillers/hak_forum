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
//		label : 'AOL�?�スクリーン�?ームを記入�?��?��??�?��?��?�。',
//		url : 'http://openid.aol.com/{username}'
//	},
//	myopenid : {
//		name : 'MyOpenID',
//		label : 'MyOpenID�?�ユーザー�?ームを記入�?��?��??�?��?��?�。',
//		url : 'http://{username}.myopenid.com/'
//	},
//	openid : {
//		name : 'OpenID',
//		label : 'OpenIDを記入�?��?��??�?��?��?�。',
//		url : null
//	}
};

var providers_small = {
//	livejournal : {
//		name : 'LiveJournal',
//		label : 'LiveJournal�?�ユーザー�?ームを記入�?��?��??�?��?��?�。',
//		url : 'http://{username}.livejournal.com/'
//	},
	/* flickr: {
		name: 'Flickr',        
		label: 'Flickr�?�ユーザー�?ームを記入�?��?��??�?��?��?�。',
		url: 'http://flickr.com/{username}/'
	}, */
	/* technorati: {
		name: 'Technorati',
		label: 'Technorati�?�ユーザー�?ームを記入�?��?��??�?��?��?�。',
		url: 'http://technorati.com/people/technorati/{username}/'
	}, */
//	wordpress : {
//		name : 'Wordpress',
//		label : 'Wordpress.com�?�ユーザー�?ームを記入�?��?��??�?��?��?�。',
//		url : 'http://{username}.wordpress.com/'
//	},
//	blogger : {
//		name : 'Blogger',
//		label : 'Blogger�?�アカウントを記入�?��?��??�?��?��?�。',
//		url : 'http://{username}.blogspot.com/'
//	},
//	verisign : {
//		name : 'Verisign',
//		label : 'Verisign�?�ユーザー�?ームを記入�?��?��??�?��?��?�。',
//		url : 'http://{username}.pip.verisignlabs.com/'
//	},
	/* vidoop: {
		name: 'Vidoop',
		label: 'Vidoop�?�ユーザー�?ームを記入�?��?��??�?��?��?�。',
		url: 'http://{username}.myvidoop.com/'
	}, */
	/* launchpad: {
		name: 'Launchpad',
		label: 'Launchpad�?�ユーザー�?ームを記入�?��?��??�?��?��?�。',
		url: 'https://launchpad.net/~{username}'
	}, */
//	claimid : {
//		name : 'ClaimID',
//		label : 'ClaimID�?�ユーザー�?ームを記入�?��?��??�?��?��?�。',
//		url : 'http://claimid.com/{username}'
//	},
//	clickpass : {
//		name : 'ClickPass',
//		label : 'ClickPass�?�ユーザー�?ームを記入�?��?��??�?��?��?�。',
//		url : 'http://clickpass.com/public/{username}'
//	},
//	google_profile : {
//		name : 'Google Profile',
//		label : 'Google Profile�?�ユーザー�?ームを記入�?��?��??�?��?��?�。',
//		url : 'http://www.google.com/profiles/{username}'
//	}
};

openid.locale = 'jp';
openid.sprite = 'en'; // use same sprite as english localization
openid.demo_text = '今クライアントデモモード�?��?��?��?��?��?��?�。普通�?�次�?�OpenIDを出�?��?��?�れ�?��?��?��?��?�ん:';
openid.signin_text = 'ログイン';
openid.image_title = '{provider}�?�ログイン';