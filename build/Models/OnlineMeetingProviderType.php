<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnlineMeetingProviderType - Enum
 */
enum OnlineMeetingProviderType: string
{
    case UNKNOWN = 'unknown';
    case SKYPEFORBUSINESS = 'skypeForBusiness';
    case SKYPEFORCONSUMER = 'skypeForConsumer';
    case TEAMSFORBUSINESS = 'teamsForBusiness';
}
