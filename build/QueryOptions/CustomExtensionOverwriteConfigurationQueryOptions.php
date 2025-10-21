<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomExtensionOverwriteConfiguration resources
 *
 * Available select fields:
 * - behaviorOnError
 * - clientConfiguration
 */
class CustomExtensionOverwriteConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CustomExtensionOverwriteConfiguration
     */
    public const FIELD_BEHAVIOR_ON_ERROR = 'behaviorOnError';
    public const FIELD_CLIENT_CONFIGURATION = 'clientConfiguration';

    /**
     * Select specific CustomExtensionOverwriteConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
