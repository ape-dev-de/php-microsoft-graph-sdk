<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ComplianceState - Enum
 * Compliance state.
 */
enum ComplianceState: string
{
    case UNKNOWN = 'unknown';
    case COMPLIANT = 'compliant';
    case NONCOMPLIANT = 'noncompliant';
    case CONFLICT = 'conflict';
    case ERROR = 'error';
    case INGRACEPERIOD = 'inGracePeriod';
    case CONFIGMANAGER = 'configManager';
}
