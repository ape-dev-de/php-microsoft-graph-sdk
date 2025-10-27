<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WebBrowserCookieSettings - Enum
 * Web Browser Cookie Settings.
 */
enum WebBrowserCookieSettings: string
{
    case BROWSERDEFAULT = 'browserDefault';
    case BLOCKALWAYS = 'blockAlways';
    case ALLOWCURRENTWEBSITE = 'allowCurrentWebSite';
    case ALLOWFROMWEBSITESVISITED = 'allowFromWebsitesVisited';
    case ALLOWALWAYS = 'allowAlways';
}
