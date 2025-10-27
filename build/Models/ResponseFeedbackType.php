<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResponseFeedbackType - Enum
 */
enum ResponseFeedbackType: string
{
    case NONE = 'none';
    case NOTDETECTED = 'notDetected';
    case VERYUNPLEASANT = 'veryUnpleasant';
    case UNPLEASANT = 'unpleasant';
    case NEUTRAL = 'neutral';
    case PLEASANT = 'pleasant';
    case VERYPLEASANT = 'veryPleasant';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
