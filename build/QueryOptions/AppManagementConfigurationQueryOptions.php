<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppManagementConfiguration resources
 *
 * Available select fields:
 * - keyCredentials
 * - passwordCredentials
 */
class AppManagementConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_KEY_CREDENTIALS = 'keyCredentials';
    public const FIELD_PASSWORD_CREDENTIALS = 'passwordCredentials';

    /**
     * Select specific AppManagementConfiguration properties
     * 
     * @param array<string> $select Use AppManagementConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
