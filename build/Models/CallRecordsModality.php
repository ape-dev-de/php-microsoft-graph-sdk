<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsModality - Enum
 */
enum CallRecordsModality: string
{
    case AUDIO = 'audio';
    case VIDEO = 'video';
    case VIDEOBASEDSCREENSHARING = 'videoBasedScreenSharing';
    case DATA = 'data';
    case SCREENSHARING = 'screenSharing';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
