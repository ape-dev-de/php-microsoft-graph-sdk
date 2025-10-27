<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Fido2AuthenticationMethod
 */
class Fido2AuthenticationMethod
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Authenticator Attestation GUID, an identifier that indicates the type (e.g. make and model) of the authenticator. */
    public ?string $aaGuid = null;

    /** 
     * The attestation certificate(s) attached to this security key.
     * @var string[]
     */
    public array $attestationCertificates = [];

    /** 
     * The attestation level of this FIDO2 security key. Possible values are: attested, or notAttested.
     * @var AttestationLevel|\stdClass|null
     */
    public mixed $attestationLevel = null;

    /** The timestamp when this key was registered to the user. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The display name of the key as given by the user. */
    public ?string $displayName = null;

    /** The manufacturer-assigned model of the FIDO2 security key. */
    public ?string $model = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['aaGuid'])) {
            $this->aaGuid = $data['aaGuid'];
        }
        if (isset($data['attestationCertificates'])) {
            $this->attestationCertificates = $data['attestationCertificates'];
        }
        if (isset($data['attestationLevel'])) {
            $this->attestationLevel = is_array($data['attestationLevel']) ? new AttestationLevel($data['attestationLevel']) : $data['attestationLevel'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['model'])) {
            $this->model = $data['model'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
