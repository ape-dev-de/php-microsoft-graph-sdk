<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteractionType - Enum
 */
enum AiInteractionType: string
{
    case USERPROMPT = 'userPrompt';
    case AIRESPONSE = 'aiResponse';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
