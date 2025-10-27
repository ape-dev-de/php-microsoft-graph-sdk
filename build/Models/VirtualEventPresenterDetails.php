<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventPresenterDetails
 */
class VirtualEventPresenterDetails
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Bio of the presenter.
     * @var ItemBody|\stdClass|null
     */
    public ItemBody|\stdClass|null $bio = null;

    /** The presenter's company name. */
    public ?string $company = null;

    /** The presenter's job title. */
    public ?string $jobTitle = null;

    /** The presenter's LinkedIn profile URL. */
    public ?string $linkedInProfileWebUrl = null;

    /** The presenter's personal website URL. */
    public ?string $personalSiteWebUrl = null;

    /** The content stream of the presenter's photo. */
    public ?string $photo = null;

    /** The presenter's Twitter profile URL. */
    public ?string $twitterProfileWebUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['bio'])) {
            $this->bio = is_array($data['bio']) ? new ItemBody($data['bio']) : $data['bio'];
        }
        if (isset($data['company'])) {
            $this->company = $data['company'];
        }
        if (isset($data['jobTitle'])) {
            $this->jobTitle = $data['jobTitle'];
        }
        if (isset($data['linkedInProfileWebUrl'])) {
            $this->linkedInProfileWebUrl = $data['linkedInProfileWebUrl'];
        }
        if (isset($data['personalSiteWebUrl'])) {
            $this->personalSiteWebUrl = $data['personalSiteWebUrl'];
        }
        if (isset($data['photo'])) {
            $this->photo = $data['photo'];
        }
        if (isset($data['twitterProfileWebUrl'])) {
            $this->twitterProfileWebUrl = $data['twitterProfileWebUrl'];
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
