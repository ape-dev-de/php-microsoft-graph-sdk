<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PersonOrGroupColumn resources
 *
 * Available select fields:
 * - allowMultipleSelection
 * - chooseFromType
 * - displayAs
 */
class PersonOrGroupColumnQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PersonOrGroupColumn
     */
    public const FIELD_ALLOW_MULTIPLE_SELECTION = 'allowMultipleSelection';
    public const FIELD_CHOOSE_FROM_TYPE = 'chooseFromType';
    public const FIELD_DISPLAY_AS = 'displayAs';

    /**
     * Select specific PersonOrGroupColumn properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
