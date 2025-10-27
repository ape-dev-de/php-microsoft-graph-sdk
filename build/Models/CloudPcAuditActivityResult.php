<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcAuditActivityResult - Enum
 */
enum CloudPcAuditActivityResult: string
{
    case SUCCESS = 'success';
    case CLIENTERROR = 'clientError';
    case FAILURE = 'failure';
    case TIMEOUT = 'timeout';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
