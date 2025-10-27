<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcProvisioningType - Enum
 */
enum CloudPcProvisioningType: string
{
    case DEDICATED = 'dedicated';
    case SHARED = 'shared';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
