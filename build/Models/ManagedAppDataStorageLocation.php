<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppDataStorageLocation - Enum
 * The storage locations where managed apps can potentially store their data.
 */
enum ManagedAppDataStorageLocation: string
{
    case ONEDRIVEFORBUSINESS = 'oneDriveForBusiness';
    case SHAREPOINT = 'sharePoint';
    case BOX = 'box';
    case LOCALSTORAGE = 'localStorage';
}
