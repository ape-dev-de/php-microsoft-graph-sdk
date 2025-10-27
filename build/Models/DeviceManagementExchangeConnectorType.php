<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementExchangeConnectorType - Enum
 * The type of Exchange Connector.
 */
enum DeviceManagementExchangeConnectorType: string
{
    case ONPREMISES = 'onPremises';
    case HOSTED = 'hosted';
    case SERVICETOSERVICE = 'serviceToService';
    case DEDICATED = 'dedicated';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
