<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityReportFileMetadataCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityReportFileMetadataCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityReportFileMetadataCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityReportFileMetadataCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
