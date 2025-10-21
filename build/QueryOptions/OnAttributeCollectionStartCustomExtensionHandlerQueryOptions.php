<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnAttributeCollectionStartCustomExtensionHandler resources
 *
 * Available select fields:
 * - configuration
 * - customExtension
 */
class OnAttributeCollectionStartCustomExtensionHandlerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnAttributeCollectionStartCustomExtensionHandler
     */
    public const FIELD_CONFIGURATION = 'configuration';
    public const FIELD_CUSTOM_EXTENSION = 'customExtension';

    /**
     * Select specific OnAttributeCollectionStartCustomExtensionHandler properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
