<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAutoUpdateSupersededAppsState - Enum
 * Contains value for auto-update superseded apps.
 */
enum Win32LobAutoUpdateSupersededAppsState: string
{
    case NOTCONFIGURED = 'notConfigured';
    case ENABLED = 'enabled';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
