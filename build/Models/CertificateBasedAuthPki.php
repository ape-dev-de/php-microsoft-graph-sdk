<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CertificateBasedAuthPki
 */
class CertificateBasedAuthPki
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
    public ?\DateTimeInterface $deletedDateTime = null;

    /** The name of the object. Maximum length is 256 characters. */
    public ?string $displayName = null;

    /** The date and time when the object was created or last modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** The status of any asynchronous jobs runs on the object which can be upload or delete. */
    public ?string $status = null;

    /** The status details of the upload/deleted operation of PKI (Public Key Infrastructure). */
    public ?string $statusDetails = null;

    /** 
     * The collection of certificate authorities contained in this public key infrastructure resource.
     * @var CertificateAuthorityDetail[]
     */
    public array $certificateAuthorities = [];


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
        if (isset($data['deletedDateTime'])) {
            $this->deletedDateTime = is_string($data['deletedDateTime']) ? new \DateTimeImmutable($data['deletedDateTime']) : $data['deletedDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['statusDetails'])) {
            $this->statusDetails = $data['statusDetails'];
        }
        if (isset($data['certificateAuthorities'])) {
            $this->certificateAuthorities = $data['certificateAuthorities'];
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
