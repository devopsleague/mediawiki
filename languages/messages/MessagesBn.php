<?php
/** Bengali (বাংলা)
 *
 * @file
 * @ingroup Languages
 */

$namespaceNames = [
	NS_MEDIA            => 'মিডিয়া',
	NS_SPECIAL          => 'বিশেষ',
	NS_TALK             => 'আলাপ',
	NS_USER             => 'ব্যবহারকারী',
	NS_USER_TALK        => 'ব্যবহারকারী_আলাপ',
	NS_PROJECT_TALK     => '$1_আলোচনা',
	NS_FILE             => 'চিত্র',
	NS_FILE_TALK        => 'চিত্র_আলোচনা',
	NS_MEDIAWIKI        => 'মিডিয়াউইকি',
	NS_MEDIAWIKI_TALK   => 'মিডিয়াউইকি_আলোচনা',
	NS_TEMPLATE         => 'টেমপ্লেট',
	NS_TEMPLATE_TALK    => 'টেমপ্লেট_আলোচনা',
	NS_HELP             => 'সাহায্য',
	NS_HELP_TALK        => 'সাহায্য_আলোচনা',
	NS_CATEGORY         => 'বিষয়শ্রেণী',
	NS_CATEGORY_TALK    => 'বিষয়শ্রেণী_আলোচনা',
];

$namespaceAliases = [
	'$1_আলাপ' => NS_PROJECT_TALK,
	'চিত্র_আলাপ' => NS_FILE_TALK,
	'MediaWiki_আলাপ' => NS_MEDIAWIKI_TALK,
	'আলোচনা' => NS_TALK,
	'মিডিয়াউইকি_আলাপ' => NS_MEDIAWIKI_TALK,
	'টেমপ্লেট_আলাপ' => NS_TEMPLATE_TALK,
	'সাহায্য_আলাপ' => NS_HELP_TALK,
	'বিষয়শ্রেণী_আলাপ' => NS_CATEGORY_TALK,
	'ব্যবহারকারী_আলোচনা' => NS_USER_TALK,
];

$datePreferences = false;
$digitTransformTable = [
	'0' => '০',
	'1' => '১',
	'2' => '২',
	'3' => '৩',
	'4' => '৪',
	'5' => '৫',
	'6' => '৬',
	'7' => '৭',
	'8' => '৮',
	'9' => '৯'
];

$digitGroupingPattern = "#,##,##0.###";

$numberingSystem = 'beng';

