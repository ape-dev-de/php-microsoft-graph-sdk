<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingBusiness
 */
class BookingBusiness
{
    public function __construct(
        /** The street address of the business. The address property, together with phone and webSiteUrl, appear in the footer of a business scheduling page. The attribute type of physicalAddress is not supported in v1.0. Internally we map the addresses to the type others. */
        public ?string $address = null,
        /** Settings for the published booking page. */
        public ?string $bookingPageSettings = null,
        /** The hours of operation for the business. */
        public array $businessHours = [],
        /** The type of business. */
        public ?string $businessType = null,
        /** The date, time, and time zone when the booking business was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The code for the currency that the business operates in on Microsoft Bookings. */
        public ?string $defaultCurrencyIso = null,
        /** The name of the business, which interfaces with customers. This name appears at the top of the business scheduling page. */
        public ?string $displayName = null,
        /** The email address for the business. */
        public ?string $email = null,
        /** The scheduling page has been made available to external customers. Use the publish and unpublish actions to set this property. Read-only. */
        public ?bool $isPublished = null,
        /** The language of the self-service booking page. */
        public ?string $languageTag = null,
        /** The date, time, and time zone when the booking business was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastUpdatedDateTime = null,
        /** The telephone number for the business. The phone property, together with address and webSiteUrl, appear in the footer of a business scheduling page. */
        public ?string $phone = null,
        /** The URL for the scheduling page, which is set after you publish or unpublish the page. Read-only. */
        public ?string $publicUrl = null,
        /** Specifies how bookings can be created for this business. */
        public ?string $schedulingPolicy = null,
        /** The URL of the business web site. The webSiteUrl property, together with address, phone, appear in the footer of a business scheduling page. */
        public ?string $webSiteUrl = null,
        /** All the appointments of this business. Read-only. Nullable. */
        public array $appointments = [],
        /** The set of appointments of this business in a specified date range. Read-only. Nullable. */
        public array $calendarView = [],
        /** All the customers of this business. Read-only. Nullable. */
        public array $customers = [],
        /** All the custom questions of this business. Read-only. Nullable. */
        public array $customQuestions = [],
        /** All the services offered by this business. Read-only. Nullable. */
        public array $services = [],
        /** @var string[] Represents a Microsoft Bookings Business. */
        public array $staffMembers = []
    ) {}
}
