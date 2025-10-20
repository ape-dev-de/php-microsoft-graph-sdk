<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityExportFileMetadataCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityExportFileMetadataCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityExportFileMetadataCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityExportFileMetadataCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
