<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VolumeType - Enum
 */
enum VolumeType: string
{
    case OPERATINGSYSTEMVOLUME = 'operatingSystemVolume';
    case FIXEDDATAVOLUME = 'fixedDataVolume';
    case REMOVABLEDATAVOLUME = 'removableDataVolume';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
