<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcGalleryImageStatus - Enum
 */
enum CloudPcGalleryImageStatus: string
{
    case SUPPORTED = 'supported';
    case SUPPORTEDWITHWARNING = 'supportedWithWarning';
    case NOTSUPPORTED = 'notSupported';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
