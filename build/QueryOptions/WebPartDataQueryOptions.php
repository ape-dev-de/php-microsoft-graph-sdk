<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WebPartData resources
 *
 * Available select fields:
 * - dataVersion
 * - description
 * - properties
 * - serverProcessedContent
 * - title
 */
class WebPartDataQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WebPartData
     */
    public const FIELD_DATA_VERSION = 'dataVersion';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_PROPERTIES = 'properties';
    public const FIELD_SERVER_PROCESSED_CONTENT = 'serverProcessedContent';
    public const FIELD_TITLE = 'title';

    /**
     * Select specific WebPartData properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
