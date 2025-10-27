<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchIdentitySet
 */
class SearchIdentitySet
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * 
     * @var SearchIdentity|\stdClass|null
     */
    public SearchIdentity|\stdClass|null $application = null;

    /** 
     * 
     * @var SearchIdentity|\stdClass|null
     */
    public SearchIdentity|\stdClass|null $device = null;

    /** 
     * 
     * @var SearchIdentity|\stdClass|null
     */
    public SearchIdentity|\stdClass|null $user = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['application'])) {
            $this->application = is_array($data['application']) ? new SearchIdentity($data['application']) : $data['application'];
        }
        if (isset($data['device'])) {
            $this->device = is_array($data['device']) ? new SearchIdentity($data['device']) : $data['device'];
        }
        if (isset($data['user'])) {
            $this->user = is_array($data['user']) ? new SearchIdentity($data['user']) : $data['user'];
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
