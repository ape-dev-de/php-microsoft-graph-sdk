<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProtectionUnitStatus - Enum
 */
enum ProtectionUnitStatus: string
{
    case PROTECTREQUESTED = 'protectRequested';
    case PROTECTED = 'protected';
    case UNPROTECTREQUESTED = 'unprotectRequested';
    case UNPROTECTED = 'unprotected';
    case REMOVEREQUESTED = 'removeRequested';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
