<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsApp
 */
class TeamsApp
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The name of the catalog app provided by the app developer in the Microsoft Teams zip app package. */
    public ?string $displayName = null;

    /** 
     * The method of distribution for the app. Read-only.
     * @var TeamsAppDistributionMethod|\stdClass|null
     */
    public mixed $distributionMethod = null;

    /** The ID of the catalog provided by the app developer in the Microsoft Teams zip app package. */
    public ?string $externalId = null;

    /** 
     * The details for each version of the app.
     * @var TeamsAppDefinition[]
     */
    public array $appDefinitions = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['distributionMethod'])) {
            $this->distributionMethod = is_array($data['distributionMethod']) ? new TeamsAppDistributionMethod($data['distributionMethod']) : $data['distributionMethod'];
        }
        if (isset($data['externalId'])) {
            $this->externalId = $data['externalId'];
        }
        if (isset($data['appDefinitions'])) {
            $this->appDefinitions = $data['appDefinitions'];
        }
    }
}
