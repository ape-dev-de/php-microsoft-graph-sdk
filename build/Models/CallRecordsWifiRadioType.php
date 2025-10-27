<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsWifiRadioType - Enum
 */
enum CallRecordsWifiRadioType: string
{
    case UNKNOWN = 'unknown';
    case WIFI80211A = 'wifi80211a';
    case WIFI80211B = 'wifi80211b';
    case WIFI80211G = 'wifi80211g';
    case WIFI80211N = 'wifi80211n';
    case WIFI80211AC = 'wifi80211ac';
    case WIFI80211AX = 'wifi80211ax';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
