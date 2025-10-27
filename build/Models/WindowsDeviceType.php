<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsDeviceType - Enum
 * Contains properties for Windows device type. Multiple values can be selected. Default value is `none`.
 */
enum WindowsDeviceType: string
{
    case NONE = 'none';
    case DESKTOP = 'desktop';
    case MOBILE = 'mobile';
    case HOLOGRAPHIC = 'holographic';
    case TEAM = 'team';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
