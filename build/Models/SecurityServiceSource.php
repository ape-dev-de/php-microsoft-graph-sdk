<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityServiceSource - Enum
 */
enum SecurityServiceSource: string
{
    case UNKNOWN = 'unknown';
    case MICROSOFTDEFENDERFORENDPOINT = 'microsoftDefenderForEndpoint';
    case MICROSOFTDEFENDERFORIDENTITY = 'microsoftDefenderForIdentity';
    case MICROSOFTDEFENDERFORCLOUDAPPS = 'microsoftDefenderForCloudApps';
    case MICROSOFTDEFENDERFOROFFICE365 = 'microsoftDefenderForOffice365';
    case MICROSOFT365DEFENDER = 'microsoft365Defender';
    case AZUREADIDENTITYPROTECTION = 'azureAdIdentityProtection';
    case MICROSOFTAPPGOVERNANCE = 'microsoftAppGovernance';
    case DATALOSSPREVENTION = 'dataLossPrevention';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case MICROSOFTDEFENDERFORCLOUD = 'microsoftDefenderForCloud';
    case MICROSOFTSENTINEL = 'microsoftSentinel';
    case MICROSOFTINSIDERRISKMANAGEMENT = 'microsoftInsiderRiskManagement';
    case MICROSOFTTHREATINTELLIGENCE = 'microsoftThreatIntelligence';
}
