<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsStartMenuModeType - Enum
 * Type of display modes for the start menu.
 */
enum WindowsStartMenuModeType: string
{
    case USERDEFINED = 'userDefined';
    case FULLSCREEN = 'fullScreen';
    case NONFULLSCREEN = 'nonFullScreen';
}
