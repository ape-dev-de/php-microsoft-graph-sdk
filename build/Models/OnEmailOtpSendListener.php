<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnEmailOtpSendListener
 */
class OnEmailOtpSendListener
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
     * Used to configure what to invoke if the onEmailOTPSend event resolves to this listener. This base class serves as a generic OTP event handler used for both email and SMS OTP messages.
     * @var OnOtpSendHandler|\stdClass|null
     */
    public OnOtpSendHandler|\stdClass|null $handler = null;


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
            $this->handler = is_array($data['handler']) ? new OnOtpSendHandler($data['handler']) : $data['handler'];
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
