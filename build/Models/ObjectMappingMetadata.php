<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ObjectMappingMetadata - Enum
 */
enum ObjectMappingMetadata: string
{
    case ESCROWBEHAVIOR = 'EscrowBehavior';
    case DISABLEMONITORINGFORCHANGES = 'DisableMonitoringForChanges';
    case ORIGINALJOININGPROPERTY = 'OriginalJoiningProperty';
    case DISPOSITION = 'Disposition';
    case ISCUSTOMERDEFINED = 'IsCustomerDefined';
    case EXCLUDEFROMREPORTING = 'ExcludeFromReporting';
    case UNSYNCHRONIZED = 'Unsynchronized';
}
