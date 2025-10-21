<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Fido2AuthenticationMethod
 */
class Fido2AuthenticationMethod
{
    /**
     * Authenticator Attestation GUID, an identifier that indicates the type (e.g. make and model) of the authenticator.
     */
    private ?string $aaGuid;

    /**
     * The attestation certificate(s) attached to this security key.
     * @var string[]
     */
    private array $attestationCertificates = [];

    /**
     * The attestation level of this FIDO2 security key. Possible values are: attested, or notAttested.
     */
    private ?string $attestationLevel;

    /**
     * The timestamp when this key was registered to the user.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The display name of the key as given by the user.
     */
    private ?string $displayName;

    /**
     * The manufacturer-assigned model of the FIDO2 security key.
     */
    private ?string $model;


    public function getAaGuid(): ?string
    {
        return $this->aaGuid;
    }

    public function setAaGuid(?string $aaGuid): self
    {
        $this->aaGuid = $aaGuid;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getAttestationCertificates(): array
    {
        return $this->attestationCertificates;
    }

    /**
     * @param string[] $attestationCertificates
     */
    public function setAttestationCertificates(array $attestationCertificates): self
    {
        $this->attestationCertificates = $attestationCertificates;
        return $this;
    }

    public function getAttestationLevel(): ?string
    {
        return $this->attestationLevel;
    }

    public function setAttestationLevel(?string $attestationLevel): self
    {
        $this->attestationLevel = $attestationLevel;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
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

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;
        return $this;
    }

}
