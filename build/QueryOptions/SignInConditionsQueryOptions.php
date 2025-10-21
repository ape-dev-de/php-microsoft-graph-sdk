<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SignInConditions resources
 *
 * Available select fields:
 * - authenticationFlow
 * - clientAppType
 * - country
 * - deviceInfo
 * - devicePlatform
 * - insiderRiskLevel
 * - ipAddress
 * - servicePrincipalRiskLevel
 * - signInRiskLevel
 * - userRiskLevel
 */
class SignInConditionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SignInConditions
     */
    public const FIELD_AUTHENTICATION_FLOW = 'authenticationFlow';
    public const FIELD_CLIENT_APP_TYPE = 'clientAppType';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_DEVICE_INFO = 'deviceInfo';
    public const FIELD_DEVICE_PLATFORM = 'devicePlatform';
    public const FIELD_INSIDER_RISK_LEVEL = 'insiderRiskLevel';
    public const FIELD_IP_ADDRESS = 'ipAddress';
    public const FIELD_SERVICE_PRINCIPAL_RISK_LEVEL = 'servicePrincipalRiskLevel';
    public const FIELD_SIGN_IN_RISK_LEVEL = 'signInRiskLevel';
    public const FIELD_USER_RISK_LEVEL = 'userRiskLevel';

    /**
     * Select specific SignInConditions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
