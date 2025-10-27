<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenoteUserRole - Enum
 */
enum OnenoteUserRole: string
{
    case NONE = 'None';
    case OWNER = 'Owner';
    case CONTRIBUTOR = 'Contributor';
    case READER = 'Reader';
}
