<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingBusiness
 */
class BookingBusiness
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The street address of the business. The address property, together with phone and webSiteUrl, appear in the footer of a business scheduling page. The attribute type of physicalAddress is not supported in v1.0. Internally we map the addresses to the type others.
     * @var PhysicalAddress|\stdClass|null
     */
    public mixed $address = null;

    /** 
     * Settings for the published booking page.
     * @var BookingPageSettings|\stdClass|null
     */
    public mixed $bookingPageSettings = null;

    /** 
     * The hours of operation for the business.
     * @var BookingWorkHours[]
     */
    public array $businessHours = [];

    /** The type of business. */
    public ?string $businessType = null;

    /** The date, time, and time zone when the booking business was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The code for the currency that the business operates in on Microsoft Bookings. */
    public ?string $defaultCurrencyIso = null;

    /** The name of the business, which interfaces with customers. This name appears at the top of the business scheduling page. */
    public ?string $displayName = null;

    /** The email address for the business. */
    public ?string $email = null;

    /** The scheduling page has been made available to external customers. Use the publish and unpublish actions to set this property. Read-only. */
    public ?bool $isPublished = null;

    /** The language of the self-service booking page. */
    public ?string $languageTag = null;

    /** The date, time, and time zone when the booking business was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastUpdatedDateTime = null;

    /** The telephone number for the business. The phone property, together with address and webSiteUrl, appear in the footer of a business scheduling page. */
    public ?string $phone = null;

    /** The URL for the scheduling page, which is set after you publish or unpublish the page. Read-only. */
    public ?string $publicUrl = null;

    /** 
     * Specifies how bookings can be created for this business.
     * @var BookingSchedulingPolicy|\stdClass|null
     */
    public mixed $schedulingPolicy = null;

    /** The URL of the business web site. The webSiteUrl property, together with address, phone, appear in the footer of a business scheduling page. */
    public ?string $webSiteUrl = null;

    /** 
     * All the appointments of this business. Read-only. Nullable.
     * @var BookingAppointment[]
     */
    public array $appointments = [];

    /** 
     * The set of appointments of this business in a specified date range. Read-only. Nullable.
     * @var BookingAppointment[]
     */
    public array $calendarView = [];

    /** 
     * All the customers of this business. Read-only. Nullable.
     * @var BookingCustomerBase[]
     */
    public array $customers = [];

    /** 
     * All the custom questions of this business. Read-only. Nullable.
     * @var BookingCustomQuestion[]
     */
    public array $customQuestions = [];

    /** 
     * All the services offered by this business. Read-only. Nullable.
     * @var BookingService[]
     */
    public array $services = [];

    /** 
     * All the staff members that provide services in this business. Read-only. Nullable.
     * @var BookingStaffMemberBase[]
     */
    public array $staffMembers = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['address'])) {
            $this->address = $data['address'];
        }
        if (isset($data['bookingPageSettings'])) {
            $this->bookingPageSettings = $data['bookingPageSettings'];
        }
        if (isset($data['businessHours'])) {
            $this->businessHours = $data['businessHours'];
        }
        if (isset($data['businessType'])) {
            $this->businessType = $data['businessType'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['defaultCurrencyIso'])) {
            $this->defaultCurrencyIso = $data['defaultCurrencyIso'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['email'])) {
            $this->email = $data['email'];
        }
        if (isset($data['isPublished'])) {
            $this->isPublished = $data['isPublished'];
        }
        if (isset($data['languageTag'])) {
            $this->languageTag = $data['languageTag'];
        }
        if (isset($data['lastUpdatedDateTime'])) {
            $this->lastUpdatedDateTime = is_string($data['lastUpdatedDateTime']) ? new \DateTimeImmutable($data['lastUpdatedDateTime']) : $data['lastUpdatedDateTime'];
        }
        if (isset($data['phone'])) {
            $this->phone = $data['phone'];
        }
        if (isset($data['publicUrl'])) {
            $this->publicUrl = $data['publicUrl'];
        }
        if (isset($data['schedulingPolicy'])) {
            $this->schedulingPolicy = $data['schedulingPolicy'];
        }
        if (isset($data['webSiteUrl'])) {
            $this->webSiteUrl = $data['webSiteUrl'];
        }
        if (isset($data['appointments'])) {
            $this->appointments = $data['appointments'];
        }
        if (isset($data['calendarView'])) {
            $this->calendarView = $data['calendarView'];
        }
        if (isset($data['customers'])) {
            $this->customers = $data['customers'];
        }
        if (isset($data['customQuestions'])) {
            $this->customQuestions = $data['customQuestions'];
        }
        if (isset($data['services'])) {
            $this->services = $data['services'];
        }
        if (isset($data['staffMembers'])) {
            $this->staffMembers = $data['staffMembers'];
        }
    }
}
