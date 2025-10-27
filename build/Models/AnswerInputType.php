<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AnswerInputType - Enum
 */
enum AnswerInputType: string
{
    case TEXT = 'text';
    case RADIOBUTTON = 'radioButton';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
