<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CertificateBasedAuthPki
 */
class CertificateBasedAuthPki
{
    /**
     * The name of the object. Maximum length is 256 characters.
     */
    private ?string $displayName;

    /**
     * The date and time when the object was created or last modified.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The status of any asynchronous jobs runs on the object which can be upload or delete.
     */
    private ?string $status;

    /**
     * The status details of the upload/deleted operation of PKI (Public Key Infrastructure).
     */
    private ?string $statusDetails;

    /**
     * The collection of certificate authorities contained in this public key infrastructure resource.
     */
    private ?string $certificateAuthorities;

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getStatusDetails(): ?string
    {
        return $this->statusDetails;
    }

    public function setStatusDetails(?string $statusDetails): self
    {
        $this->statusDetails = $statusDetails;
        return $this;
    }

    public function getCertificateAuthorities(): ?string
    {
        return $this->certificateAuthorities;
    }

    public function setCertificateAuthorities(?string $certificateAuthorities): self
    {
        $this->certificateAuthorities = $certificateAuthorities;
        return $this;
    }

}
