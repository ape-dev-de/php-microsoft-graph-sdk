<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharepointIds
 */
class SharepointIds
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier (guid) for the item's list in SharePoint. */
    public ?string $listId = null;

    /** An integer identifier for the item within the containing list. */
    public ?string $listItemId = null;

    /** The unique identifier (guid) for the item within OneDrive for Business or a SharePoint site. */
    public ?string $listItemUniqueId = null;

    /** The unique identifier (guid) for the item's site collection (SPSite). */
    public ?string $siteId = null;

    /** The SharePoint URL for the site that contains the item. */
    public ?string $siteUrl = null;

    /** The unique identifier (guid) for the tenancy. */
    public ?string $tenantId = null;

    /** The unique identifier (guid) for the item's site (SPWeb). */
    public ?string $webId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['listId'])) {
            $this->listId = $data['listId'];
        }
        if (isset($data['listItemId'])) {
            $this->listItemId = $data['listItemId'];
        }
        if (isset($data['listItemUniqueId'])) {
            $this->listItemUniqueId = $data['listItemUniqueId'];
        }
        if (isset($data['siteId'])) {
            $this->siteId = $data['siteId'];
        }
        if (isset($data['siteUrl'])) {
            $this->siteUrl = $data['siteUrl'];
        }
        if (isset($data['tenantId'])) {
            $this->tenantId = $data['tenantId'];
        }
        if (isset($data['webId'])) {
            $this->webId = $data['webId'];
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
