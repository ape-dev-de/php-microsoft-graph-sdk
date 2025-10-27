<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsUserType - Enum
 */
enum WindowsUserType: string
{
    case ADMINISTRATOR = 'administrator';
    case STANDARD = 'standard';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
