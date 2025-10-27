<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsTab
 */
class TeamsTab
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Container for custom settings applied to a tab. The tab is considered configured only once this property is set.
     * @var TeamsTabConfiguration|\stdClass|null
     */
    public TeamsTabConfiguration|\stdClass|null $configuration = null;

    /** Name of the tab. */
    public ?string $displayName = null;

    /** Deep link URL of the tab instance. Read-only. */
    public ?string $webUrl = null;

    /** 
     * The application that is linked to the tab. This can't be changed after tab creation.
     * @var TeamsApp|\stdClass|null
     */
    public TeamsApp|\stdClass|null $teamsApp = null;


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
        if (isset($data['configuration'])) {
            $this->configuration = is_array($data['configuration']) ? new TeamsTabConfiguration($data['configuration']) : $data['configuration'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['webUrl'])) {
            $this->webUrl = $data['webUrl'];
        }
        if (isset($data['teamsApp'])) {
            $this->teamsApp = is_array($data['teamsApp']) ? new TeamsApp($data['teamsApp']) : $data['teamsApp'];
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
