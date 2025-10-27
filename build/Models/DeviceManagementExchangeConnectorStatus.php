<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementExchangeConnectorStatus - Enum
 * The current status of the Exchange Connector.
 */
enum DeviceManagementExchangeConnectorStatus: string
{
    case NONE = 'none';
    case CONNECTIONPENDING = 'connectionPending';
    case CONNECTED = 'connected';
    case DISCONNECTED = 'disconnected';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