/** @phpcs-require-sorted-array */
$specialPageAliases = [
	'Activeusers'               => [ 'সক্রিয়_ব্যবহারকারী' ],
	'Allmessages'               => [ 'সব_বার্তা' ],
	'AllMyUploads'              => [ 'আমার_সব_আপলোড', 'আমার_সব_ফাইল' ],
	'Allpages'                  => [ 'সব_পাতা', 'সব_পৃষ্ঠা', 'সব_পাতাসমূহ' ],
	'Ancientpages'              => [ 'পুরানো_পাতা', 'পুরানো_পৃষ্ঠা' ],
	'ApiHelp'                   => [ 'এপিআই_সাহায্য' ],
	'ApiSandbox'                => [ 'এপিআই_খেলাঘর' ],
	'Badtitle'                  => [ 'ত্রুটিযুক্ত_শিরোনাম' ],
	'Blankpage'                 => [ 'খালি_পাতা', 'খালি_পৃষ্ঠা' ],
	'Block'                     => [ 'বাধাদান', 'আইপি_বাধাদান', 'ব্যবহারকারী_বাধাদান' ],
	'BlockList'                 => [ 'বাধার_তালিকা', 'বাধার_তালিকাসমূহ', 'আইপি_বাধার_তালিকা' ],
	'Booksources'               => [ 'বইয়ের_উৎস' ],
	'BotPasswords'              => [ 'বট_পাসওয়ার্ড' ],
	'BrokenRedirects'           => [ 'ভাঙ্গা_পুনর্নির্দেশ' ],
	'Categories'                => [ 'বিষয়শ্রেণী' ],
	'ChangeContentModel'        => [ 'বিষয়বস্তুর_মডেল_পরিবর্তন' ],
	'ChangeCredentials'         => [ 'পরিচয়পত্র_পরিবর্তন' ],
	'ChangeEmail'               => [ 'ইমেইল_পরিবর্তন' ],
	'ChangePassword'            => [ 'পাসওয়ার্ড_পরিবর্তন', 'পাসপরিবর্তন', 'পাসওয়ার্ডপরিবর্তন' ],
	'ComparePages'              => [ 'পাতার_তুলনা', 'পৃষ্ঠার_তুলনা' ],
	'Confirmemail'              => [ 'ইমেইল_নিশ্চিতকরণ' ],
	'Contributions'             => [ 'অবদান', 'অবদানসমূহ' ],
	'CreateAccount'             => [ 'অ্যাকাউন্ট_তৈরি' ],
	'Deadendpages'              => [ 'সংযোগহীন_পাতা', 'সংযোগহীন_পৃষ্ঠা' ],
	'DeletedContributions'      => [ 'অপসারিত_অবদান' ],
	'Diff'                      => [ 'পার্থক্য' ],
	'DoubleRedirects'           => [ 'দ্বৈত_পুনর্নির্দেশ', 'দুইবার_করা_পুনর্নির্দেশ' ],
	'EditTags'                  => [ 'ট্যাগ_সম্পাদনা' ],
	'EditWatchlist'             => [ 'নজরতালিকা_সম্পাদনা' ],
	'Emailuser'                 => [ 'ইমেইল_প্রেরণ', 'ইমেইল' ],
	'ExpandTemplates'           => [ 'টেমপ্লেট_সম্প্রসারণ' ],
	'Export'                    => [ 'রপ্তানি' ],
	'Fewestrevisions'           => [ 'কমসংখ্যক_সংশোধন' ],
	'FileDuplicateSearch'       => [ 'সদৃশ_ফাইল_অনুসন্ধান' ],
	'Filepath'                  => [ 'ফাইলের_পথ' ],
	'GoToInterwiki'             => [ 'আন্ত-উইকিতে_চলুন', 'আন্তউইকিতে_চলুন', 'আন্তঃউইকিতে_চলুন' ],
	'Import'                    => [ 'আমদানি' ],
	'Interwiki'                 => [ 'আন্তঃউইকি' ],
	'Invalidateemail'           => [ 'অবৈধ_ইমেইল' ],
	'JavaScriptTest'            => [ 'জাভাস্ক্রিপ্ট_পরীক্ষা' ],
	'LinkAccounts'              => [ 'অ্যাকাউন্টের_তালিকা' ],
	'LinkSearch'                => [ 'সংযোগ_অনুসন্ধান' ],
	'Listadmins'                => [ 'প্রশাসকদের_তালিকা', 'প্রশাসকের_তালিকা' ],
	'Listbots'                  => [ 'বটের_তালিকা' ],
	'ListDuplicatedFiles'       => [ 'সদৃশ_ফাইলের_তালিকা', 'অনুরূপ_ফাইলের_তালিকা' ],
	'Listfiles'                 => [ 'ফাইলের_তালিকা', 'চিত্রের_তালিকা', 'ছবির_তালিকা' ],
	'Listgrants'                => [ 'অনুমোদনের_তালিকা', 'গ্র্যান্টের_তালিকা' ],
	'Listgrouprights'           => [ 'দলগত_অধিকারের_তালিকা', 'ব্যবহারকারীর_দলগত_অধিকার' ],
	'Listredirects'             => [ 'পুনর্নির্দেশের_তালিকা', 'পুনঃনির্দেশের_তালিকা' ],
	'Listusers'                 => [ 'ব্যবহারকারীর_তালিকা', 'ব্যবহারকারী_তালিকা' ],
	'Lockdb'                    => [ 'ডাটাবেস_অবরোধ', 'লকডিবি' ],
	'Log'                       => [ 'লগ', 'লগসমূহ' ],
	'Lonelypages'               => [ 'পিতৃহীন_পাতা', 'পিতৃহীন_পাতাসমূহ' ],
	'Longpages'                 => [ 'দীর্ঘ_পাতাসমূহ' ],
	'MediaStatistics'           => [ 'মিডিয়া_পরিসংখ্যান' ],
	'MergeHistory'              => [ 'ইতিহাস_একত্রীকরণ' ],
	'MIMEsearch'                => [ 'এমআইএমই_অনুসন্ধান' ],
	'Mostcategories'            => [ 'সর্বাধিক_বিষয়শ্রেণীসমৃদ্ধ' ],
	'Mostimages'                => [ 'সর্বাধিক_ফাইল', 'বেশী_ছবি' ],
	'Mostinterwikis'            => [ 'সর্বাধিক_আন্তঃউইকি' ],
	'Mostlinked'                => [ 'সর্বাধিক_সংযুক্ত_পাতা' ],
	'Mostlinkedcategories'      => [ 'সর্বাধিক_সংযুক্ত_বিষয়শ্রেণী', 'সর্বাধিক_ব্যবহৃত_বিষয়শ্রেণী', 'সর্বাধিক_সংযুক্ত_বিষয়শ্রেণীসমূহ' ],
	'Mostlinkedtemplates'       => [ 'সর্বাধিক_সংযুক্ত_টেমপ্লট', 'সর্বাধিক_সংযুক্ত_টেমপ্লটসমূহ', 'সর্বাধিক_ব্যবহৃত_টেমপ্লেট' ],
	'Mostrevisions'             => [ 'সর্বাধিক_সংশোধন' ],
	'Movepage'                  => [ 'পাতা_স্থানান্তর' ],
	'Mycontributions'           => [ 'আমার_অবদান' ],
	'MyLanguage'                => [ 'আমার_ভাষা' ],
	'Mypage'                    => [ 'আমার_পাতা' ],
	'Mytalk'                    => [ 'আমার_আলাপ' ],
	'Myuploads'                 => [ 'আমার_আপলোড', 'আমার_ফাইল' ],
	'Newimages'                 => [ 'নতুন_চিত্রসমূহ', 'নতুন_ছবিসমূহ' ],
	'Newpages'                  => [ 'নতুন_পাতাসমূহ' ],
	'PageData'                  => [ 'পাতার_উপাত্ত' ],
	'PageHistory'               => [ 'পাতার_ইতিহাস' ],
	'PageInfo'                  => [ 'পাতার_তথ্য' ],
	'PageLanguage'              => [ 'পাতার_ভাষা' ],
	'PagesWithProp'             => [ 'বৈশিষ্ট্যযুক্ত_পাতা', 'বৈশিষ্ট্যযুক্ত_পৃষ্ঠা' ],
	'PasswordPolicies'          => [ 'পাসওয়ার্ড_নীতি', 'পাসওয়ার্ড_নীতিমালা' ],
	'PasswordReset'             => [ 'পাসওয়ার্ড_পুনঃস্থাপন' ],
	'PermanentLink'             => [ 'স্থায়ী_সংযোগ', 'স্থায়ী_লিঙ্ক' ],
	'Preferences'               => [ 'পছন্দসমূহ', 'আমার_পছন্দ' ],
	'Prefixindex'               => [ 'উপসর্গ' ],
	'Protectedpages'            => [ 'সুরক্ষিত_পাতা' ],
	'Protectedtitles'           => [ 'সুরক্ষিত_শিরোনাম' ],
	'ProtectPage'               => [ 'সুরক্ষা', 'পাতা_সুরক্ষা', 'পৃষ্ঠা_সুরক্ষা' ],
	'Purge'                     => [ 'পুনঃসতেজ', 'শোধন', 'পার্জ' ],
	'RandomInCategory'          => [ 'অজানা_বিষয়শ্রেণী' ],
	'Randompage'                => [ 'অজানা_পাতা', 'অজানা_যেকোন_পাতা' ],
	'Randomredirect'            => [ 'অজানা_পুনর্নির্দেশ' ],
	'Randomrootpage'            => [ 'অজানা_মূল_পাতা' ],
	'Recentchanges'             => [ 'সাম্প্রতিক_পরিবর্তনসমূহ', 'সাম্প্রতিক_পরিবর্তন' ],
	'Recentchangeslinked'       => [ 'সংযুক্ত_সাম্প্রতিক_পরিবর্তন', 'সংযুক্ত_সাম্প্রতিক_পরিবর্তনসমূহ', 'সম্পর্কিত_পরিবর্তন' ],
	'Redirect'                  => [ 'পুনর্নির্দেশ' ],
	'RemoveCredentials'         => [ 'পরিচয়পত্র_অপসারণ' ],
	'Renameuser'                => [ 'ব্যবহারকারী_নামান্তর', 'ব্যবহারকারী_পুনঃনামকরণ' ],
	'ResetTokens'               => [ 'টোকেন_পরিবর্তন' ],
	'Revisiondelete'            => [ 'অপসারিত_ইতিহাস' ],
	'RunJobs'                   => [ 'রানজব' ],
	'Search'                    => [ 'অনুসন্ধান' ],
	'Shortpages'                => [ 'সংক্ষিপ্ত_পাতা', 'সংক্ষিপ্ত_পাতাসমূহ' ],
	'Specialpages'              => [ 'বিশেষ_পাতা', 'বিশেষ_পাতাসমূহ' ],
	'Statistics'                => [ 'পরিসংখ্যান' ],
	'Tags'                      => [ 'ট্যাগ' ],
	'TrackingCategories'        => [ 'বিষয়শ্রেণীসমূহ_অনুসরণ' ],
	'Unblock'                   => [ 'বাধা_তোলা', 'বাধা_অপসারণ' ],
	'Uncategorizedcategories'   => [ 'বিষয়শ্রেণীবিহীন_বিষয়শ্রেণী' ],
	'Uncategorizedimages'       => [ 'বিষয়শ্রেণীবিহীন_চিত্র', 'বিষয়শ্রেণীবিহীন_ছবি' ],
	'Uncategorizedpages'        => [ 'বিষয়শ্রেণীবিহীন_পাতা' ],
	'Uncategorizedtemplates'    => [ 'বিষয়শ্রেণীবিহীন_টেমপ্লেট' ],
	'Undelete'                  => [ 'পুনরুদ্ধার' ],
	'UnlinkAccounts'            => [ 'অসংযুক্ত_অ্যাকাউন্ট' ],
	'Unlockdb'                  => [ 'ডাটাবেস_মুক্তি', 'আনলকডিবি' ],
	'Unusedcategories'          => [ 'অব্যবহৃত_বিষয়শ্রেণী' ],
	'Unusedimages'              => [ 'অব্যবহৃত_চিত্র', 'অব্যবহৃত_ছবি' ],
	'Unusedtemplates'           => [ 'অব্যবহৃত_টেমপ্লেট' ],
	'Unwatchedpages'            => [ 'নজরহীন_পাতা', 'নজরে_না_রাখা_পাতা' ],
	'Upload'                    => [ 'আপলোড' ],
	'UploadStash'               => [ 'স্টাশ_আপলোড' ],
	'Userlogin'                 => [ 'ব্যবহারকারী_প্রবেশ', 'প্রবেশ' ],
	'Userlogout'                => [ 'ব্যবহারকারী_প্রস্থান', 'প্রস্থান' ],
	'Userrights'                => [ 'ব্যবহারকারী_অধিকার', 'ব্যবহারকারীর_অধিকার' ],
	'Version'                   => [ 'সংস্করণ' ],
	'Wantedcategories'          => [ 'আবশ্যিক_বিষয়শ্রেণীসমূহ' ],
	'Wantedfiles'               => [ 'আবশ্যিক_ফাইলসমূহ' ],
	'Wantedpages'               => [ 'আবশ্যিক_পাতাসমূহ', 'ভাঙ্গা_লিংকসমূহ' ],
	'Wantedtemplates'           => [ 'আবশ্যিক_টেমপ্লেটসমূহ' ],
	'Watchlist'                 => [ 'নজরতালিকা' ],
	'Whatlinkshere'             => [ 'সংযোগকারী_পৃষ্ঠাসমূহ' ],
	'Withoutinterwiki'          => [ 'আন্তঃউইকিহীন' ],
];

