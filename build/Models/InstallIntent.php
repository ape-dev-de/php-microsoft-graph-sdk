<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InstallIntent - Enum
 * Possible values for the install intent chosen by the admin.
 */
enum InstallIntent: string
{
    case AVAILABLE = 'available';
    case REQUIRED = 'required';
    case UNINSTALL = 'uninstall';
    case AVAILABLEWITHOUTENROLLMENT = 'availableWithoutEnrollment';
}
