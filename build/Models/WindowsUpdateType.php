<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsUpdateType - Enum
 * Which branch devices will receive their updates from
 */
enum WindowsUpdateType: string
{
    case USERDEFINED = 'userDefined';
    case ALL = 'all';
    case BUSINESSREADYONLY = 'businessReadyOnly';
    case WINDOWSINSIDERBUILDFAST = 'windowsInsiderBuildFast';
    case WINDOWSINSIDERBUILDSLOW = 'windowsInsiderBuildSlow';
    case WINDOWSINSIDERBUILDRELEASE = 'windowsInsiderBuildRelease';
}
