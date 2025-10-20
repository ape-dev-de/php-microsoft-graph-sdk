<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Hashes
 */
class Hashes
{
    /**
     * The CRC32 value of the file (if available). Read-only.
     */
    private ?string $crc32Hash;

    /**
     * A proprietary hash of the file that can be used to determine if the contents of the file change (if available). Read-only.
     */
    private ?string $quickXorHash;

    /**
     * SHA1 hash for the contents of the file (if available). Read-only.
     */
    private ?string $sha1Hash;

    /**
     * This property isn't supported. Don't use.
     */
    private ?string $sha256Hash;

    public function getCrc32Hash(): ?string
    {
        return $this->crc32Hash;
    }

    public function setCrc32Hash(?string $crc32Hash): self
    {
        $this->crc32Hash = $crc32Hash;
        return $this;
    }

    public function getQuickXorHash(): ?string
    {
        return $this->quickXorHash;
    }

    public function setQuickXorHash(?string $quickXorHash): self
    {
        $this->quickXorHash = $quickXorHash;
        return $this;
    }

    public function getSha1Hash(): ?string
    {
        return $this->sha1Hash;
    }

    public function setSha1Hash(?string $sha1Hash): self
    {
        $this->sha1Hash = $sha1Hash;
        return $this;
    }

    public function getSha256Hash(): ?string
    {
        return $this->sha256Hash;
    }

    public function setSha256Hash(?string $sha256Hash): self
    {
        $this->sha256Hash = $sha256Hash;
        return $this;
    }

}
