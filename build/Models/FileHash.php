<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileHash
 */
class FileHash
{
    /** 
     * File hash type. Possible values are: unknown, sha1, sha256, md5, authenticodeHash256, lsHash, ctph, peSha1, peSha256.
     * @var FileHashType|\stdClass|null
     */
    public mixed $hashType = null;

    /** Value of the file hash. */
    public ?string $hashValue = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['hashType'])) {
            $this->hashType = $data['hashType'];
        }
        if (isset($data['hashValue'])) {
            $this->hashValue = $data['hashValue'];
        }
    }
}
