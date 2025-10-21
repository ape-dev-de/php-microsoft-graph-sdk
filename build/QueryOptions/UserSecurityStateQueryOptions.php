<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserSecurityState resources
 *
 * Available select fields:
 * - aadUserId
 * - accountName
 * - domainName
 * - emailRole
 * - isVpn
 * - logonDateTime
 * - logonId
 * - logonIp
 * - logonLocation
 * - logonType
 * - onPremisesSecurityIdentifier
 * - riskScore
 * - userAccountType
 * - userPrincipalName
 */
class UserSecurityStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserSecurityState
     */
    public const FIELD_AAD_USER_ID = 'aadUserId';
    public const FIELD_ACCOUNT_NAME = 'accountName';
    public const FIELD_DOMAIN_NAME = 'domainName';
    public const FIELD_EMAIL_ROLE = 'emailRole';
    public const FIELD_IS_VPN = 'isVpn';
    public const FIELD_LOGON_DATE_TIME = 'logonDateTime';
    public const FIELD_LOGON_ID = 'logonId';
    public const FIELD_LOGON_IP = 'logonIp';
    public const FIELD_LOGON_LOCATION = 'logonLocation';
    public const FIELD_LOGON_TYPE = 'logonType';
    public const FIELD_ON_PREMISES_SECURITY_IDENTIFIER = 'onPremisesSecurityIdentifier';
    public const FIELD_RISK_SCORE = 'riskScore';
    public const FIELD_USER_ACCOUNT_TYPE = 'userAccountType';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific UserSecurityState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
