<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingBusiness
 */
class BookingBusiness
{
    /**
     * The street address of the business. The address property, together with phone and webSiteUrl, appear in the footer of a business scheduling page. The attribute type of physicalAddress is not supported in v1.0. Internally we map the addresses to the type others.
     */
    private ?string $address;

    /**
     * Settings for the published booking page.
     */
    private ?string $bookingPageSettings;

    /**
     * The hours of operation for the business.
     */
    private array $businessHours = [];

    /**
     * The type of business.
     */
    private ?string $businessType;

    /**
     * The date, time, and time zone when the booking business was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The code for the currency that the business operates in on Microsoft Bookings.
     */
    private ?string $defaultCurrencyIso;

    /**
     * The name of the business, which interfaces with customers. This name appears at the top of the business scheduling page.
     */
    private ?string $displayName;

    /**
     * The email address for the business.
     */
    private ?string $email;

    /**
     * The scheduling page has been made available to external customers. Use the publish and unpublish actions to set this property. Read-only.
     */
    private ?bool $isPublished;

    /**
     * The language of the self-service booking page.
     */
    private ?string $languageTag;

    /**
     * The date, time, and time zone when the booking business was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastUpdatedDateTime;

    /**
     * The telephone number for the business. The phone property, together with address and webSiteUrl, appear in the footer of a business scheduling page.
     */
    private ?string $phone;

    /**
     * The URL for the scheduling page, which is set after you publish or unpublish the page. Read-only.
     */
    private ?string $publicUrl;

    /**
     * Specifies how bookings can be created for this business.
     */
    private ?string $schedulingPolicy;

    /**
     * The URL of the business web site. The webSiteUrl property, together with address, phone, appear in the footer of a business scheduling page.
     */
    private ?string $webSiteUrl;

    /**
     * All the appointments of this business. Read-only. Nullable.
     */
    private array $appointments = [];

    /**
     * The set of appointments of this business in a specified date range. Read-only. Nullable.
     */
    private array $calendarView = [];

    /**
     * All the customers of this business. Read-only. Nullable.
     */
    private array $customers = [];

    /**
     * All the custom questions of this business. Read-only. Nullable.
     */
    private array $customQuestions = [];

    /**
     * All the services offered by this business. Read-only. Nullable.
     */
    private array $services = [];

    /**
     * Represents a Microsoft Bookings Business.
     * @var string[]
     */
    private array $staffMembers = [];


    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function getBookingPageSettings(): ?string
    {
        return $this->bookingPageSettings;
    }

    public function setBookingPageSettings(?string $bookingPageSettings): self
    {
        $this->bookingPageSettings = $bookingPageSettings;
        return $this;
    }

    public function getBusinessHours(): array
    {
        return $this->businessHours;
    }

    public function setBusinessHours(array $businessHours): self
    {
        $this->businessHours = $businessHours;
        return $this;
    }

    public function getBusinessType(): ?string
    {
        return $this->businessType;
    }

    public function setBusinessType(?string $businessType): self
    {
        $this->businessType = $businessType;
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

    public function getDefaultCurrencyIso(): ?string
    {
        return $this->defaultCurrencyIso;
    }

    public function setDefaultCurrencyIso(?string $defaultCurrencyIso): self
    {
        $this->defaultCurrencyIso = $defaultCurrencyIso;
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getIsPublished(): ?bool
    {
        return $this->isPublished;
    }

    public function setIsPublished(?bool $isPublished): self
    {
        $this->isPublished = $isPublished;
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

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    public function getPublicUrl(): ?string
    {
        return $this->publicUrl;
    }

    public function setPublicUrl(?string $publicUrl): self
    {
        $this->publicUrl = $publicUrl;
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

    public function getWebSiteUrl(): ?string
    {
        return $this->webSiteUrl;
    }

    public function setWebSiteUrl(?string $webSiteUrl): self
    {
        $this->webSiteUrl = $webSiteUrl;
        return $this;
    }

    public function getAppointments(): array
    {
        return $this->appointments;
    }

    public function setAppointments(array $appointments): self
    {
        $this->appointments = $appointments;
        return $this;
    }

    public function getCalendarView(): array
    {
        return $this->calendarView;
    }

    public function setCalendarView(array $calendarView): self
    {
        $this->calendarView = $calendarView;
        return $this;
    }

    public function getCustomers(): array
    {
        return $this->customers;
    }

    public function setCustomers(array $customers): self
    {
        $this->customers = $customers;
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

    public function getServices(): array
    {
        return $this->services;
    }

    public function setServices(array $services): self
    {
        $this->services = $services;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getStaffMembers(): array
    {
        return $this->staffMembers;
    }

    /**
     * @param string[] $staffMembers
     */
    public function setStaffMembers(array $staffMembers): self
    {
        $this->staffMembers = $staffMembers;
        return $this;
    }

}
