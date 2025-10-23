<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnAuthenticationMethodLoadStartListener
 */
class OnAuthenticationMethodLoadStartListener
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The identifier of the authenticationEventsFlow object. */
    public ?string $authenticationEventsFlowId = null;

    /** 
     * The conditions on which this authenticationEventListener should trigger.
     * @var AuthenticationConditions|\stdClass|null
     */
    public mixed $conditions = null;

    /** 
     * Required. Configuration for what to invoke if the event resolves to this listener. This property lets us define potential handler configurations per-event.
     * @var OnAuthenticationMethodLoadStartHandler|\stdClass|null
     */
    public mixed $handler = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['authenticationEventsFlowId'])) {
            $this->authenticationEventsFlowId = $data['authenticationEventsFlowId'];
        }
        if (isset($data['conditions'])) {
            $this->conditions = $data['conditions'];
        }
        if (isset($data['handler'])) {
            $this->handler = $data['handler'];
        }
    }
}
