<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EditionUpgradeLicenseType - Enum
 * Edition Upgrade License type
 */
enum EditionUpgradeLicenseType: string
{
    case PRODUCTKEY = 'productKey';
    case LICENSEFILE = 'licenseFile';
}
