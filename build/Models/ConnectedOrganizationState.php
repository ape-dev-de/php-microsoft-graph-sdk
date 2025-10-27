<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConnectedOrganizationState - Enum
 */
enum ConnectedOrganizationState: string
{
    case CONFIGURED = 'configured';
    case PROPOSED = 'proposed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
