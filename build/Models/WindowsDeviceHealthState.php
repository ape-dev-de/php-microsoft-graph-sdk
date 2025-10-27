<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsDeviceHealthState - Enum
 * Computer endpoint protection state
 */
enum WindowsDeviceHealthState: string
{
    case CLEAN = 'clean';
    case FULLSCANPENDING = 'fullScanPending';
    case REBOOTPENDING = 'rebootPending';
    case MANUALSTEPSPENDING = 'manualStepsPending';
    case OFFLINESCANPENDING = 'offlineScanPending';
    case CRITICAL = 'critical';
}
