<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChoiceColumn resources
 *
 * Available select fields:
 * - allowTextEntry
 * - choices
 * - displayAs
 */
class ChoiceColumnQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChoiceColumn
     */
    public const FIELD_ALLOW_TEXT_ENTRY = 'allowTextEntry';
    public const FIELD_CHOICES = 'choices';
    public const FIELD_DISPLAY_AS = 'displayAs';

    /**
     * Select specific ChoiceColumn properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
