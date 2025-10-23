<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AgreementAcceptance
 */
class AgreementAcceptance
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The identifier of the agreement file accepted by the user. */
    public ?string $agreementFileId = null;

    /** The identifier of the agreement. */
    public ?string $agreementId = null;

    /** The display name of the device used for accepting the agreement. */
    public ?string $deviceDisplayName = null;

    /** The unique identifier of the device used for accepting the agreement. Supports $filter (eq) and eq for null values. */
    public ?string $deviceId = null;

    /** The operating system used to accept the agreement. */
    public ?string $deviceOSType = null;

    /** The operating system version of the device used to accept the agreement. */
    public ?string $deviceOSVersion = null;

    /** The expiration date time of the acceptance. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ge, le) and eq for null values. */
    public ?\DateTimeInterface $expirationDateTime = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $recordedDateTime = null;

    /** 
     * The state of the agreement acceptance. Possible values are: accepted, declined. Supports $filter (eq).
     * @var AgreementAcceptanceState|\stdClass|null
     */
    public mixed $state = null;

    /** Display name of the user when the acceptance was recorded. */
    public ?string $userDisplayName = null;

    /** Email of the user when the acceptance was recorded. */
    public ?string $userEmail = null;

    /** The identifier of the user who accepted the agreement. Supports $filter (eq). */
    public ?string $userId = null;

    /** UPN of the user when the acceptance was recorded. */
    public ?string $userPrincipalName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['agreementFileId'])) {
            $this->agreementFileId = $data['agreementFileId'];
        }
        if (isset($data['agreementId'])) {
            $this->agreementId = $data['agreementId'];
        }
        if (isset($data['deviceDisplayName'])) {
            $this->deviceDisplayName = $data['deviceDisplayName'];
        }
        if (isset($data['deviceId'])) {
            $this->deviceId = $data['deviceId'];
        }
        if (isset($data['deviceOSType'])) {
            $this->deviceOSType = $data['deviceOSType'];
        }
        if (isset($data['deviceOSVersion'])) {
            $this->deviceOSVersion = $data['deviceOSVersion'];
        }
        if (isset($data['expirationDateTime'])) {
            $this->expirationDateTime = $data['expirationDateTime'];
        }
        if (isset($data['recordedDateTime'])) {
            $this->recordedDateTime = $data['recordedDateTime'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
        if (isset($data['userDisplayName'])) {
            $this->userDisplayName = $data['userDisplayName'];
        }
        if (isset($data['userEmail'])) {
            $this->userEmail = $data['userEmail'];
        }
        if (isset($data['userId'])) {
            $this->userId = $data['userId'];
        }
        if (isset($data['userPrincipalName'])) {
            $this->userPrincipalName = $data['userPrincipalName'];
        }
    }
}
