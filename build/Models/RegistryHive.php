<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RegistryHive - Enum
 */
enum RegistryHive: string
{
    case UNKNOWN = 'unknown';
    case CURRENTCONFIG = 'currentConfig';
    case CURRENTUSER = 'currentUser';
    case LOCALMACHINESAM = 'localMachineSam';
    case LOCALMACHINESECURITY = 'localMachineSecurity';
    case LOCALMACHINESOFTWARE = 'localMachineSoftware';
    case LOCALMACHINESYSTEM = 'localMachineSystem';
    case USERSDEFAULT = 'usersDefault';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
