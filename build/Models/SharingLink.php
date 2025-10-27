<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharingLink
 */
class SharingLink
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The app the link is associated with.
     * @var Identity|\stdClass|null
     */
    public Identity|\stdClass|null $application = null;

    /** If true then the user can only use this link to view the item on the web, and cannot use it to download the contents of the item. Only for OneDrive for Business and SharePoint. */
    public ?bool $preventsDownload = null;

    /** The scope of the link represented by this permission. Value anonymous indicates the link is usable by anyone, organization indicates the link is only usable for users signed into the same tenant. */
    public ?string $scope = null;

    /** The type of the link created. */
    public ?string $type = null;

    /** For embed links, this property contains the HTML code for an <iframe> element that will embed the item in a webpage. */
    public ?string $webHtml = null;

    /** A URL that opens the item in the browser on the OneDrive website. */
    public ?string $webUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['application'])) {
            $this->application = is_array($data['application']) ? new Identity($data['application']) : $data['application'];
        }
        if (isset($data['preventsDownload'])) {
            $this->preventsDownload = $data['preventsDownload'];
        }
        if (isset($data['scope'])) {
            $this->scope = $data['scope'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
        if (isset($data['webHtml'])) {
            $this->webHtml = $data['webHtml'];
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
