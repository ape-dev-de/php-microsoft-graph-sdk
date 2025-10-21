<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RelyingPartyDetailedSummary
 */
class RelyingPartyDetailedSummary
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Number of failed sign ins on AD FS in the period specified. Supports $orderby, $filter (eq). */
        public ?float $failedSignInCount = null,
        /**  */
        public ?string $migrationStatus = null,
        /** Specifies all the validations checks done on applications config details. */
        public array $migrationValidationDetails = [],
        /** Identifies the relying party to this federation service. It''s used when issuing claims to the relying party. Supports $orderby, $filter (eq). */
        public ?string $relyingPartyId = null,
        /** Name of the relying party''s website or other entity on the Internet that uses an identity provider to authenticate a user who wants to log in. Supports $orderby, $filter (eq). */
        public ?string $relyingPartyName = null,
        /** @var string[] Specifies where the relying party expects to receive the token. */
        public array $replyUrls = [],
        /** Uniquely identifies the Active Directory forest. Supports $orderby, $filter (eq). */
        public ?string $serviceId = null,
        /** Calculated as Number of successful / (Number of successful + Number of failed sign ins) or successfulSignInCount / totalSignInCount on AD FS in the period specified. Supports $orderby, $filter (eq). */
        public ?string $signInSuccessRate = null,
        /** Number of successful sign ins on AD FS. Supports $orderby, $filter (eq). */
        public ?float $successfulSignInCount = null,
        /** Number of successful + failed sign ins on AD FS in the period specified. Supports $orderby, $filter (eq). */
        public ?float $totalSignInCount = null,
        /** Number of unique users that signed into the application. Supports $orderby, $filter (eq). */
        public ?string $uniqueUserCount = null
    ) {}
}
