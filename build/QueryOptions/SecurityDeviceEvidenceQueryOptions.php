<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDeviceEvidence resources
 *
 * Available select fields:
 * - azureAdDeviceId
 * - defenderAvStatus
 * - deviceDnsName
 * - dnsDomain
 * - firstSeenDateTime
 * - healthStatus
 * - hostName
 * - ipInterfaces
 * - lastExternalIpAddress
 * - lastIpAddress
 * - loggedOnUsers
 * - mdeDeviceId
 * - ntDomain
 * - onboardingStatus
 * - osBuild
 * - osPlatform
 * - rbacGroupId
 * - rbacGroupName
 * - riskScore
 * - version
 * - vmMetadata
 */
class SecurityDeviceEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_AZURE_AD_DEVICE_ID = 'azureAdDeviceId';
    public const FIELD_DEFENDER_AV_STATUS = 'defenderAvStatus';
    public const FIELD_DEVICE_DNS_NAME = 'deviceDnsName';
    public const FIELD_DNS_DOMAIN = 'dnsDomain';
    public const FIELD_FIRST_SEEN_DATE_TIME = 'firstSeenDateTime';
    public const FIELD_HEALTH_STATUS = 'healthStatus';
    public const FIELD_HOST_NAME = 'hostName';
    public const FIELD_IP_INTERFACES = 'ipInterfaces';
    public const FIELD_LAST_EXTERNAL_IP_ADDRESS = 'lastExternalIpAddress';
    public const FIELD_LAST_IP_ADDRESS = 'lastIpAddress';
    public const FIELD_LOGGED_ON_USERS = 'loggedOnUsers';
    public const FIELD_MDE_DEVICE_ID = 'mdeDeviceId';
    public const FIELD_NT_DOMAIN = 'ntDomain';
    public const FIELD_ONBOARDING_STATUS = 'onboardingStatus';
    public const FIELD_OS_BUILD = 'osBuild';
    public const FIELD_OS_PLATFORM = 'osPlatform';
    public const FIELD_RBAC_GROUP_ID = 'rbacGroupId';
    public const FIELD_RBAC_GROUP_NAME = 'rbacGroupName';
    public const FIELD_RISK_SCORE = 'riskScore';
    public const FIELD_VERSION = 'version';
    public const FIELD_VM_METADATA = 'vmMetadata';

    /**
     * Select specific SecurityDeviceEvidence properties
     * 
     * @param array<string> $select Use SecurityDeviceEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
