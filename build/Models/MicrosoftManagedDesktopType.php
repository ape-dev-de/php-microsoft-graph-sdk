<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftManagedDesktopType - Enum
 */
enum MicrosoftManagedDesktopType: string
{
    case NOTMANAGED = 'notManaged';
    case PREMIUMMANAGED = 'premiumManaged';
    case STANDARDMANAGED = 'standardManaged';
    case STARTERMANAGED = 'starterManaged';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
