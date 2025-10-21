<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AzureADRegistrationPolicy resources
 *
 * Available select fields:
 * - allowedToRegister
 * - isAdminConfigurable
 */
class AzureADRegistrationPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AzureADRegistrationPolicy
     */
    public const FIELD_ALLOWED_TO_REGISTER = 'allowedToRegister';
    public const FIELD_IS_ADMIN_CONFIGURABLE = 'isAdminConfigurable';

    /**
     * Select specific AzureADRegistrationPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
