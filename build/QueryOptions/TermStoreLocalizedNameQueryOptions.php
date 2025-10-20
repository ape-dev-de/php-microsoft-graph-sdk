<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermStoreLocalizedName resources
 *
 * Available select fields:
 * - languageTag
 * - name
 */
class TermStoreLocalizedNameQueryOptions extends QueryOptions
{
    public const FIELD_LANGUAGE_TAG = 'languageTag';
    public const FIELD_NAME = 'name';

    /**
     * Select specific TermStoreLocalizedName properties
     * 
     * @param array<string> $select Use TermStoreLocalizedNameQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
