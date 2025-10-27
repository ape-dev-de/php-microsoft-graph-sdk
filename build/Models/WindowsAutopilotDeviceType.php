<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsAutopilotDeviceType - Enum
 */
enum WindowsAutopilotDeviceType: string
{
    case WINDOWSPC = 'windowsPc';
    case HOLOLENS = 'holoLens';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
