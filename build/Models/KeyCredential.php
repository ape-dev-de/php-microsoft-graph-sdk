<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * KeyCredential
 */
class KeyCredential
{
    /**
     * A 40-character binary type that can be used to identify the credential. Optional. When not provided in the payload, defaults to the thumbprint of the certificate.
     */
    private ?string $customKeyIdentifier;

    /**
     * The friendly name for the key, with a maximum length of 90 characters. Longer values are accepted but shortened. Optional.
     */
    private ?string $displayName;

    /**
     * The date and time at which the credential expires. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $endDateTime;

    /**
     * The certificate''s raw data in byte array converted to Base64 string. Returned only on $select for a single object, that is, GET applications/{applicationId}?$select=keyCredentials or GET servicePrincipals/{servicePrincipalId}?$select=keyCredentials; otherwise, it''s always null.  From a .cer certificate, you can read the key using the Convert.ToBase64String() method. For more information, see Get the certificate key.
     */
    private ?string $key;

    /**
     * The unique identifier (GUID) for the key.
     */
    private ?string $keyId;

    /**
     * The date and time at which the credential becomes valid.The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $startDateTime;

    /**
     * The type of key credential; for example, Symmetric, AsymmetricX509Cert.
     */
    private ?string $type;

    /**
     * A string that describes the purpose for which the key can be used; for example, Verify.
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
