<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Hashes resources
 *
 * Available select fields:
 * - crc32Hash
 * - quickXorHash
 * - sha1Hash
 * - sha256Hash
 */
class HashesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Hashes
     */
    public const FIELD_CRC32HASH = 'crc32Hash';
    public const FIELD_QUICK_XOR_HASH = 'quickXorHash';
    public const FIELD_SHA1HASH = 'sha1Hash';
    public const FIELD_SHA256HASH = 'sha256Hash';

    /**
     * Select specific Hashes properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
