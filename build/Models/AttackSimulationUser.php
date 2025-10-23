<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttackSimulationUser
 */
class AttackSimulationUser
{
    /** Display name of the user. */
    public ?string $displayName = null;

    /** Email address of the user. */
    public ?string $email = null;

    /** This is the id property value of the user resource that represents the user in the Microsoft Entra tenant. */
    public ?string $userId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['email'])) {
            $this->email = $data['email'];
        }
        if (isset($data['userId'])) {
            $this->userId = $data['userId'];
        }
    }
}
