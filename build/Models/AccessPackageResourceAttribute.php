<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageResourceAttribute
 */
class AccessPackageResourceAttribute
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Information about how to set the attribute, currently a accessPackageUserDirectoryAttributeStore type.
     * @var AccessPackageResourceAttributeDestination|\stdClass|null
     */
    public AccessPackageResourceAttributeDestination|\stdClass|null $destination = null;

    /**  */
    public ?bool $isEditable = null;

    /**  */
    public ?bool $isPersistedOnAssignmentRemoval = null;

    /** The name of the attribute in the end system. If the destination is accessPackageUserDirectoryAttributeStore, then a user property such as jobTitle or a directory schema extension for the user object type, such as extension2b676109c7c74ae2b41549205f1947edpersonalTitle. */
    public ?string $name = null;

    /** 
     * Information about how to populate the attribute value when an accessPackageAssignmentRequest is being fulfilled, currently a accessPackageResourceAttributeQuestion type.
     * @var AccessPackageResourceAttributeSource|\stdClass|null
     */
    public AccessPackageResourceAttributeSource|\stdClass|null $source = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['destination'])) {
            $this->destination = is_array($data['destination']) ? new AccessPackageResourceAttributeDestination($data['destination']) : $data['destination'];
        }
        if (isset($data['isEditable'])) {
            $this->isEditable = is_bool($data['isEditable']) ? $data['isEditable'] : (bool)$data['isEditable'];
        }
        if (isset($data['isPersistedOnAssignmentRemoval'])) {
            $this->isPersistedOnAssignmentRemoval = is_bool($data['isPersistedOnAssignmentRemoval']) ? $data['isPersistedOnAssignmentRemoval'] : (bool)$data['isPersistedOnAssignmentRemoval'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['source'])) {
            $this->source = is_array($data['source']) ? new AccessPackageResourceAttributeSource($data['source']) : $data['source'];
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
