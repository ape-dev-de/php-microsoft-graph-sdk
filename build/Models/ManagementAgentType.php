<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagementAgentType - Enum
 */
enum ManagementAgentType: string
{
    case EAS = 'eas';
    case MDM = 'mdm';
    case EASMDM = 'easMdm';
    case INTUNECLIENT = 'intuneClient';
    case EASINTUNECLIENT = 'easIntuneClient';
    case CONFIGURATIONMANAGERCLIENT = 'configurationManagerClient';
    case CONFIGURATIONMANAGERCLIENTMDM = 'configurationManagerClientMdm';
    case CONFIGURATIONMANAGERCLIENTMDMEAS = 'configurationManagerClientMdmEas';
    case UNKNOWN = 'unknown';
    case JAMF = 'jamf';
    case GOOGLECLOUDDEVICEPOLICYCONTROLLER = 'googleCloudDevicePolicyController';
    case MICROSOFT365MANAGEDMDM = 'microsoft365ManagedMdm';
    case MSSENSE = 'msSense';
}
