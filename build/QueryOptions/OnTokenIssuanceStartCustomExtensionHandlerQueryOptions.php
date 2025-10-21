<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnTokenIssuanceStartCustomExtensionHandler resources
 *
 * Available select fields:
 * - configuration
 * - customExtension
 */
class OnTokenIssuanceStartCustomExtensionHandlerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnTokenIssuanceStartCustomExtensionHandler
     */
    public const FIELD_CONFIGURATION = 'configuration';
    public const FIELD_CUSTOM_EXTENSION = 'customExtension';

    /**
     * Select specific OnTokenIssuanceStartCustomExtensionHandler properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
