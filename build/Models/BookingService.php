<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingService
 */
class BookingService
{
    /**
     * Additional information that is sent to the customer when an appointment is confirmed.
     */
    private ?string $additionalInformation;

    /**
     * The date, time, and time zone when the service was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Contains the set of custom questions associated with a particular service.
     */
    private array $customQuestions = [];

    /**
     * The default length of the service, represented in numbers of days, hours, minutes, and seconds. For example, P11D23H59M59.999999999999S.
     */
    private ?string $defaultDuration;

    /**
     * The default physical location for the service.
     */
    private ?string $defaultLocation;

    /**
     * The default monetary price for the service.
     */
    private ?string $defaultPrice;

    /**
     */
    private ?string $defaultPriceType;

    /**
     * The default set of reminders for an appointment of this service. The value of this property is available only when reading this bookingService by its ID.
     */
    private array $defaultReminders = [];

    /**
     * A text description for the service.
     */
    private ?string $description;

    /**
     * A service name.
     */
    private ?string $displayName;

    /**
     * Indicates if an anonymousJoinWebUrl(webrtcUrl) is generated for the appointment booked for this service. The default value is false.
     */
    private ?bool $isAnonymousJoinEnabled;

    /**
     * Indicates that the customer can manage bookings created by the staff. The default value is false.
     */
    private ?bool $isCustomerAllowedToManageBooking;

    /**
     * True indicates that this service isn't available to customers for booking.
     */
    private ?bool $isHiddenFromCustomers;

    /**
     * Indicates that the appointments for the service are held online. The default value is false.
     */
    private ?bool $isLocationOnline;

    /**
     * The language of the self-service booking page.
     */
    private ?string $languageTag;

    /**
     * The date, time, and time zone when the service was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastUpdatedDateTime;

    /**
     * The maximum number of customers allowed in a service. If maximumAttendeesCount of the service is greater than 1, pass valid customer IDs while creating or updating an appointment. To create a customer, use the Create bookingCustomer operation.
     */
    private ?float $maximumAttendeesCount;

    /**
     * Additional information about this service.
     */
    private ?string $notes;

    /**
     * The time to buffer after an appointment for this service ends, and before the next customer appointment can be booked.
     */
    private ?string $postBuffer;

    /**
     * The time to buffer before an appointment for this service can start.
     */
    private ?string $preBuffer;

    /**
     * The set of policies that determine how appointments for this type of service should be created and managed.
     */
    private ?string $schedulingPolicy;

    /**
     * True indicates SMS notifications can be sent to the customers for the appointment of the service. Default value is false.
     */
    private ?bool $smsNotificationsEnabled;

    /**
     * Represents those staff members who provide this service.
     * @var string[]
     */
    private array $staffMemberIds = [];

    /**
     * Represents a particular service offered by a booking business.
     */
    private ?string $webUrl;


    public function getAdditionalInformation(): ?string
    {
        return $this->additionalInformation;
    }

