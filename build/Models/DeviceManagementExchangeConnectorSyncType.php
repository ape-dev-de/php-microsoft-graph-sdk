<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementExchangeConnectorSyncType - Enum
 * The type of Exchange Connector sync requested.
 */
enum DeviceManagementExchangeConnectorSyncType: string
{
    case FULLSYNC = 'fullSync';
    case DELTASYNC = 'deltaSync';
}
