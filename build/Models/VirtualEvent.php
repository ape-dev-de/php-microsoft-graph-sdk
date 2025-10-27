<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEvent
 */
class VirtualEvent
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
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
