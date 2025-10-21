<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FileHash resources
 *
 * Available select fields:
 * - hashType
 * - hashValue
 */
class FileHashQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FileHash
     */
    public const FIELD_HASH_TYPE = 'hashType';
    public const FIELD_HASH_VALUE = 'hashValue';

    /**
     * Select specific FileHash properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
