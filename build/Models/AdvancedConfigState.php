<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AdvancedConfigState - Enum
 */
enum AdvancedConfigState: string
{
    case DEFAULT = 'default';
    case ENABLED = 'enabled';
    case DISABLED = 'disabled';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
