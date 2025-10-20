<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionDataRecoveryCertificate
 */
class WindowsInformationProtectionDataRecoveryCertificate
{
    /**
     * Data recovery Certificate
     */
    private ?string $certificate;

    /**
     * Data recovery Certificate description
     */
    private ?string $description;

    /**
     * Data recovery Certificate expiration datetime
     */
    private ?\DateTimeInterface $expirationDateTime;

    /**
     * Windows Information Protection DataRecoveryCertificate
     */
    private ?string $subjectName;

    public function getCertificate(): ?string
    {
        return $this->certificate;
    }

    public function setCertificate(?string $certificate): self
    {
        $this->certificate = $certificate;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getExpirationDateTime(): ?\DateTimeInterface
    {
        return $this->expirationDateTime;
    }

    public function setExpirationDateTime(?\DateTimeInterface $expirationDateTime): self
    {
        $this->expirationDateTime = $expirationDateTime;
        return $this;
    }

    public function getSubjectName(): ?string
    {
        return $this->subjectName;
    }

    public function setSubjectName(?string $subjectName): self
    {
        $this->subjectName = $subjectName;
        return $this;
    }

}
