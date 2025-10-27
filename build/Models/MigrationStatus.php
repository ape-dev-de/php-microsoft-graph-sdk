<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MigrationStatus - Enum
 */
enum MigrationStatus: string
{
    case READY = 'ready';
    case NEEDSREVIEW = 'needsReview';
    case ADDITIONALSTEPSREQUIRED = 'additionalStepsRequired';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
