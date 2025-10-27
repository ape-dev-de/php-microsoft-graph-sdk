<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BrowserSiteHistory
 */
class BrowserSiteHistory
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Controls the behavior of redirected sites. If true, indicates that the site will open in Internet Explorer 11 or Microsoft Edge even if the site is navigated to as part of a HTTP or meta refresh redirection chain. */
    public ?bool $allowRedirect = null;

    /** The comment for the site. */
    public ?string $comment = null;

    /** 
     * Controls what compatibility setting is used for specific sites or domains. The possible values are: default, internetExplorer8Enterprise, internetExplorer7Enterprise, internetExplorer11, internetExplorer10, internetExplorer9, internetExplorer8, internetExplorer7, internetExplorer5, unknownFutureValue.
     * @var BrowserSiteCompatibilityMode|\stdClass|null
     */
    public BrowserSiteCompatibilityMode|\stdClass|null $compatibilityMode = null;

    /** 
     * The user who last modified the site.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $lastModifiedBy = null;

    /** 
     * The merge type of the site. The possible values are: noMerge, default, unknownFutureValue.
     * @var BrowserSiteMergeType|\stdClass|null
     */
    public BrowserSiteMergeType|\stdClass|null $mergeType = null;

    /** The date and time when the site was last published. */
    public ?\DateTimeInterface $publishedDateTime = null;

    /** 
     * The target environment that the site should open in. The possible values are: internetExplorerMode, internetExplorer11, microsoftEdge, configurable, none, unknownFutureValue.Prior to June 15, 2022, the internetExplorer11 option would allow opening a site in the Internet Explorer 11 (IE11) desktop application. Following the retirement of IE11 on June 15, 2022, the internetExplorer11 option will no longer open an IE11 window and will instead behave the same as the internetExplorerMode option.
     * @var BrowserSiteTargetEnvironment|\stdClass|null
     */
    public BrowserSiteTargetEnvironment|\stdClass|null $targetEnvironment = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['allowRedirect'])) {
            $this->allowRedirect = is_bool($data['allowRedirect']) ? $data['allowRedirect'] : (bool)$data['allowRedirect'];
        }
        if (isset($data['comment'])) {
            $this->comment = $data['comment'];
        }
        if (isset($data['compatibilityMode'])) {
            $this->compatibilityMode = is_array($data['compatibilityMode']) ? new BrowserSiteCompatibilityMode($data['compatibilityMode']) : $data['compatibilityMode'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['mergeType'])) {
            $this->mergeType = is_array($data['mergeType']) ? new BrowserSiteMergeType($data['mergeType']) : $data['mergeType'];
        }
        if (isset($data['publishedDateTime'])) {
            $this->publishedDateTime = is_string($data['publishedDateTime']) ? new \DateTimeImmutable($data['publishedDateTime']) : $data['publishedDateTime'];
        }
        if (isset($data['targetEnvironment'])) {
            $this->targetEnvironment = is_array($data['targetEnvironment']) ? new BrowserSiteTargetEnvironment($data['targetEnvironment']) : $data['targetEnvironment'];
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
