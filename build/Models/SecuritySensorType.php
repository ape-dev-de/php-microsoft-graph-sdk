<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySensorType - Enum
 */
enum SecuritySensorType: string
{
    case ADCONNECTINTEGRATED = 'adConnectIntegrated';
    case ADCSINTEGRATED = 'adcsIntegrated';
    case ADFSINTEGRATED = 'adfsIntegrated';
    case DOMAINCONTROLLERINTEGRATED = 'domainControllerIntegrated';
    case DOMAINCONTROLLERSTANDALONE = 'domainControllerStandalone';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
