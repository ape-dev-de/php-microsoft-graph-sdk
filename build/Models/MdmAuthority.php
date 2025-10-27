<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MdmAuthority - Enum
 * Mobile device management authority.
 */
enum MdmAuthority: string
{
    case UNKNOWN = 'unknown';
    case INTUNE = 'intune';
    case SCCM = 'sccm';
    case OFFICE365 = 'office365';
}
