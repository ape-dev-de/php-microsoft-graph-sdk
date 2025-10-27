<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BrowserSite
 */
class BrowserSite
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Controls the behavior of redirected sites. If true, indicates that the site will open in Internet Explorer 11 or Microsoft Edge even if the site is navigated to as part of a HTTP or meta refresh redirection chain. */
    public ?bool $allowRedirect = null;

    /** The comment for the site. */
    public ?string $comment = null;

    /**  */
    public ?BrowserSiteCompatibilityMode $compatibilityMode = null;

    /** The date and time when the site was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The date and time when the site was deleted. */
    public ?\DateTimeInterface $deletedDateTime = null;

    /** 
     * The history of modifications applied to the site.
     * @var BrowserSiteHistory[]
     */
    public array $history = [];

    /** 
     * The user who last modified the site.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $lastModifiedBy = null;

    /** The date and time when the site was last modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /**  */
    public ?BrowserSiteMergeType $mergeType = null;

    /**  */
    public ?BrowserSiteStatus $status = null;

    /**  */
    public ?BrowserSiteTargetEnvironment $targetEnvironment = null;

    /** The URL of the site. */
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
        if (isset($data['allowRedirect'])) {
            $this->allowRedirect = is_bool($data['allowRedirect']) ? $data['allowRedirect'] : (bool)$data['allowRedirect'];
        }
        if (isset($data['comment'])) {
            $this->comment = $data['comment'];
        }
        if (isset($data['compatibilityMode'])) {
            $this->compatibilityMode = is_array($data['compatibilityMode']) ? new BrowserSiteCompatibilityMode($data['compatibilityMode']) : $data['compatibilityMode'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['deletedDateTime'])) {
            $this->deletedDateTime = is_string($data['deletedDateTime']) ? new \DateTimeImmutable($data['deletedDateTime']) : $data['deletedDateTime'];
        }
        if (isset($data['history'])) {
            $this->history = $data['history'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['mergeType'])) {
            $this->mergeType = is_array($data['mergeType']) ? new BrowserSiteMergeType($data['mergeType']) : $data['mergeType'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new BrowserSiteStatus($data['status']) : $data['status'];
        }
        if (isset($data['targetEnvironment'])) {
            $this->targetEnvironment = is_array($data['targetEnvironment']) ? new BrowserSiteTargetEnvironment($data['targetEnvironment']) : $data['targetEnvironment'];
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
