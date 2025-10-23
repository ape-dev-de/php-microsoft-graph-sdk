<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodsPolicy
 */
class AuthenticationMethodsPolicy
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** A description of the policy. Read-only. */
    public ?string $description = null;

    /** The name of the policy. Read-only. */
    public ?string $displayName = null;

    /** The date and time of the last update to the policy. Read-only. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * The state of migration of the authentication methods policy from the legacy multifactor authentication and self-service password reset (SSPR) policies. The possible values are: premigration - means the authentication methods policy is used for authentication only, legacy policies are respected. migrationInProgress - means the authentication methods policy is used for both authentication and SSPR, legacy policies are respected. migrationComplete - means the authentication methods policy is used for authentication and SSPR, legacy policies are ignored. unknownFutureValue - Evolvable enumeration sentinel value. Do not use.
     * @var AuthenticationMethodsPolicyMigrationState|\stdClass|null
     */
    public mixed $policyMigrationState = null;

    /** The version of the policy in use. Read-only. */
    public ?string $policyVersion = null;

    /**  */
    public ?float $reconfirmationInDays = null;

    /** 
     * Enforce registration at sign-in time. This property can be used to remind users to set up targeted authentication methods.
     * @var RegistrationEnforcement|\stdClass|null
     */
    public mixed $registrationEnforcement = null;

    /** 
     * Represents the settings for each authentication method. Automatically expanded on GET /policies/authenticationMethodsPolicy.
     * @var AuthenticationMethodConfiguration[]
     */
    public array $authenticationMethodConfigurations = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['policyMigrationState'])) {
            $this->policyMigrationState = is_array($data['policyMigrationState']) ? new AuthenticationMethodsPolicyMigrationState($data['policyMigrationState']) : $data['policyMigrationState'];
        }
        if (isset($data['policyVersion'])) {
            $this->policyVersion = $data['policyVersion'];
        }
        if (isset($data['reconfirmationInDays'])) {
            $this->reconfirmationInDays = $data['reconfirmationInDays'];
        }
        if (isset($data['registrationEnforcement'])) {
            $this->registrationEnforcement = is_array($data['registrationEnforcement']) ? new RegistrationEnforcement($data['registrationEnforcement']) : $data['registrationEnforcement'];
        }
        if (isset($data['authenticationMethodConfigurations'])) {
            $this->authenticationMethodConfigurations = $data['authenticationMethodConfigurations'];
        }
    }
}
