<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryCase
 */
class SecurityEdiscoveryCase
{
    public function __construct(
        /** The user who closed the case. */
        public ?string $closedBy = null,
        /** The date and time when the case was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $closedDateTime = null,
        /** The external case number for customer reference. */
        public ?string $externalId = null,
        /** Returns a list of case ediscoveryCustodian objects for this case. */
        public array $custodians = [],
        /** Returns a list of case ediscoveryNoncustodialDataSource objects for this case. */
        public array $noncustodialDataSources = [],
        /** Returns a list of case caseOperation objects for this case. */
        public array $operations = [],
        /** Returns a list of eDiscoveryReviewSet objects in the case. */
        public array $reviewSets = [],
        /** Returns a list of eDiscoverySearch objects associated with this case. */
        public array $searches = [],
        /** Returns a list of eDIscoverySettings objects in the case. */
        public ?string $settings = null,
        /** @var string[] Returns a list of ediscoveryReviewTag objects associated to this case. */
        public array $tags = []
    ) {}
}
