<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProtectionPolicyStatus - Enum
 */
enum ProtectionPolicyStatus: string
{
    case INACTIVE = 'inactive';
    case ACTIVEWITHERRORS = 'activeWithErrors';
    case UPDATING = 'updating';
    case ACTIVE = 'active';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
