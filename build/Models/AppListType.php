<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppListType - Enum
 * Possible values of the compliance app list.
 */
enum AppListType: string
{
    case NONE = 'none';
    case APPSINLISTCOMPLIANT = 'appsInListCompliant';
    case APPSNOTINLISTCOMPLIANT = 'appsNotInListCompliant';
}
