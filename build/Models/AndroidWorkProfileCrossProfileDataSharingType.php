<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidWorkProfileCrossProfileDataSharingType - Enum
 * Android Work Profile cross profile data sharing type.
 */
enum AndroidWorkProfileCrossProfileDataSharingType: string
{
    case DEVICEDEFAULT = 'deviceDefault';
    case PREVENTANY = 'preventAny';
    case ALLOWPERSONALTOWORK = 'allowPersonalToWork';
    case NORESTRICTIONS = 'noRestrictions';
}
