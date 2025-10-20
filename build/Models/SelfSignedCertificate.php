<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SelfSignedCertificate
 */
class SelfSignedCertificate
{
    /**
     * Custom key identifier.
     */
    private ?string $customKeyIdentifier;

    /**
     * The friendly name for the key.
     */
    private ?string $displayName;

    /**
     * The date and time at which the credential expires. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on January 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $endDateTime;

    /**
     * The value for the key credential. Should be a Base-64 encoded value.
     */
    private ?string $key;

    /**
     * The unique identifier (GUID) for the key.
     */
    private ?string $keyId;

    /**
     * The date and time at which the credential becomes valid. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on January 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $startDateTime;

    /**
     * The thumbprint value for the key.
     */
    private ?string $thumbprint;

    /**
     * The type of key credential. AsymmetricX509Cert.
     */
    private ?string $type;

    /**
     * A string that describes the purpose for which the key can be used. The possible value is Verify.
     */
    private ?string $usage;

    public function getCustomKeyIdentifier(): ?string
    {
        return $this->customKeyIdentifier;
    }

    public function setCustomKeyIdentifier(?string $customKeyIdentifier): self
    {
        $this->customKeyIdentifier = $customKeyIdentifier;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getEndDateTime(): ?\DateTimeInterface
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?\DateTimeInterface $endDateTime): self
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(?string $key): self
    {
        $this->key = $key;
        return $this;
    }

    public function getKeyId(): ?string
    {
        return $this->keyId;
    }

    public function setKeyId(?string $keyId): self
    {
        $this->keyId = $keyId;
        return $this;
    }

    public function getStartDateTime(): ?\DateTimeInterface
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?\DateTimeInterface $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    public function getThumbprint(): ?string
    {
        return $this->thumbprint;
    }

    public function setThumbprint(?string $thumbprint): self
    {
        $this->thumbprint = $thumbprint;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getUsage(): ?string
    {
        return $this->usage;
    }

    public function setUsage(?string $usage): self
    {
        $this->usage = $usage;
        return $this;
    }

}
