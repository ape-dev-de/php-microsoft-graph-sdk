<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SendDtmfCompletionReason - Enum
 */
enum SendDtmfCompletionReason: string
{
    case UNKNOWN = 'unknown';
    case COMPLETEDSUCCESSFULLY = 'completedSuccessfully';
    case MEDIAOPERATIONCANCELED = 'mediaOperationCanceled';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
