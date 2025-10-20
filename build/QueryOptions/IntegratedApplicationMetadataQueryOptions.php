<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IntegratedApplicationMetadata resources
 *
 * Available select fields:
 * - name
 * - version
 */
class IntegratedApplicationMetadataQueryOptions extends QueryOptions
{
    public const FIELD_NAME = 'name';
    public const FIELD_VERSION = 'version';

    /**
     * Select specific IntegratedApplicationMetadata properties
     * 
     * @param array<string> $select Use IntegratedApplicationMetadataQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
