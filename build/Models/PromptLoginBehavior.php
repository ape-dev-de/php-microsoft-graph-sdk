<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PromptLoginBehavior - Enum
 */
enum PromptLoginBehavior: string
{
    case TRANSLATETOFRESHPASSWORDAUTHENTICATION = 'translateToFreshPasswordAuthentication';
    case NATIVESUPPORT = 'nativeSupport';
    case DISABLED = 'disabled';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
