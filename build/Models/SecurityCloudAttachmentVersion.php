<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCloudAttachmentVersion - Enum
 */
enum SecurityCloudAttachmentVersion: string
{
    case LATEST = 'latest';
    case RECENT10 = 'recent10';
    case RECENT100 = 'recent100';
    case ALL = 'all';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
