<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharedPCAccountDeletionPolicyType - Enum
 * Possible values for when accounts are deleted on a shared PC.
 */
enum SharedPCAccountDeletionPolicyType: string
{
    case IMMEDIATE = 'immediate';
    case DISKSPACETHRESHOLD = 'diskSpaceThreshold';
    case DISKSPACETHRESHOLDORINACTIVETHRESHOLD = 'diskSpaceThresholdOrInactiveThreshold';
}
