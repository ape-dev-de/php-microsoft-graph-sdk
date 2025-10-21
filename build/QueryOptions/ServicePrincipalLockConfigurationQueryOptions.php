<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServicePrincipalLockConfiguration resources
 *
 * Available select fields:
 * - allProperties
 * - credentialsWithUsageSign
 * - credentialsWithUsageVerify
 * - isEnabled
 * - tokenEncryptionKeyId
 */
class ServicePrincipalLockConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServicePrincipalLockConfiguration
     */
    public const FIELD_ALL_PROPERTIES = 'allProperties';
    public const FIELD_CREDENTIALS_WITH_USAGE_SIGN = 'credentialsWithUsageSign';
    public const FIELD_CREDENTIALS_WITH_USAGE_VERIFY = 'credentialsWithUsageVerify';
    public const FIELD_IS_ENABLED = 'isEnabled';
    public const FIELD_TOKEN_ENCRYPTION_KEY_ID = 'tokenEncryptionKeyId';

    /**
     * Select specific ServicePrincipalLockConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
