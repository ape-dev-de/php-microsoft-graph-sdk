<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIdentityContainer
 */
class SecurityIdentityContainer
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents potential issues identified by Microsoft Defender for Identity within a customer's Microsoft Defender for Identity configuration.
     * @var SecurityHealthIssue[]
     */
    public array $healthIssues = [];

    /** 
     * Represents a customer's Microsoft Defender for Identity sensors.
     * @var SecuritySensor[]
     */
    public array $sensors = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['healthIssues'])) {
            $this->healthIssues = $data['healthIssues'];
        }
        if (isset($data['sensors'])) {
            $this->sensors = $data['sensors'];
        }
    }
}
