<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchQna
 */
class SearchQna
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The search answer description that is shown on the search results page. */
    public ?string $description = null;

    /** The search answer name that is displayed in search results. */
    public ?string $displayName = null;

    /** 
     * Details of the user who created or last modified the search answer. Read-only.
     * @var SearchIdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** Date and time when the search answer was created or last edited. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** The URL link for the search answer. When users select this search answer from the search results, they are directed to the specified URL. */
    public ?string $webUrl = null;

    /** Date and time when the QnA stops appearing as a search result. Set as null for always available. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $availabilityEndDateTime = null;

    /** Date and time when the QnA starts to appear as a search result. Set as null for always available. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $availabilityStartDateTime = null;

    /** 
     * The list of security groups that are able to view this QnA.
     * @var string[]
     */
    public array $groupIds = [];

    /** True if a user or Microsoft suggested this QnA to the admin. Read-only. */
    public ?bool $isSuggested = null;

    /** 
     * Keywords that trigger this QnA to appear in search results.
     * @var SearchAnswerKeyword|\stdClass|null
     */
    public mixed $keywords = null;

    /** 
     * A list of geographically specific language names in which this QnA can be viewed. Each language tag value follows the pattern {language}-{region}. For example, en-us is English as used in the United States. For the list of possible values, see Supported language tags.
     * @var string[]
     */
    public array $languageTags = [];

    /** 
     * List of devices and operating systems that are able to view this QnA. Possible values are: android, androidForWork, ios, macOS, windowsPhone81, windowsPhone81AndLater, windows10AndLater, androidWorkProfile, unknown, androidASOP, androidMobileApplicationManagement, iOSMobileApplicationManagement, unknownFutureValue.
     * @var DevicePlatformType[]
     */
    public array $platforms = [];

    /**  */
    public ?SearchAnswerState $state = null;

    /** 
     * Variations of a QnA for different countries/regions or devices. Use when you need to show different content to users based on their device, country/region, or both. The date and group settings apply to all variations.
     * @var SearchAnswerVariant[]
     */
    public array $targetedVariations = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['webUrl'])) {
            $this->webUrl = $data['webUrl'];
        }
        if (isset($data['availabilityEndDateTime'])) {
            $this->availabilityEndDateTime = $data['availabilityEndDateTime'];
        }
        if (isset($data['availabilityStartDateTime'])) {
            $this->availabilityStartDateTime = $data['availabilityStartDateTime'];
        }
        if (isset($data['groupIds'])) {
            $this->groupIds = $data['groupIds'];
        }
        if (isset($data['isSuggested'])) {
            $this->isSuggested = $data['isSuggested'];
        }
        if (isset($data['keywords'])) {
            $this->keywords = $data['keywords'];
        }
        if (isset($data['languageTags'])) {
            $this->languageTags = $data['languageTags'];
        }
        if (isset($data['platforms'])) {
            $this->platforms = $data['platforms'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
        if (isset($data['targetedVariations'])) {
            $this->targetedVariations = $data['targetedVariations'];
        }
    }
}
