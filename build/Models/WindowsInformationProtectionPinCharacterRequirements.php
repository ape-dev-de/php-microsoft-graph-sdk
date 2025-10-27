<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionPinCharacterRequirements - Enum
 * Pin Character Requirements
 */
enum WindowsInformationProtectionPinCharacterRequirements: string
{
    case NOTALLOW = 'notAllow';
    case REQUIREATLEASTONE = 'requireAtLeastOne';
    case ALLOW = 'allow';
}
