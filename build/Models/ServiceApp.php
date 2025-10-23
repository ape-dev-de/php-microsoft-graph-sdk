<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceApp
 */
class ServiceApp
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The Entra ID application ID.
     * @var Identity|\stdClass|null
     */
    public mixed $application = null;

    /** Timestamp of the effective activation of the service app. */
    public ?\DateTimeInterface $effectiveDateTime = null;

    /** 
     * Identity of the person who last modified the entity.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** Timestamp of the last modification of the entity. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Timestamp of the creation of the service app entity. */
    public ?\DateTimeInterface $registrationDateTime = null;

    /** 
     * The status of the service app. This value indicates whether or not the application can be used to control the backup service. The possible values are: inactive, active, pendingActive, pendingInactive, unknownFutureValue.
     * @var ServiceAppStatus|\stdClass|null
     */
    public mixed $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['application'])) {
            $this->application = $data['application'];
        }
        if (isset($data['effectiveDateTime'])) {
            $this->effectiveDateTime = is_string($data['effectiveDateTime']) ? new \DateTimeImmutable($data['effectiveDateTime']) : $data['effectiveDateTime'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['registrationDateTime'])) {
            $this->registrationDateTime = is_string($data['registrationDateTime']) ? new \DateTimeImmutable($data['registrationDateTime']) : $data['registrationDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
    }
}
