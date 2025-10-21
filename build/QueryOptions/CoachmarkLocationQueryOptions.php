<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CoachmarkLocation resources
 *
 * Available select fields:
 * - length
 * - offset
 * - type
 */
class CoachmarkLocationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CoachmarkLocation
     */
    public const FIELD_LENGTH = 'length';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific CoachmarkLocation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
