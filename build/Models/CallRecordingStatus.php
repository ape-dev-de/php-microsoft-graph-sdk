<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordingStatus - Enum
 */
enum CallRecordingStatus: string
{
    case SUCCESS = 'success';
    case FAILURE = 'failure';
    case INITIAL = 'initial';
    case CHUNKFINISHED = 'chunkFinished';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
