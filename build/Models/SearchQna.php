<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchQna
 */
class SearchQna
{
    public function __construct(
        /** Date and time when the QnA stops appearing as a search result. Set as null for always available. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $availabilityEndDateTime = null,
        /** Date and time when the QnA starts to appear as a search result. Set as null for always available. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $availabilityStartDateTime = null,
        /** @var string[] The list of security groups that are able to view this QnA. */
        public array $groupIds = [],
        /** True if a user or Microsoft suggested this QnA to the admin. Read-only. */
        public ?bool $isSuggested = null,
        /** Keywords that trigger this QnA to appear in search results. */
        public ?string $keywords = null,
        /** @var string[] A list of geographically specific language names in which this QnA can be viewed. Each language tag value follows the pattern {language}-{region}. For example, en-us is English as used in the United States. For the list of possible values, see Supported language tags. */
        public array $languageTags = [],
        /** List of devices and operating systems that are able to view this QnA. Possible values are: android, androidForWork, ios, macOS, windowsPhone81, windowsPhone81AndLater, windows10AndLater, androidWorkProfile, unknown, androidASOP, androidMobileApplicationManagement, iOSMobileApplicationManagement, unknownFutureValue. */
        public array $platforms = [],
        /**  */
        public ?string $state = null,
        /** @var string[] Variations of a QnA for different countries/regions or devices. Use when you need to show different content to users based on their device, country/region, or both. The date and group settings apply to all variations. */
        public array $targetedVariations = []
    ) {}
}
