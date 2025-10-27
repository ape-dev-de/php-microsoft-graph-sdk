<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchEntity
 */
class SearchEntity
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Administrative answer in Microsoft Search results to define common acronyms in an organization.
     * @var SearchAcronym[]
     */
    public array $acronyms = [];

    /** 
     * Administrative answer in Microsoft Search results for common search queries in an organization.
     * @var SearchBookmark[]
     */
    public array $bookmarks = [];

    /** 
     * Administrative answer in Microsoft Search results that provide answers for specific search keywords in an organization.
     * @var SearchQna[]
     */
    public array $qnas = [];


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
        if (isset($data['acronyms'])) {
            $this->acronyms = $data['acronyms'];
        }
        if (isset($data['bookmarks'])) {
            $this->bookmarks = $data['bookmarks'];
        }
        if (isset($data['qnas'])) {
            $this->qnas = $data['qnas'];
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
