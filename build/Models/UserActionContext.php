<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserActionContext
 */
class UserActionContext
{
    /** 
     * Represents the user action that the authenticating identity is performing. The possible values are: registerSecurityInformation, registerOrJoinDevices, unknownFutureValue.
     * @var UserAction|\stdClass|null
     */
    public mixed $userAction = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['userAction'])) {
            $this->userAction = is_array($data['userAction']) ? new UserAction($data['userAction']) : $data['userAction'];
        }
    }
}
