<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OpenTypeExtension resources
 *
 * Available select fields:
 * - extensionName
 */
class OpenTypeExtensionQueryOptions extends QueryOptions
{
    public const FIELD_EXTENSION_NAME = 'extensionName';

    /**
     * Select specific OpenTypeExtension properties
     * 
     * @param array<string> $select Use OpenTypeExtensionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
