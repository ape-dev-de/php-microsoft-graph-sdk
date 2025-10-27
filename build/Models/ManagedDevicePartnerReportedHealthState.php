<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedDevicePartnerReportedHealthState - Enum
 * Available health states for the Device Health API
 */
enum ManagedDevicePartnerReportedHealthState: string
{
    case UNKNOWN = 'unknown';
    case ACTIVATED = 'activated';
    case DEACTIVATED = 'deactivated';
    case SECURED = 'secured';
    case LOWSEVERITY = 'lowSeverity';
    case MEDIUMSEVERITY = 'mediumSeverity';
    case HIGHSEVERITY = 'highSeverity';
    case UNRESPONSIVE = 'unresponsive';
    case COMPROMISED = 'compromised';
    case MISCONFIGURED = 'misconfigured';
}
