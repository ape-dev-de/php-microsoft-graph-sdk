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
    /**
     * Available select fields for TermStoreLocalizedLabel
     */
    public const FIELD_IS_DEFAULT = 'isDefault';
    public const FIELD_LANGUAGE_TAG = 'languageTag';
    public const FIELD_NAME = 'name';

    /**
     * Select specific TermStoreLocalizedLabel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
