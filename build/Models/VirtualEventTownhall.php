<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventTownhall
 */
class VirtualEventTownhall
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The identity information for the creator of the virtual event. Inherited from virtualEvent.
     * @var CommunicationsIdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** 
     * A description of the virtual event.
     * @var ItemBody|\stdClass|null
     */
    public mixed $description = null;

    /** The display name of the virtual event. */
    public ?string $displayName = null;

    /** 
     * The end time of the virtual event. The timeZone property can be set to any of the time zones currently supported by Windows. For details on how to get all available time zones using PowerShell, see Get-TimeZone.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $endDateTime = null;

    /** 
     * The external information of a virtual event. Returned only for event organizers or coorganizers; otherwise, null.
     * @var VirtualEventExternalInformation[]
     */
    public array $externalEventInformation = [];

    /** 
     * The virtual event settings.
     * @var VirtualEventSettings|\stdClass|null
     */
    public mixed $settings = null;

    /** 
     * Start time of the virtual event. The timeZone property can be set to any of the time zones currently supported by Windows. For details on how to get all available time zones using PowerShell, see Get-TimeZone.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $startDateTime = null;

    /** 
     * The status of the virtual event. The possible values are: draft, published, canceled, and unknownFutureValue.
     * @var VirtualEventStatus|\stdClass|null
     */
    public mixed $status = null;

    /** 
     * The virtual event presenters.
     * @var VirtualEventPresenter[]
     */
    public array $presenters = [];

    /** 
     * The sessions for the virtual event.
     * @var VirtualEventSession[]
     */
    public array $sessions = [];

    /** 
     * The audience to whom the town hall is visible. Possible values are: everyone, organization, and unknownFutureValue.
     * @var MeetingAudience|\stdClass|null
     */
    public mixed $audience = null;

    /** 
     * Identity information of the coorganizers of the town hall.
     * @var CommunicationsUserIdentity[]
     */
    public array $coOrganizers = [];

    /** 
     * The attendees invited to the town hall. The supported identities are: communicationsUserIdentity and communicationsGuestIdentity.
     * @var Identity[]
     */
    public array $invitedAttendees = [];

    /** Indicates whether the town hall is only open to invited people and groups within your organization. The isInviteOnly property can only be true if the value of the audience property is set to organization. */
    public ?bool $isInviteOnly = null;


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
            $this->createdBy = is_array($data['createdBy']) ? new CommunicationsIdentitySet($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['description'])) {
            $this->description = is_array($data['description']) ? new ItemBody($data['description']) : $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['endDateTime'])) {
            $this->endDateTime = is_array($data['endDateTime']) ? new DateTimeTimeZone($data['endDateTime']) : $data['endDateTime'];
        }
        if (isset($data['externalEventInformation'])) {
            $this->externalEventInformation = $data['externalEventInformation'];
        }
        if (isset($data['settings'])) {
            $this->settings = is_array($data['settings']) ? new VirtualEventSettings($data['settings']) : $data['settings'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_array($data['startDateTime']) ? new DateTimeTimeZone($data['startDateTime']) : $data['startDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new VirtualEventStatus($data['status']) : $data['status'];
        }
        if (isset($data['presenters'])) {
            $this->presenters = $data['presenters'];
        }
        if (isset($data['sessions'])) {
            $this->sessions = $data['sessions'];
        }
        if (isset($data['audience'])) {
            $this->audience = is_array($data['audience']) ? new MeetingAudience($data['audience']) : $data['audience'];
        }
        if (isset($data['coOrganizers'])) {
            $this->coOrganizers = $data['coOrganizers'];
        }
        if (isset($data['invitedAttendees'])) {
            $this->invitedAttendees = $data['invitedAttendees'];
        }
        if (isset($data['isInviteOnly'])) {
            $this->isInviteOnly = $data['isInviteOnly'];
        }
    }
}
