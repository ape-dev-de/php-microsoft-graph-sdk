<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnUserCreateStartExternalUsersSelfServiceSignUp
 */
class OnUserCreateStartExternalUsersSelfServiceSignUp
{
    /** 
     * The type of user to create. Maps to userType property of user object. The possible values are: member, guest, unknownFutureValue.
     * @var UserType|\stdClass|null
     */
    public mixed $userTypeToCreate = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['userTypeToCreate'])) {
            $this->userTypeToCreate = $data['userTypeToCreate'];
        }
    }
}
