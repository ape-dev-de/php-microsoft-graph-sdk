<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Modality - Enum
 */
enum Modality: string
{
    case AUDIO = 'audio';
    case VIDEO = 'video';
    case VIDEOBASEDSCREENSHARING = 'videoBasedScreenSharing';
    case DATA = 'data';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
