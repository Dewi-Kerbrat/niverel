<?php
/**
 * Verifies if the given $locale is supported in the project
 * @param string $locale
 * @return bool
 */
function valid($locale) {
    return in_array($locale, ['fr_FR',]);
}

//setting the source/default locale, for informational purposes
$lang = 'fr_FR';


// here we define the global system locale given the found language
putenv("LANG=" . $lang);

// this might be useful for date functions (LC_TIME) or money formatting (LC_MONETARY), for instance
setlocale(LC_ALL, $lang);

// this will make Gettext look for ../locales/<lang>/LC_MESSAGES/messages.mo
bindtextdomain('messages', './locales');

// indicates in what encoding the file should be read
bind_textdomain_codeset('messages', 'UTF-8');

// if your application has additional domains, as cited before, you should bind them here as well
//bindtextdomain('forum', '../locales');
//bind_textdomain_codeset('forum', 'UTF-8');

// here we indicate the default domain the gettext() calls will respond to
textdomain('messages');

// this would look for the string in forum.mo instead of main.mo
// echo dgettext('forum', 'Welcome back!');
?>
