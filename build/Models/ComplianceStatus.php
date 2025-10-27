<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ComplianceStatus - Enum
 */
enum ComplianceStatus: string
{
    case UNKNOWN = 'unknown';
    case NOTAPPLICABLE = 'notApplicable';
    case COMPLIANT = 'compliant';
    case REMEDIATED = 'remediated';
    case NONCOMPLIANT = 'nonCompliant';
    case ERROR = 'error';
    case CONFLICT = 'conflict';
    case NOTASSIGNED = 'notAssigned';
}
