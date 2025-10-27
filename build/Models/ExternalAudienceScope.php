<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalAudienceScope - Enum
 */
enum ExternalAudienceScope: string
{
    case NONE = 'none';
    case CONTACTSONLY = 'contactsOnly';
    case ALL = 'all';
}
