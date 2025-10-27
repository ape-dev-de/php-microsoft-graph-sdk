<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventRegistrationQuestionAnswerInputType - Enum
 */
enum VirtualEventRegistrationQuestionAnswerInputType: string
{
    case TEXT = 'text';
    case MULTILINETEXT = 'multilineText';
    case SINGLECHOICE = 'singleChoice';
    case MULTICHOICE = 'multiChoice';
    case BOOLEAN = 'boolean';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
