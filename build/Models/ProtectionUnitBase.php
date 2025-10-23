<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProtectionUnitBase
 */
class ProtectionUnitBase
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The identity of the person who created the protection unit.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** The time of creation of the protection unit. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Contains error details if an error occurred while creating a protection unit.
     * @var PublicError|\stdClass|null
     */
    public mixed $error = null;

    /** 
     * The identity of person who last modified the protection unit.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** Timestamp of the last modification of this protection unit. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** The unique identifier of the protection policy based on which protection unit was created. */
    public ?string $policyId = null;

    /** 
     * The status of the protection unit. The possible values are: protectRequested, protected, unprotectRequested, unprotected, removeRequested, unknownFutureValue, offboardRequested, offboarded, cancelOffboardRequested. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: offboardRequested, offboarded, cancelOffboardRequested.
     * @var ProtectionUnitStatus|\stdClass|null
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
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['error'])) {
            $this->error = $data['error'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['policyId'])) {
            $this->policyId = $data['policyId'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
    }
}
