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
     */
    private ?string $hashType;

    /**
     * Value of the file hash.
     */
    private ?string $hashValue;


    public function getHashType(): ?string
    {
        return $this->hashType;
    }

    public function setHashType(?string $hashType): self
    {
        $this->hashType = $hashType;
        return $this;
    }

    public function getHashValue(): ?string
    {
        return $this->hashValue;
    }

    public function setHashValue(?string $hashValue): self
    {
        $this->hashValue = $hashValue;
        return $this;
    }

}
