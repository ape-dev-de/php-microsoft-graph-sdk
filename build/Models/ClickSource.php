<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ClickSource - Enum
 */
enum ClickSource: string
{
    case UNKNOWN = 'unknown';
    case QRCODE = 'qrCode';
    case PHISHINGURL = 'phishingUrl';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
