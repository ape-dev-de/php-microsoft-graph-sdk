<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EscrowBehavior - Enum
 */
enum EscrowBehavior: string
{
    case DEFAULT = 'Default';
    case IGNORELOOKUPREFERENCERESOLUTIONFAILURE = 'IgnoreLookupReferenceResolutionFailure';
}
