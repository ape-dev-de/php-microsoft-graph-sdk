<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * QuarantineReason - Enum
 */
enum QuarantineReason: string
{
    case ENCOUNTEREDBASEESCROWTHRESHOLD = 'EncounteredBaseEscrowThreshold';
    case ENCOUNTEREDTOTALESCROWTHRESHOLD = 'EncounteredTotalEscrowThreshold';
    case ENCOUNTEREDESCROWPROPORTIONTHRESHOLD = 'EncounteredEscrowProportionThreshold';
    case ENCOUNTEREDQUARANTINEEXCEPTION = 'EncounteredQuarantineException';
    case UNKNOWN = 'Unknown';
    case QUARANTINEDONDEMAND = 'QuarantinedOnDemand';
    case TOOMANYDELETES = 'TooManyDeletes';
    case INGESTIONINTERRUPTED = 'IngestionInterrupted';
}
