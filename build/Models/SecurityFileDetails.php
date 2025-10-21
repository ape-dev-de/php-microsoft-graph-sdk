<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFileDetails
 */
class SecurityFileDetails
{
    /**
     * The name of the file.
     */
    private ?string $fileName;

    /**
     * The file path (location) of the file instance.
     */
    private ?string $filePath;

    /**
     * The publisher of the file.
     */
    private ?string $filePublisher;

    /**
     * The size of the file in bytes.
     */
    private ?float $fileSize;

    /**
     * The certificate authority (CA) that issued the certificate.
     */
    private ?string $issuer;

    /**
     * The Md5 cryptographic hash of the file content.
     */
    private ?string $md5;

    /**
     * The Sha1 cryptographic hash of the file content.
     */
    private ?string $sha1;

    /**
     * The Sha256 cryptographic hash of the file content.
     */
    private ?string $sha256;

    /**
     */
    private ?string $sha256Ac;

    /**
     * The signer of the signed file.
     */
    private ?string $signer;


    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }

    public function getFilePath(): ?string
    {
        return $this->filePath;
    }

    public function setFilePath(?string $filePath): self
    {
        $this->filePath = $filePath;
        return $this;
    }

    public function getFilePublisher(): ?string
    {
        return $this->filePublisher;
    }

    public function setFilePublisher(?string $filePublisher): self
    {
        $this->filePublisher = $filePublisher;
        return $this;
    }

    public function getFileSize(): ?float
    {
        return $this->fileSize;
    }

    public function setFileSize(?float $fileSize): self
    {
        $this->fileSize = $fileSize;
        return $this;
    }

    public function getIssuer(): ?string
    {
        return $this->issuer;
    }

    public function setIssuer(?string $issuer): self
    {
        $this->issuer = $issuer;
        return $this;
    }

    public function getMd5(): ?string
    {
        return $this->md5;
    }

    public function setMd5(?string $md5): self
    {
        $this->md5 = $md5;
        return $this;
    }

    public function getSha1(): ?string
    {
        return $this->sha1;
    }

    public function setSha1(?string $sha1): self
    {
        $this->sha1 = $sha1;
        return $this;
    }

    public function getSha256(): ?string
    {
        return $this->sha256;
    }

    public function setSha256(?string $sha256): self
    {
        $this->sha256 = $sha256;
        return $this;
    }

    public function getSha256Ac(): ?string
    {
        return $this->sha256Ac;
    }

    public function setSha256Ac(?string $sha256Ac): self
    {
        $this->sha256Ac = $sha256Ac;
        return $this;
    }

    public function getSigner(): ?string
    {
        return $this->signer;
    }

    public function setSigner(?string $signer): self
    {
        $this->signer = $signer;
        return $this;
    }

}
