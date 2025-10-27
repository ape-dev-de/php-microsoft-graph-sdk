<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppMsiPackageType - Enum
 * Indicates the package type of an MSI Win32LobApp.
 */
enum Win32LobAppMsiPackageType: string
{
    case PERMACHINE = 'perMachine';
    case PERUSER = 'perUser';
    case DUALPURPOSE = 'dualPurpose';
}
