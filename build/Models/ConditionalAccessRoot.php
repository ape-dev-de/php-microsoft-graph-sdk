<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessRoot
 */
class ConditionalAccessRoot
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Read-only. Nullable. Returns a collection of the specified authentication context class references.
     * @var AuthenticationContextClassReference[]
     */
    public array $authenticationContextClassReferences = [];

    /** 
     * 
     * @var AuthenticationStrengthRoot|\stdClass|null
     */
    public mixed $authenticationStrength = null;

    /** 
     * Read-only. Nullable. Returns a collection of the specified named locations.
     * @var NamedLocation[]
     */
    public array $namedLocations = [];

    /** 
     * Read-only. Nullable. Returns a collection of the specified Conditional Access (CA) policies.
     * @var ConditionalAccessPolicy[]
     */
    public array $policies = [];

    /** 
     * Read-only. Nullable. Returns a collection of the specified Conditional Access templates.
     * @var ConditionalAccessTemplate[]
     */
    public array $templates = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['authenticationContextClassReferences'])) {
            $this->authenticationContextClassReferences = $data['authenticationContextClassReferences'];
        }
        if (isset($data['authenticationStrength'])) {
            $this->authenticationStrength = is_array($data['authenticationStrength']) ? new AuthenticationStrengthRoot($data['authenticationStrength']) : $data['authenticationStrength'];
        }
        if (isset($data['namedLocations'])) {
            $this->namedLocations = $data['namedLocations'];
        }
        if (isset($data['policies'])) {
            $this->policies = $data['policies'];
        }
        if (isset($data['templates'])) {
            $this->templates = $data['templates'];
        }
    }
}
