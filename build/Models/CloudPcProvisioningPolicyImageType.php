<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcProvisioningPolicyImageType - Enum
 */
enum CloudPcProvisioningPolicyImageType: string
{
    case GALLERY = 'gallery';
    case CUSTOM = 'custom';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
