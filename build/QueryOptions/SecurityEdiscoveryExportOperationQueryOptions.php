<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryExportOperation resources
 *
 * Available select fields:
 * - description
 * - exportFileMetadata
 * - exportOptions
 * - exportStructure
 * - outputName
 * - reviewSet
 * - reviewSetQuery
 */
class SecurityEdiscoveryExportOperationQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_EXPORT_FILE_METADATA = 'exportFileMetadata';
    public const FIELD_EXPORT_OPTIONS = 'exportOptions';
    public const FIELD_EXPORT_STRUCTURE = 'exportStructure';
    public const FIELD_OUTPUT_NAME = 'outputName';
    public const FIELD_REVIEW_SET = 'reviewSet';
    public const FIELD_REVIEW_SET_QUERY = 'reviewSetQuery';

    /**
     * Select specific SecurityEdiscoveryExportOperation properties
     * 
     * @param array<string> $select Use SecurityEdiscoveryExportOperationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