/** @phpcs-require-sorted-array */
$magicWords = [
	'articlepath'             => [ 0, 'নিবন্ধের_পথ', 'নিবন্ধেরপথ', 'ARTICLEPATH' ],
	'basepagename'            => [ 1, 'ভিত্তি_পাতার_নাম', 'ভিত্তিপাতারনাম', 'ভিত্তি_পৃষ্ঠার_নাম', 'ভিত্তি_পৃষ্ঠার_নাম', 'BASEPAGENAME' ],
	'basepagenamee'           => [ 1, 'ভিত্তি_পাতার_নামম', 'ভিত্তিপাতারনামম', 'ভিত্তি_পৃষ্ঠার_নামম', 'ভিত্তি_পৃষ্ঠার_নামম', 'BASEPAGENAMEE' ],
	'bidi'                    => [ 0, 'বিআইডিআই:', 'BIDI:' ],
	'contentlanguage'         => [ 1, 'বিষয়বস্তুর_ভাষা', 'বিষয়বস্তুরভাষা', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'currentday'              => [ 1, 'বর্তমান_দিন', 'বর্তমানদিন', 'আজকের_দিন', 'আজকেরদিন', 'CURRENTDAY' ],
	'currentday2'             => [ 1, 'বর্তমান_দিন_২', 'বর্তমানদিন২', 'আজকের_দিন_২', 'আজকেরদিন২', 'CURRENTDAY2' ],
	'currentdayname'          => [ 1, 'বর্তমান_দিনের_নাম', 'বর্তমানদিনেরনাম', 'আজকের_দিনের_নাম', 'আজকেরদিনেরনাম', 'CURRENTDAYNAME' ],
	'currentdow'              => [ 1, 'বর্তমান_সপ্তাহের_দিন', 'বর্তমানসপ্তাহেরদিন', 'CURRENTDOW' ],
	'currenthour'             => [ 1, 'বর্তমান_ঘণ্টা', 'বর্তমানঘণ্টা', 'বর্তমান_ঘন্টা', 'বর্তমানঘন্টা', 'এখনকার_ঘণ্টা', 'এখনকারঘণ্টা', 'CURRENTHOUR' ],
	'currentmonth'            => [ 1, 'চলতি_মাস', 'চলতিমাস', 'বর্তমান_মাস', 'বর্তমানমাস', 'বর্তমান_মাস_২', 'বর্তমানমাস২', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'           => [ 1, 'চলতি_মাস_১', 'চলতিমাস১', 'বর্তমান_মাস_১', 'বর্তমানমাস১', 'CURRENTMONTH1' ],
	'currentmonthabbrev'      => [ 1, 'বর্তমান_মাস_সংক্ষেপ', 'বর্তমানমাসসংক্ষেপ', 'বর্তমান_মাস_সংক্ষিপ্ত', 'বর্তমানমাসসংক্ষিপ্ত', 'CURRENTMONTHABBREV' ],
	'currentmonthname'        => [ 1, 'বর্তমান_মাসের_নাম', 'বর্তমানমাসেরনাম', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'     => [ 1, 'বর্তমান_মাসের_নাম_উৎপন্ন', 'বর্তমানমাসেরনামউৎপন্ন', 'CURRENTMONTHNAMEGEN' ],
	'currenttime'             => [ 1, 'বর্তমান_সময়', 'বর্তমানসময়', 'এখনকার_সময়', 'এখনকারসময়', 'এখন_সময়', 'CURRENTTIME' ],
	'currenttimestamp'        => [ 1, 'বর্তমান_সময়তারিখ', 'বর্তমান_সময়তারিখ', 'CURRENTTIMESTAMP' ],
	'currentversion'          => [ 1, 'বর্তমান_সংস্করণ', 'বর্তমানসংস্করণ', 'CURRENTVERSION' ],
	'currentweek'             => [ 1, 'বর্তমান_সপ্তাহ', 'বর্তমানসপ্তাহ', 'চলতি_সপ্তাহ', 'চলতিসপ্তাহ', 'CURRENTWEEK' ],
	'currentyear'             => [ 1, 'চলতি_বছর', 'চলতিবছর', 'বর্তমান_বছর', 'বর্তমানবছর', 'CURRENTYEAR' ],
	'defaultsort'             => [ 1, 'পূর্বনির্ধারিত_বাছাই', 'পূর্বনির্ধারিতবাছাই', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'displaytitle'            => [ 1, 'প্রদর্শনের_শিরোনাম', 'প্রদর্শনেরশিরোনাম', 'প্রদর্শিত_শিরোনাম', 'প্রদর্শিতশিরোনাম', 'DISPLAYTITLE' ],
	'filepath'                => [ 0, 'ফাইলের_পথ:', 'ফাইলেরপথ:', 'FILEPATH:' ],
	'formatdate'              => [ 0, 'তারিখ_বিন্যাস', 'তারিখবিন্যাস', 'formatdate', 'dateformat' ],
	'formatnum'               => [ 0, 'নম্বর_বিন্যাস', 'নম্বরবিন্যাস', 'FORMATNUM' ],
	'fullpagename'            => [ 1, 'পূর্ণ_পাতার_নাম', 'সম্পূর্ণ_পাতার_নাম', 'পূর্ণপাতারনাম', 'সম্পূর্ণপাতারনাম', 'পূর্ণ_পৃষ্ঠার_নাম', 'সম্পূর্ণ_পৃষ্ঠার_নাম', 'পূর্ণপৃষ্ঠারনাম', 'সম্পূর্ণপৃষ্ঠারনাম', 'FULLPAGENAME' ],
	'fullpagenamee'           => [ 1, 'পূর্ণ_পাতার_নামম', 'সম্পূর্ণ_পাতার_নামম', 'পূর্ণপাতারনামম', 'সম্পূর্ণপাতারনামম', 'পূর্ণ_পৃষ্ঠার_নামম', 'সম্পূর্ণ_পৃষ্ঠার_নামম', 'পূর্ণপৃষ্ঠারনামম', 'সম্পূর্ণপৃষ্ঠারনামম', 'FULLPAGENAMEE' ],
	'gender'                  => [ 0, 'লিঙ্গ:', 'GENDER:' ],
	'grammar'                 => [ 0, 'ব্যাকরণ:', 'GRAMMAR:' ],
	'hiddencat'               => [ 1, '__লুকানো_বিষয়শ্রেণী__', '__লুকানোবিষয়শ্রেণী__', '__লুকায়িতবিষয়শ্রেণী__', '__লুক্কায়িতবিষয়শ্রেণী__', '__লুক্কায়িত_বিষয়শ্রেণী__', '__HIDDENCAT__' ],
	'img_border'              => [ 1, 'সীমানা', 'সীমান্ত', 'border' ],
	'img_bottom'              => [ 1, 'নিচে', 'নিচ', 'নীচ', 'নীচে', 'তলদেশ', 'নিম্নে', 'bottom' ],
	'img_center'              => [ 1, 'কেন্দ্র', 'কেন্দ্রে', 'center', 'centre' ],
	'img_class'               => [ 1, 'ক্লাস=$1', 'class=$1' ],
	'img_framed'              => [ 1, 'ফ্রেম', 'ফ্রেমসহ', 'frame', 'framed', 'enframed' ],
	'img_frameless'           => [ 1, 'ফ্রেমহীন', 'ফ্রেমবিহীন', 'frameless' ],
	'img_lang'                => [ 1, 'ভাষা=$1', 'lang=$1' ],
	'img_left'                => [ 1, 'বাম', 'বামে', 'left' ],
	'img_link'                => [ 1, 'সংযোগ=$1', 'লিঙ্ক=$1', 'link=$1' ],
	'img_manualthumb'         => [ 1, 'থাম্ব=$1', 'থাম্বনেইল=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_middle'              => [ 1, 'মধ্য', 'মধ্যে', 'middle' ],
	'img_none'                => [ 1, 'কিছুই_না', 'কোনটি_না', 'কিছুইনা', 'কোনটিনা', 'none' ],
	'img_page'                => [ 1, 'পাতা=$1', 'পাতা $1', 'পৃষ্ঠা=$1', 'পৃষ্ঠা $1', 'page=$1', 'page $1' ],
	'img_right'               => [ 1, 'ডান', 'ডানে', 'right' ],
	'img_text_bottom'         => [ 1, 'পাঠ্য-নীচে', 'লেখা-নীচ', 'text-bottom' ],
	'img_text_top'            => [ 1, 'পাঠ্য-উপরে', 'লেখা-উপরে', 'পাঠ্য-উপর', 'লেখা-উপর', 'text-top' ],
	'img_thumbnail'           => [ 1, 'থাম্ব', 'থাম্বনেইল', 'thumb', 'thumbnail' ],
	'img_top'                 => [ 1, 'শীর্ষ', 'উপর', 'শীর্ষে', 'উপরে', 'top' ],
	'img_upright'             => [ 1, 'ডানে_উপরে', 'ডানেউপরে=$1', 'ডানদিকে_উপরে', 'ডানদিকে_উপরে $1', 'ডানদিকে_উপরে=$1', 'ডানেউপরে $1', 'upright', 'upright=$1', 'upright $1' ],
	'img_width'               => [ 1, '$1পিক্সেল', '$1পিক্স', '$1px' ],
	'index'                   => [ 1, '__নির্ঘণ্ট__', '__INDEX__' ],
	'language'                => [ 0, '#ভাষা', '#LANGUAGE' ],
	'localday'                => [ 1, 'স্থানীয়_দিন', 'স্থানীয়দিন', 'স্থানীয়_বার', 'স্থানীয়বার', 'LOCALDAY' ],
	'localday2'               => [ 1, 'স্থানীয়_দিন_২', 'স্থানীয়দিন২', 'LOCALDAY2' ],
	'localdayname'            => [ 1, 'স্থানীয়_দিনের_নাম', 'স্থানীয়দিনেরনাম', 'LOCALDAYNAME' ],
	'localdow'                => [ 1, 'স্থানীয়_সপ্তাহের_দিন', 'স্থানীয়সপ্তাহেরদিন', 'LOCALDOW' ],
	'localhour'               => [ 1, 'স্থানীয়_ঘণ্টা', 'স্থানীয়ঘণ্টা', 'স্থানীয়_ঘন্টা', 'স্থানীয়ঘন্টা', 'LOCALHOUR' ],
	'localmonth'              => [ 1, 'স্থানীয়_মাস', 'স্থানীয়মাস', 'স্থানীয়_মাস_২', 'স্থানীয়মাস২', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'             => [ 1, 'স্থানীয়_মাস_১', 'স্থানীয়মাস১', 'LOCALMONTH1' ],
	'localmonthabbrev'        => [ 1, 'স্থানীয়_মাস_সংক্ষেপ', 'স্থানীয়মাসসংক্ষেপ', 'স্থানীয়_মাস_সংক্ষিপ্ত', 'স্থানীয়মাসসংক্ষিপ্ত', 'সংক্ষেপিত_স্থানীয়_মাস', 'সংক্ষেপিতস্থানীয়মাস', 'LOCALMONTHABBREV' ],
	'localmonthname'          => [ 1, 'স্থানীয়_মাসের_নাম', 'স্থানীয়মাসেরনাম', 'LOCALMONTHNAME' ],
	'localmonthnamegen'       => [ 1, 'স্থানীয়_মাসের_নাম_উৎপন্ন', 'স্থানীয়মাসেরনামউৎপন্ন', 'LOCALMONTHNAMEGEN' ],
	'localtime'               => [ 1, 'স্থানীয়_সময়', 'স্থানীয়সময়', 'LOCALTIME' ],
	'localtimestamp'          => [ 1, 'স্থানীয়_সময়তারিখ', 'স্থানীয়সময়তারিখ', 'LOCALTIMESTAMP' ],
	'localurl'                => [ 0, 'স্থানীয়_ইউআরএল:', 'স্থানীয়ইউআরএল:', 'LOCALURL:' ],
	'localweek'               => [ 1, 'স্থানীয়_সপ্তাহ', 'স্থানীয়সপ্তাহ', 'LOCALWEEK' ],
	'localyear'               => [ 1, 'স্থানীয়_বছর', 'স্থানীয়বছর', 'LOCALYEAR' ],
	'namespace'               => [ 1, 'নামস্থান', 'NAMESPACE' ],
	'namespacee'              => [ 1, 'নামস্থানন', 'NAMESPACEE' ],
	'namespacenumber'         => [ 1, 'নামস্থানের_সংখ্যা', 'নামস্থানেরসংখ্যা', 'NAMESPACENUMBER' ],
	'newsectionlink'          => [ 1, '__নতুন_অনুচ্ছেদের_সংযোগ__', '__নতুন_অনুচ্ছেদের_লিঙ্ক__', '__নতুনঅনুচ্ছেদেরসংযোগ__', '__নতুনঅনুচ্ছেদেরলিঙ্ক__', '__NEWSECTIONLINK__' ],
	'nocontentconvert'        => [ 0, '__কোন_বিষয়বস্তু_রূপান্তরকারী_নয়__', '__কোনবিষয়বস্তুরূপান্তরকারীনয়__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'noeditsection'           => [ 0, '__কোনসম্পাদনাঅনুচ্ছেদনয়__', '__কোন_সম্পাদনা_অনুচ্ছেদ_নয়__', '__NOEDITSECTION__' ],
	'nogallery'               => [ 0, '__কোনগ্যালারিনয়__', '__কোনগ্যালারীনয়__', '__কোন_গ্যালারি_নয়__', '__কোন_গ্যালারী_নয়__', '__NOGALLERY__' ],
	'noindex'                 => [ 1, '__কোননির্ঘণ্টনয়__', '__কোন_নির্ঘণ্ট_নয়__', '__নির্ঘণ্টনয়__', '__NOINDEX__' ],
	'nonewsectionlink'        => [ 1, '__কোন_নতুন_অনুচ্ছেদের_সংযোগ_নয়__', '__কোন_নতুন_অনুচ্ছেদের_লিঙ্ক_নয়__', '__কোননতুনঅনুচ্ছেদেরসংযোগনয়__', '__কোননতুনঅনুচ্ছেদেরলিঙ্কনয়__', '__NONEWSECTIONLINK__' ],
	'notitleconvert'          => [ 0, '__কোন_শিরোনাম_রূপান্তরকারী_নয়__', '__কোনশিরোনামরূপান্তরকারীনয়__', '__NOTITLECONVERT__', '__NOTC__' ],
	'notoc'                   => [ 0, '__কোন_বিষয়বস্তুর_ছক_নয়__', '__কোনবিষয়বস্তুরছকনয়__', '__কোন_বিষয়বস্তুর_টেবিল_নয়__', '__কোনবিষয়বস্তুরটেবিলনয়__', '__NOTOC__' ],
	'numberingroup'           => [ 1, 'দলে_সংখ্যা', 'দলেসংখ্যা', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'numberofactiveusers'     => [ 1, 'সক্রিয়_ব্যবহারকারীর_সংখ্যা', 'সক্রিয়ব্যবহারকারীরসংখ্যা', 'সক্রিয়_ব্যবহারকারী_সংখ্যা', 'সক্রিয়ব্যবহারকারীসংখ্যা', 'NUMBEROFACTIVEUSERS' ],
	'numberofadmins'          => [ 1, 'প্রশাসকের_সংখ্যা', 'প্রশাসকেরসংখ্যা', 'প্রশাসক_সংখ্যা', 'প্রশাসকসংখ্যা', 'NUMBEROFADMINS' ],
	'numberofarticles'        => [ 1, 'নিবন্ধের_সংখ্যা', 'নিবন্ধেরসংখ্যা', 'নিবন্ধ_সংখ্যা', 'নিবন্ধসংখ্যা', 'NUMBEROFARTICLES' ],
	'numberofedits'           => [ 1, 'সম্পাদনার_সংখ্যা', 'সম্পাদনারসংখ্যা', 'সম্পাদনা_সংখ্যা', 'সম্পাদনাসংখ্যা', 'NUMBEROFEDITS' ],
	'numberoffiles'           => [ 1, 'ফাইলের_সংখ্যা', 'ফাইলেরসংখ্যা', 'ফাইল_সংখ্যা', 'ফাইলসংখ্যা', 'NUMBEROFFILES' ],
	'numberofpages'           => [ 1, 'পাতার_সংখ্যা', 'পাতারসংখ্যা', 'পৃষ্ঠার_সংখ্যা', 'পৃষ্ঠারসংখ্যা', 'পৃষ্ঠা_সংখ্যা', 'পৃষ্ঠাসংখ্যা', 'NUMBEROFPAGES' ],
	'numberofusers'           => [ 1, 'ব্যবহারকারীর_সংখ্যা', 'ব্যবহারকারীরসংখ্যা', 'ব্যবহারকারী_সংখ্যা', 'ব্যবহারকারীসংখ্যা', 'NUMBEROFUSERS' ],
	'pageid'                  => [ 0, 'পাতার_আইডি', 'পাতারআইডি', 'পৃষ্ঠার_আইডি', 'পৃষ্ঠারআইডি', 'PAGEID' ],
	'pagename'                => [ 1, 'পাতার_নাম', 'পাতারনাম', 'পৃষ্ঠার_নাম', 'পৃষ্ঠারনাম', 'PAGENAME' ],
	'pagenamee'               => [ 1, 'পাতার_নামম', 'পাতারনামম', 'পৃষ্ঠার_নামম', 'পৃষ্ঠারনামম', 'PAGENAMEE' ],
	'pagesincategory'         => [ 1, 'বিষয়শ্রেণীতেপাতা', 'বিষয়শ্রেণীতেপৃষ্ঠা', 'বিষয়শ্রেণীতে_পাতা', 'বিষয়শ্রেণীতে_পৃষ্ঠা', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesincategory_all'     => [ 0, 'সব', 'সকল', 'all' ],
	'pagesincategory_files'   => [ 0, 'ফাইলসমূহ', 'files' ],
	'pagesincategory_pages'   => [ 0, 'পাতাসমূহ', 'পৃষ্ঠাসমূহ', 'pages' ],
	'pagesincategory_subcats' => [ 0, 'উপবিষয়শ্রেণী', 'subcats' ],
	'pagesinnamespace'        => [ 1, 'নামস্থানে_পাতা', 'নামস্থানে_পৃষ্ঠা', 'নামস্থানেপাতা', 'নামস্থানেপৃষ্ঠা', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'pagesize'                => [ 1, 'পাতার_আকার', 'পাতারআকার', 'পৃষ্ঠার_আকার', 'পৃষ্ঠারআকার', 'PAGESIZE' ],
	'plural'                  => [ 0, 'বহুবচন:', 'PLURAL:' ],
	'protectionexpiry'        => [ 1, 'সুরক্ষার_মেয়াদোত্তীর্ণ', 'সুরক্ষারমেয়াদোত্তীর্ণ', 'সুরক্ষা_মেয়াদোত্তীর্ণ', 'সুরক্ষামেয়াদোত্তীর্ণ', 'PROTECTIONEXPIRY' ],
	'protectionlevel'         => [ 1, 'সুরক্ষার_স্তর', 'সুরক্ষারস্তর', 'সুরক্ষা_স্তর', 'সুরক্ষাস্তর', 'PROTECTIONLEVEL' ],
	'raw'                     => [ 0, 'অবিন্যস্ত:', 'RAW:' ],
	'redirect'                => [ 0, '#পুনর্নির্দেশ', '#পুনঃর্নির্দেশ', '#পুনঃনির্দেশ', '#পুননির্দেশ', '#REDIRECT' ],
	'revisionday'             => [ 1, 'সংশোধনের_দিন', 'সংশোধনেরদিন', 'REVISIONDAY' ],
	'revisionday2'            => [ 1, 'সংশোধনের_দিন_২', 'সংশোধনেরদিন২', 'REVISIONDAY2' ],
	'revisionid'              => [ 1, 'সংশোধনের_আইডি', 'সংশোধনেরআইডি', 'REVISIONID' ],
	'revisionmonth'           => [ 1, 'সংশোধনের_মাস', 'সংশোধনেরমাস', 'REVISIONMONTH' ],
	'revisionmonth1'          => [ 1, 'সংশোধনের_মাস_১', 'সংশোধনেরমাস১', 'REVISIONMONTH1' ],
	'revisionsize'            => [ 1, 'সংশোধনের_আকার', 'সংশোধনেরআকার', 'REVISIONSIZE' ],
	'revisiontimestamp'       => [ 1, 'সংশোধনের_সময়তারিখ', 'সংশোধনেরসময়তারিখ', 'REVISIONTIMESTAMP' ],
	'revisionuser'            => [ 1, 'সংশোধনের_ব্যবহারকারী', 'সংশোধনেরব্যবহারকারী', 'REVISIONUSER' ],
	'revisionyear'            => [ 1, 'সংশোধনের_বছর', 'সংশোধনেরবছর', 'REVISIONYEAR' ],
	'rootpagename'            => [ 1, 'মূল_পাতার_নাম', 'মূলপাতারনাম', 'মূল_পৃষ্ঠার_নাম', 'মূল_পৃষ্ঠার_নাম', 'ROOTPAGENAME' ],
	'rootpagenamee'           => [ 1, 'মূল_পাতার_নামম', 'মূলপাতারনামম', 'মূল_পৃষ্ঠার_নামম', 'মূল_পৃষ্ঠার_নামম', 'ROOTPAGENAMEE' ],
	'scriptpath'              => [ 0, 'স্ক্রিপ্টের_পথ', 'স্ক্রিপ্টেরপথ', 'SCRIPTPATH' ],
	'server'                  => [ 0, 'সার্ভার', 'SERVER' ],
	'servername'              => [ 0, 'সার্ভারের_নাম', 'সার্ভারেরনাম', 'SERVERNAME' ],
	'sitename'                => [ 1, 'সাইটের_নাম', 'সাইটেরনাম', 'SITENAME' ],
	'special'                 => [ 0, 'বিশেষ', 'special' ],
	'staticredirect'          => [ 1, '__স্থির_পুনর্নির্দেশ__', '__স্থিরপুনর্নির্দেশ__', '__STATICREDIRECT__' ],
	'stylepath'               => [ 0, 'শৈলীর_পথ', 'শৈলীরপথ', 'STYLEPATH' ],
	'subjectpagename'         => [ 1, 'বিষয়ের_পাতার_নাম', 'বিষয়েরপাতারনাম', 'বিষয়ের_পৃষ্ঠার_নাম', 'বিষয়েরপৃষ্ঠারনাম', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'        => [ 1, 'বিষয়ের_পাতার_নামম', 'বিষয়েরপাতারনামম', 'বিষয়ের_পৃষ্ঠার_নামম', 'বিষয়েরপৃষ্ঠারনামম', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'subjectspace'            => [ 1, 'বিষয়ের_স্থান', 'নিবন্ধের_স্থান', 'বিষয়েরস্থান', 'নিবন্ধেরস্থান', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'           => [ 1, 'বিষয়ের_স্থানন', 'নিবন্ধের_স্থানন', 'বিষয়েরস্থানন', 'নিবন্ধেরস্থানন', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'subpagename'             => [ 1, 'উপপাতার_নাম', 'উপপাতারনাম', 'উপপৃষ্ঠার_নাম', 'উপপৃষ্ঠারনাম', 'SUBPAGENAME' ],
	'subpagenamee'            => [ 1, 'উপপাতার_নামম', 'উপপাতারনামম', 'উপপৃষ্ঠার_নামম', 'উপপৃষ্ঠারনামম', 'SUBPAGENAMEE' ],
	'tag'                     => [ 0, 'ট্যাগ', 'tag' ],
	'talkpagename'            => [ 1, 'আলাপ_পাতার_নাম', 'আলাপপাতারনাম', 'আলাপ_পৃষ্ঠার_নাম', 'আলোচনা_পৃষ্ঠার_নাম', 'আলোচনা_পাতার_নাম', 'আলোচনাপাতারনাম', 'আলোচনা_পৃষ্ঠার_নাম', 'আলোচনা_পৃষ্ঠার_নাম', 'TALKPAGENAME' ],
	'talkpagenamee'           => [ 1, 'আলাপ_পাতার_নামম', 'আলাপপাতারনামম', 'আলাপ_পৃষ্ঠার_নামম', 'আলোচনা_পৃষ্ঠার_নামম', 'আলোচনা_পাতার_নামম', 'আলোচনাপাতারনামম', 'আলোচনা_পৃষ্ঠার_নামম', 'আলোচনা_পৃষ্ঠার_নামম', 'TALKPAGENAMEE' ],
	'talkspace'               => [ 1, 'আলাপের_স্থান', 'আলোচনার_স্থান', 'আলাপেরস্থান', 'আলোচনারস্থান', 'আলাপের_জায়গা', 'আলাপেরজায়গা', 'TALKSPACE' ],
	'talkspacee'              => [ 1, 'আলাপের_স্থানন', 'আলোচনার_স্থানন', 'আলাপেরস্থানন', 'আলোচনারস্থানন', 'TALKSPACEE' ],
	'toc'                     => [ 0, '__বিষয়বস্তুর_ছক__', '__বিষয়বস্তুরছক__', '__বিষয়বস্তুর_টেবিল__', '__বিষয়বস্তুরটেবিল__', '__TOC__' ],
	'url_path'                => [ 0, 'পথ', 'PATH' ],
	'url_wiki'                => [ 0, 'উইকি', 'WIKI' ],
];

$linkTrail = '/^([\x{0980}-\x{09FF}]+)(.*)$/sDu';
