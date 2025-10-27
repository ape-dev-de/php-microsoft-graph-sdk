<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnInteractiveAuthFlowStartListener
 */
class OnInteractiveAuthFlowStartListener
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The identifier of the authenticationEventsFlow object. */
    public ?string $authenticationEventsFlowId = null;

    /** 
     * The conditions on which this authenticationEventListener should trigger.
     * @var AuthenticationConditions|\stdClass|null
     */
    public AuthenticationConditions|\stdClass|null $conditions = null;

    /** 
     * Required. Configuration for what to invoke if the event resolves to this listener. This lets us define potential handler configurations per-event.
     * @var OnInteractiveAuthFlowStartHandler|\stdClass|null
     */
    public OnInteractiveAuthFlowStartHandler|\stdClass|null $handler = null;


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
        if (isset($data['authenticationEventsFlowId'])) {
            $this->authenticationEventsFlowId = $data['authenticationEventsFlowId'];
        }
        if (isset($data['conditions'])) {
            $this->conditions = is_array($data['conditions']) ? new AuthenticationConditions($data['conditions']) : $data['conditions'];
        }
        if (isset($data['handler'])) {
            $this->handler = is_array($data['handler']) ? new OnInteractiveAuthFlowStartHandler($data['handler']) : $data['handler'];
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
