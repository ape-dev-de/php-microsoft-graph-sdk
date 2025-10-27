<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OperatingSystemUpgradeEligibility - Enum
 * Work From Anywhere windows device upgrade eligibility status.
 */
enum OperatingSystemUpgradeEligibility: string
{
    case UPGRADED = 'upgraded';
    case UNKNOWN = 'unknown';
    case NOTCAPABLE = 'notCapable';
    case CAPABLE = 'capable';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
