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
    public const FIELD_ALLOW_MULTIPLE_SELECTION = 'allowMultipleSelection';
    public const FIELD_CHOOSE_FROM_TYPE = 'chooseFromType';
    public const FIELD_DISPLAY_AS = 'displayAs';

    /**
     * Select specific PersonOrGroupColumn properties
     * 
     * @param array<string> $select Use PersonOrGroupColumnQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
