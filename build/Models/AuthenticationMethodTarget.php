<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodTarget
 */
class AuthenticationMethodTarget
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Determines if the user is enforced to register the authentication method. */
    public ?bool $isRegistrationRequired = null;

    /**  */
    public ?AuthenticationMethodTargetType $targetType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['isRegistrationRequired'])) {
            $this->isRegistrationRequired = $data['isRegistrationRequired'];
        }
        if (isset($data['targetType'])) {
            $this->targetType = $data['targetType'];
        }
    }
}
