<?php
require_once( "$IP/extensions/NativeSvgHandler/NativeSvgHandler.php" );
require_once( "$IP/extensions/Scribunto/Scribunto.php" );
wfLoadExtensions( [
	'AbuseFilter',
	'AntiSpoof',
	'Babel',
	'BetaFeatures',
	'CentralAuth',
	'CheckUser',
	'Cite',
	'CiteThisPage',
	'CodeEditor',
	'ConfirmEdit',
	'ConfirmEdit/ReCaptchaNoCaptcha',
	'Disambiguator',
	'Echo',
	'Gadgets',
	'GlobalBlocking',
	'GlobalCssJs',
	'GlobalUserPage',
	'GlobalPreferences',
	'InputBox',
	'Interwiki',
	'LocalisationUpdate',
	'ManageWiki',
	'MassMessage',
	'Math',
	'MirahezeMagic',
	'Nuke',
	'OATHAuth',
	'OAuth',
	'ParserFunctions',
	'Poem',
	'Renameuser',
	'SiteMatrix',
	'Timeline',
	'Thanks',
	'TitleBlacklist',
	'TorBlock',
	'WikiEditor',
	'cldr'
] );
