<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecordingStatus - Enum
 */
enum RecordingStatus: string
{
    case UNKNOWN = 'unknown';
    case NOTRECORDING = 'notRecording';
    case RECORDING = 'recording';
    case FAILED = 'failed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
