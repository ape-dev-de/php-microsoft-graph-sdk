<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ClonableTeamParts - Enum
 */
enum ClonableTeamParts: string
{
    case APPS = 'apps';
    case TABS = 'tabs';
    case SETTINGS = 'settings';
    case CHANNELS = 'channels';
    case MEMBERS = 'members';
}
