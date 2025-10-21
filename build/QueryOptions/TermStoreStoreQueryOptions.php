<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermStoreStore resources
 *
 * Available select fields:
 * - defaultLanguageTag
 * - languageTags
 * - groups
 * - sets
 */
class TermStoreStoreQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TermStoreStore
     */
    public const FIELD_DEFAULT_LANGUAGE_TAG = 'defaultLanguageTag';
    public const FIELD_LANGUAGE_TAGS = 'languageTags';
    public const FIELD_GROUPS = 'groups';
    public const FIELD_SETS = 'sets';

    /**
     * Select specific TermStoreStore properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
