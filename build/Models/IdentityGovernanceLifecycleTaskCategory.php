<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceLifecycleTaskCategory - Enum
 */
enum IdentityGovernanceLifecycleTaskCategory: string
{
    case JOINER = 'joiner';
    case LEAVER = 'leaver';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case MOVER = 'mover';
}
