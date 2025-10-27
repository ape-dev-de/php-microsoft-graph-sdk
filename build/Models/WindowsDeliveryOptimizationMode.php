<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsDeliveryOptimizationMode - Enum
 * Delivery optimization mode for peer distribution
 */
enum WindowsDeliveryOptimizationMode: string
{
    case USERDEFINED = 'userDefined';
    case HTTPONLY = 'httpOnly';
    case HTTPWITHPEERINGNAT = 'httpWithPeeringNat';
    case HTTPWITHPEERINGPRIVATEGROUP = 'httpWithPeeringPrivateGroup';
    case HTTPWITHINTERNETPEERING = 'httpWithInternetPeering';
    case SIMPLEDOWNLOAD = 'simpleDownload';
    case BYPASSMODE = 'bypassMode';
}
