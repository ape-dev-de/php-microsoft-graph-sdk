<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EndUserNotification
 */
class EndUserNotification
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Identity of the user who created the notification.
     * @var EmailIdentity|\stdClass|null
     */
    public mixed $createdBy = null;

    /** Date and time when the notification was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Description of the notification as defined by the user. */
    public ?string $description = null;

    /** Name of the notification as defined by the user. */
    public ?string $displayName = null;

    /** 
     * Identity of the user who last modified the notification.
     * @var EmailIdentity|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** Date and time when the notification was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * Type of notification. Possible values are: unknown, positiveReinforcement, noTraining, trainingAssignment, trainingReminder, unknownFutureValue.
     * @var EndUserNotificationType|\stdClass|null
     */
    public mixed $notificationType = null;

    /** 
     * The source of the content. Possible values are: unknown, global, tenant, unknownFutureValue.
     * @var SimulationContentSource|\stdClass|null
     */
    public mixed $source = null;

    /** 
     * The status of the notification. Possible values are: unknown, draft, ready, archive, delete, unknownFutureValue.
     * @var SimulationContentStatus|\stdClass|null
     */
    public mixed $status = null;

    /** 
     * Supported locales for endUserNotification content.
     * @var string[]
     */
    public array $supportedLocales = [];

    /** 
     * 
     * @var EndUserNotificationDetail[]
     */
    public array $details = [];


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
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['notificationType'])) {
            $this->notificationType = $data['notificationType'];
        }
        if (isset($data['source'])) {
            $this->source = $data['source'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['supportedLocales'])) {
            $this->supportedLocales = $data['supportedLocales'];
        }
        if (isset($data['details'])) {
            $this->details = $data['details'];
        }
    }
}
