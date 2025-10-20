<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExcludeTarget resources
 *
 * Available select fields:
 * - id
 * - targetType
 */
class ExcludeTargetQueryOptions extends QueryOptions
{
    public const FIELD_ID = 'id';
    public const FIELD_TARGET_TYPE = 'targetType';

    /**
     * Select specific ExcludeTarget properties
     * 
     * @param array<string> $select Use ExcludeTargetQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
