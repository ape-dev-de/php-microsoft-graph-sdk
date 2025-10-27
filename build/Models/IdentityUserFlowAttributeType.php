<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityUserFlowAttributeType - Enum
 */
enum IdentityUserFlowAttributeType: string
{
    case BUILTIN = 'builtIn';
    case CUSTOM = 'custom';
    case REQUIRED = 'required';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
