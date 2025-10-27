<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenoteSourceService - Enum
 */
enum OnenoteSourceService: string
{
    case UNKNOWN = 'Unknown';
    case ONEDRIVE = 'OneDrive';
    case ONEDRIVEFORBUSINESS = 'OneDriveForBusiness';
    case ONPREMONEDRIVEFORBUSINESS = 'OnPremOneDriveForBusiness';
}
