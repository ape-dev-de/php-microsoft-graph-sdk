<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomExtensionCallbackConfiguration resources
 *
 * Available select fields:
 * - timeoutDuration
 */
class CustomExtensionCallbackConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_TIMEOUT_DURATION = 'timeoutDuration';

    /**
     * Select specific CustomExtensionCallbackConfiguration properties
     * 
     * @param array<string> $select Use CustomExtensionCallbackConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
