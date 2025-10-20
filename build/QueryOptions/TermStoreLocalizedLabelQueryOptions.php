<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermStoreLocalizedLabel resources
 *
 * Available select fields:
 * - isDefault
 * - languageTag
 * - name
 */
class TermStoreLocalizedLabelQueryOptions extends QueryOptions
{
    public const FIELD_IS_DEFAULT = 'isDefault';
    public const FIELD_LANGUAGE_TAG = 'languageTag';
    public const FIELD_NAME = 'name';

    /**
     * Select specific TermStoreLocalizedLabel properties
     * 
     * @param array<string> $select Use TermStoreLocalizedLabelQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
