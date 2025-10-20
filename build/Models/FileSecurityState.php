<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileSecurityState
 */
class FileSecurityState
{
    /**
     * Complex type containing file hashes (cryptographic and location-sensitive).
     */
    private ?string $fileHash;

    /**
     * File name (without path).
     */
    private ?string $name;

    /**
     * Full file path of the file/imageFile.
     */
    private ?string $path;

    /**
     * Provider generated/calculated risk score of the alert file. Recommended value range of 0-1, which equates to a percentage.
     */
    private ?string $riskScore;

    public function getFileHash(): ?string
    {
        return $this->fileHash;
    }

    public function setFileHash(?string $fileHash): self
    {
        $this->fileHash = $fileHash;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): self
    {
        $this->path = $path;
        return $this;
    }

    public function getRiskScore(): ?string
    {
        return $this->riskScore;
    }

    public function setRiskScore(?string $riskScore): self
    {
        $this->riskScore = $riskScore;
        return $this;
    }

}
