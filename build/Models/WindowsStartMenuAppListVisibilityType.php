<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsStartMenuAppListVisibilityType - Enum
 * Type of start menu app list visibility.
 */
enum WindowsStartMenuAppListVisibilityType: string
{
    case USERDEFINED = 'userDefined';
    case COLLAPSE = 'collapse';
    case REMOVE = 'remove';
    case DISABLESETTINGSAPP = 'disableSettingsApp';
}
