<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TargetedManagedAppGroupType - Enum
 * Indicates a collection of apps to target which can be one of several pre-defined lists of apps or a manually selected list of apps
 */
enum TargetedManagedAppGroupType: string
{
    case SELECTEDPUBLICAPPS = 'selectedPublicApps';
    case ALLCOREMICROSOFTAPPS = 'allCoreMicrosoftApps';
    case ALLMICROSOFTAPPS = 'allMicrosoftApps';
    case ALLAPPS = 'allApps';
}
