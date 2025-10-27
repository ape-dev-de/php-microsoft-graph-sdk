<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BrowserSiteCompatibilityMode - Enum
 */
enum BrowserSiteCompatibilityMode: string
{
    case DEFAULT = 'default';
    case INTERNETEXPLORER8ENTERPRISE = 'internetExplorer8Enterprise';
    case INTERNETEXPLORER7ENTERPRISE = 'internetExplorer7Enterprise';
    case INTERNETEXPLORER11 = 'internetExplorer11';
    case INTERNETEXPLORER10 = 'internetExplorer10';
    case INTERNETEXPLORER9 = 'internetExplorer9';
    case INTERNETEXPLORER8 = 'internetExplorer8';
    case INTERNETEXPLORER7 = 'internetExplorer7';
    case INTERNETEXPLORER5 = 'internetExplorer5';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
