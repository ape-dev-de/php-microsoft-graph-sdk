<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsUserAccountControlSettings - Enum
 * Possible values for Windows user account control settings.
 */
enum WindowsUserAccountControlSettings: string
{
    case USERDEFINED = 'userDefined';
    case ALWAYSNOTIFY = 'alwaysNotify';
    case NOTIFYONAPPCHANGES = 'notifyOnAppChanges';
    case NOTIFYONAPPCHANGESWITHOUTDIMMING = 'notifyOnAppChangesWithoutDimming';
    case NEVERNOTIFY = 'neverNotify';
}
