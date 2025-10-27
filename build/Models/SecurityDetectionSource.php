<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDetectionSource - Enum
 */
enum SecurityDetectionSource: string
{
    case UNKNOWN = 'unknown';
    case MICROSOFTDEFENDERFORENDPOINT = 'microsoftDefenderForEndpoint';
    case ANTIVIRUS = 'antivirus';
    case SMARTSCREEN = 'smartScreen';
    case CUSTOMTI = 'customTi';
    case MICROSOFTDEFENDERFOROFFICE365 = 'microsoftDefenderForOffice365';
    case AUTOMATEDINVESTIGATION = 'automatedInvestigation';
    case MICROSOFTTHREATEXPERTS = 'microsoftThreatExperts';
    case CUSTOMDETECTION = 'customDetection';
    case MICROSOFTDEFENDERFORIDENTITY = 'microsoftDefenderForIdentity';
    case CLOUDAPPSECURITY = 'cloudAppSecurity';
    case MICROSOFT365DEFENDER = 'microsoft365Defender';
    case AZUREADIDENTITYPROTECTION = 'azureAdIdentityProtection';
    case MANUAL = 'manual';
    case MICROSOFTDATALOSSPREVENTION = 'microsoftDataLossPrevention';
    case APPGOVERNANCEPOLICY = 'appGovernancePolicy';
    case APPGOVERNANCEDETECTION = 'appGovernanceDetection';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case MICROSOFTDEFENDERFORCLOUD = 'microsoftDefenderForCloud';
    case MICROSOFTDEFENDERFORIOT = 'microsoftDefenderForIoT';
    case MICROSOFTDEFENDERFORSERVERS = 'microsoftDefenderForServers';
    case MICROSOFTDEFENDERFORSTORAGE = 'microsoftDefenderForStorage';
    case MICROSOFTDEFENDERFORDNS = 'microsoftDefenderForDNS';
    case MICROSOFTDEFENDERFORDATABASES = 'microsoftDefenderForDatabases';
    case MICROSOFTDEFENDERFORCONTAINERS = 'microsoftDefenderForContainers';
    case MICROSOFTDEFENDERFORNETWORK = 'microsoftDefenderForNetwork';
    case MICROSOFTDEFENDERFORAPPSERVICE = 'microsoftDefenderForAppService';
    case MICROSOFTDEFENDERFORKEYVAULT = 'microsoftDefenderForKeyVault';
    case MICROSOFTDEFENDERFORRESOURCEMANAGER = 'microsoftDefenderForResourceManager';
    case MICROSOFTDEFENDERFORAPIMANAGEMENT = 'microsoftDefenderForApiManagement';
    case NRTALERTS = 'nrtAlerts';
    case SCHEDULEDALERTS = 'scheduledAlerts';
    case MICROSOFTDEFENDERTHREATINTELLIGENCEANALYTICS = 'microsoftDefenderThreatIntelligenceAnalytics';
    case BUILTINML = 'builtInMl';
    case MICROSOFTINSIDERRISKMANAGEMENT = 'microsoftInsiderRiskManagement';
    case MICROSOFTTHREATINTELLIGENCE = 'microsoftThreatIntelligence';
    case MICROSOFTSENTINEL = 'microsoftSentinel';
}
