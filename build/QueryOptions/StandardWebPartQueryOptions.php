<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for StandardWebPart resources
 *
 * Available select fields:
 * - containerTextWebPartId
 * - data
 * - webPartType
 */
class StandardWebPartQueryOptions extends QueryOptions
{
    public const FIELD_CONTAINER_TEXT_WEB_PART_ID = 'containerTextWebPartId';
    public const FIELD_DATA = 'data';
    public const FIELD_WEB_PART_TYPE = 'webPartType';

    /**
     * Select specific StandardWebPart properties
     * 
     * @param array<string> $select Use StandardWebPartQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
