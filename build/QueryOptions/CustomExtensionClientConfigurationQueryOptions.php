<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomExtensionClientConfiguration resources
 *
 * Available select fields:
 * - maximumRetries
 * - timeoutInMilliseconds
 */
class CustomExtensionClientConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_MAXIMUM_RETRIES = 'maximumRetries';
    public const FIELD_TIMEOUT_IN_MILLISECONDS = 'timeoutInMilliseconds';

    /**
     * Select specific CustomExtensionClientConfiguration properties
     * 
     * @param array<string> $select Use CustomExtensionClientConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
