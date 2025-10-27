<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InstallState - Enum
 * Possible values for install state.
 */
enum InstallState: string
{
    case NOTAPPLICABLE = 'notApplicable';
    case INSTALLED = 'installed';
    case FAILED = 'failed';
    case NOTINSTALLED = 'notInstalled';
    case UNINSTALLFAILED = 'uninstallFailed';
    case UNKNOWN = 'unknown';
}
