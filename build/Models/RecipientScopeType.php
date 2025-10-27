<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecipientScopeType - Enum
 */
enum RecipientScopeType: string
{
    case NONE = 'none';
    case INTERNAL = 'internal';
    case EXTERNAL = 'external';
    case EXTERNALPARTNER = 'externalPartner';
    case EXTERNALNONPARTNER = 'externalNonPartner';
}
