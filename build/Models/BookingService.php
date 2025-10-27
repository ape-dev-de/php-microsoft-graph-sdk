<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingService
 */
class BookingService
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Additional information that is sent to the customer when an appointment is confirmed. */
    public ?string $additionalInformation = null;

    /** The date, time, and time zone when the service was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Contains the set of custom questions associated with a particular service.
     * @var BookingQuestionAssignment[]
     */
    public array $customQuestions = [];

    /** The default length of the service, represented in numbers of days, hours, minutes, and seconds. For example, P11D23H59M59.999999999999S. */
    public ?string $defaultDuration = null;

    /** 
     * The default physical location for the service.
     * @var Location|\stdClass|null
     */
    public mixed $defaultLocation = null;

    /** The default monetary price for the service. */
    public ?string $defaultPrice = null;

    /**  */
    public ?BookingPriceType $defaultPriceType = null;

    /** 
     * The default set of reminders for an appointment of this service. The value of this property is available only when reading this bookingService by its ID.
     * @var BookingReminder[]
     */
    public array $defaultReminders = [];

    /** A text description for the service. */
    public ?string $description = null;

    /** A service name. */
    public ?string $displayName = null;

    /** Indicates if an anonymousJoinWebUrl(webrtcUrl) is generated for the appointment booked for this service. The default value is false. */
    public ?bool $isAnonymousJoinEnabled = null;

    /** Indicates that the customer can manage bookings created by the staff. The default value is false. */
    public ?bool $isCustomerAllowedToManageBooking = null;

    /** True indicates that this service isn't available to customers for booking. */
    public ?bool $isHiddenFromCustomers = null;

    /** Indicates that the appointments for the service are held online. The default value is false. */
    public ?bool $isLocationOnline = null;

    /** The language of the self-service booking page. */
    public ?string $languageTag = null;

    /** The date, time, and time zone when the service was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastUpdatedDateTime = null;

    /** The maximum number of customers allowed in a service. If maximumAttendeesCount of the service is greater than 1, pass valid customer IDs while creating or updating an appointment. To create a customer, use the Create bookingCustomer operation. */
    public ?float $maximumAttendeesCount = null;

    /** Additional information about this service. */
    public ?string $notes = null;

    /** The time to buffer after an appointment for this service ends, and before the next customer appointment can be booked. */
    public ?string $postBuffer = null;

    /** The time to buffer before an appointment for this service can start. */
    public ?string $preBuffer = null;

    /** 
     * The set of policies that determine how appointments for this type of service should be created and managed.
     * @var BookingSchedulingPolicy|\stdClass|null
     */
    public mixed $schedulingPolicy = null;

    /** True indicates SMS notifications can be sent to the customers for the appointment of the service. Default value is false. */
    public ?bool $smsNotificationsEnabled = null;

    /** 
     * Represents those staff members who provide this service.
     * @var string[]
     */
    public array $staffMemberIds = [];

    /** The URL a customer uses to access the service. */
    public ?string $webUrl = null;


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
        if (isset($data['additionalInformation'])) {
            $this->additionalInformation = $data['additionalInformation'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['customQuestions'])) {
            $this->customQuestions = $data['customQuestions'];
        }
        if (isset($data['defaultDuration'])) {
            $this->defaultDuration = $data['defaultDuration'];
        }
        if (isset($data['defaultLocation'])) {
            $this->defaultLocation = is_array($data['defaultLocation']) ? new Location($data['defaultLocation']) : $data['defaultLocation'];
        }
        if (isset($data['defaultPrice'])) {
            $this->defaultPrice = $data['defaultPrice'];
        }
        if (isset($data['defaultPriceType'])) {
            $this->defaultPriceType = is_array($data['defaultPriceType']) ? new BookingPriceType($data['defaultPriceType']) : $data['defaultPriceType'];
        }
        if (isset($data['defaultReminders'])) {
            $this->defaultReminders = $data['defaultReminders'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isAnonymousJoinEnabled'])) {
            $this->isAnonymousJoinEnabled = $data['isAnonymousJoinEnabled'];
        }
        if (isset($data['isCustomerAllowedToManageBooking'])) {
            $this->isCustomerAllowedToManageBooking = $data['isCustomerAllowedToManageBooking'];
        }
        if (isset($data['isHiddenFromCustomers'])) {
            $this->isHiddenFromCustomers = $data['isHiddenFromCustomers'];
        }
        if (isset($data['isLocationOnline'])) {
            $this->isLocationOnline = $data['isLocationOnline'];
        }
        if (isset($data['languageTag'])) {
            $this->languageTag = $data['languageTag'];
        }
        if (isset($data['lastUpdatedDateTime'])) {
            $this->lastUpdatedDateTime = is_string($data['lastUpdatedDateTime']) ? new \DateTimeImmutable($data['lastUpdatedDateTime']) : $data['lastUpdatedDateTime'];
        }
        if (isset($data['maximumAttendeesCount'])) {
            $this->maximumAttendeesCount = $data['maximumAttendeesCount'];
        }
        if (isset($data['notes'])) {
            $this->notes = $data['notes'];
        }
        if (isset($data['postBuffer'])) {
            $this->postBuffer = $data['postBuffer'];
        }
        if (isset($data['preBuffer'])) {
            $this->preBuffer = $data['preBuffer'];
        }
        if (isset($data['schedulingPolicy'])) {
            $this->schedulingPolicy = is_array($data['schedulingPolicy']) ? new BookingSchedulingPolicy($data['schedulingPolicy']) : $data['schedulingPolicy'];
        }
        if (isset($data['smsNotificationsEnabled'])) {
            $this->smsNotificationsEnabled = $data['smsNotificationsEnabled'];
        }
        if (isset($data['staffMemberIds'])) {
            $this->staffMemberIds = $data['staffMemberIds'];
        }
        if (isset($data['webUrl'])) {
            $this->webUrl = $data['webUrl'];
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
