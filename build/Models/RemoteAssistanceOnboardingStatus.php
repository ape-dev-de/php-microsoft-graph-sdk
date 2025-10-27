<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RemoteAssistanceOnboardingStatus - Enum
 * The current TeamViewer connector status
 */
enum RemoteAssistanceOnboardingStatus: string
{
    case NOTONBOARDED = 'notOnboarded';
    case ONBOARDING = 'onboarding';
    case ONBOARDED = 'onboarded';
}
