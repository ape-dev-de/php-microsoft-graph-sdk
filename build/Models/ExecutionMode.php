<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExecutionMode - Enum
 */
enum ExecutionMode: string
{
    case EVALUATEINLINE = 'evaluateInline';
    case EVALUATEOFFLINE = 'evaluateOffline';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
