<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermStoreLocalizedDescription resources
 *
 * Available select fields:
 * - description
 * - languageTag
 */
class TermStoreLocalizedDescriptionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TermStoreLocalizedDescription
     */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_LANGUAGE_TAG = 'languageTag';

    /**
     * Select specific TermStoreLocalizedDescription properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
