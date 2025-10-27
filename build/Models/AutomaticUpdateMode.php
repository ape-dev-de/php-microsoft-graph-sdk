<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AutomaticUpdateMode - Enum
 * Possible values for automatic update mode.
 */
enum AutomaticUpdateMode: string
{
    case USERDEFINED = 'userDefined';
    case NOTIFYDOWNLOAD = 'notifyDownload';
    case AUTOINSTALLATMAINTENANCETIME = 'autoInstallAtMaintenanceTime';
    case AUTOINSTALLANDREBOOTATMAINTENANCETIME = 'autoInstallAndRebootAtMaintenanceTime';
    case AUTOINSTALLANDREBOOTATSCHEDULEDTIME = 'autoInstallAndRebootAtScheduledTime';
    case AUTOINSTALLANDREBOOTWITHOUTENDUSERCONTROL = 'autoInstallAndRebootWithoutEndUserControl';
}
