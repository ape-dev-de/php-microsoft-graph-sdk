<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintJobStateDetail - Enum
 */
enum PrintJobStateDetail: string
{
    case UPLOADPENDING = 'uploadPending';
    case TRANSFORMING = 'transforming';
    case COMPLETEDSUCCESSFULLY = 'completedSuccessfully';
    case COMPLETEDWITHWARNINGS = 'completedWithWarnings';
    case COMPLETEDWITHERRORS = 'completedWithErrors';
    case RELEASEWAIT = 'releaseWait';
    case INTERPRETING = 'interpreting';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