    public function setAdditionalInformation(?string $additionalInformation): self
    {
        $this->additionalInformation = $additionalInformation;
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

    public function getCustomQuestions(): array
    {
        return $this->customQuestions;
    }

    public function setCustomQuestions(array $customQuestions): self
    {
        $this->customQuestions = $customQuestions;
        return $this;
    }

    public function getDefaultDuration(): ?string
    {
        return $this->defaultDuration;
    }

    public function setDefaultDuration(?string $defaultDuration): self
    {
        $this->defaultDuration = $defaultDuration;
        return $this;
    }

    public function getDefaultLocation(): ?string
    {
        return $this->defaultLocation;
    }

    public function setDefaultLocation(?string $defaultLocation): self
    {
        $this->defaultLocation = $defaultLocation;
        return $this;
    }

    public function getDefaultPrice(): ?string
    {
        return $this->defaultPrice;
    }

    public function setDefaultPrice(?string $defaultPrice): self
    {
        $this->defaultPrice = $defaultPrice;
        return $this;
    }

    public function getDefaultPriceType(): ?string
    {
        return $this->defaultPriceType;
    }

    public function setDefaultPriceType(?string $defaultPriceType): self
    {
        $this->defaultPriceType = $defaultPriceType;
        return $this;
    }

    public function getDefaultReminders(): array
    {
        return $this->defaultReminders;
    }

    public function setDefaultReminders(array $defaultReminders): self
    {
        $this->defaultReminders = $defaultReminders;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
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

    public function getIsAnonymousJoinEnabled(): ?bool
    {
        return $this->isAnonymousJoinEnabled;
    }

    public function setIsAnonymousJoinEnabled(?bool $isAnonymousJoinEnabled): self
    {
        $this->isAnonymousJoinEnabled = $isAnonymousJoinEnabled;
        return $this;
    }

    public function getIsCustomerAllowedToManageBooking(): ?bool
    {
        return $this->isCustomerAllowedToManageBooking;
    }

    public function setIsCustomerAllowedToManageBooking(?bool $isCustomerAllowedToManageBooking): self
    {
        $this->isCustomerAllowedToManageBooking = $isCustomerAllowedToManageBooking;
        return $this;
    }

    public function getIsHiddenFromCustomers(): ?bool
    {
        return $this->isHiddenFromCustomers;
    }

    public function setIsHiddenFromCustomers(?bool $isHiddenFromCustomers): self
    {
        $this->isHiddenFromCustomers = $isHiddenFromCustomers;
        return $this;
    }

    public function getIsLocationOnline(): ?bool
    {
        return $this->isLocationOnline;
    }

    public function setIsLocationOnline(?bool $isLocationOnline): self
    {
        $this->isLocationOnline = $isLocationOnline;
        return $this;
    }

    public function getLanguageTag(): ?string
    {
        return $this->languageTag;
    }

    public function setLanguageTag(?string $languageTag): self
    {
        $this->languageTag = $languageTag;
        return $this;
    }

    public function getLastUpdatedDateTime(): ?\DateTimeInterface
    {
        return $this->lastUpdatedDateTime;
    }

    public function setLastUpdatedDateTime(?\DateTimeInterface $lastUpdatedDateTime): self
    {
        $this->lastUpdatedDateTime = $lastUpdatedDateTime;
        return $this;
    }

    public function getMaximumAttendeesCount(): ?float
    {
        return $this->maximumAttendeesCount;
    }

    public function setMaximumAttendeesCount(?float $maximumAttendeesCount): self
    {
        $this->maximumAttendeesCount = $maximumAttendeesCount;
        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;
        return $this;
    }

    public function getPostBuffer(): ?string
    {
        return $this->postBuffer;
    }

    public function setPostBuffer(?string $postBuffer): self
    {
        $this->postBuffer = $postBuffer;
        return $this;
    }

    public function getPreBuffer(): ?string
    {
        return $this->preBuffer;
    }

    public function setPreBuffer(?string $preBuffer): self
    {
        $this->preBuffer = $preBuffer;
        return $this;
    }

    public function getSchedulingPolicy(): ?string
    {
        return $this->schedulingPolicy;
    }

    public function setSchedulingPolicy(?string $schedulingPolicy): self
    {
        $this->schedulingPolicy = $schedulingPolicy;
        return $this;
    }

    public function getSmsNotificationsEnabled(): ?bool
    {
        return $this->smsNotificationsEnabled;
    }

    public function setSmsNotificationsEnabled(?bool $smsNotificationsEnabled): self
    {
        $this->smsNotificationsEnabled = $smsNotificationsEnabled;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getStaffMemberIds(): array
    {
        return $this->staffMemberIds;
    }

    /**
     * @param string[] $staffMemberIds
     */
    public function setStaffMemberIds(array $staffMemberIds): self
    {
        $this->staffMemberIds = $staffMemberIds;
        return $this;
    }

    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    public function setWebUrl(?string $webUrl): self
    {
        $this->webUrl = $webUrl;
        return $this;
    }

}
